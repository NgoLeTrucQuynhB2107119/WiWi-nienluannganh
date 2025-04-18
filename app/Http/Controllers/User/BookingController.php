<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Models\DichVu;
use Illuminate\Http\Request;
use App\Models\LichHen;
use App\Models\LoaiThuCung;
use App\Models\HinhThuc;
use App\Models\ChiTietLichHen;
class BookingController extends Controller
{
    public function index(){
        $services = DichVu::all();
        $pets = LoaiThuCung::all();
        $formTypes = HinhThuc::all();
        $customer = auth('web')->user();
        return view('user.booking', compact('services','pets','formTypes','customer'));

    }
    public function store(Request $request)
    {
        $customer = auth('web')->user();

        if (!$customer) {
            return back()->withErrors('Đăng nhập mới tạo lịch hẹn được nhoa!');
        }

        $validated = $request->validate([
            'date' => 'required|date',
            'time' => 'required|string',
            'service' => 'required|array',
            'service.*' => 'exists:dich_vus,DV_MA',
            'pets' => 'required|exists:loai_thu_cungs,LTC_MA',
            'customer_name' => 'required|string',
            'contact_number' => 'required|string',
            'form_type' => 'required|string',
            'address' => 'required_if:form_type,1|nullable|string',
        ]);

        $customer = auth('web')->user();

        if (!$customer) {
            return redirect()->back()->withErrors('Không tìm thấy khách hàng!');
        }

        $lichHen = new LichHen();
        $lichHen->LH_NGAYHEN = $validated['date'];
        $lichHen->LH_GIOHEN = $validated['time'];
        $lichHen->LTC_MA = $validated['pets'];
        $lichHen->NV_MA = null;
        $lichHen->KH_MA = $customer->KH_MA;
        $lichHen->TTLH_MA = 1;
        $lichHen->HT_MA = $validated['form_type'];

        if ($validated['form_type'] == 1) {
            $lichHen->LH_DIACHI = $request->input('address') ?? $customer->KH_DIACHI;
        }

        $lichHen->save();

        $totalAmount = 0;
        if (!empty($validated['service']) && is_array($validated['service'])) {
            foreach ($validated['service'] as $serviceId) {
                $service = DichVu::find($serviceId);

                if ($service) {
                    ChiTietLichHen::create([
                        'LH_MA' => $lichHen->LH_MA,
                        'DV_MA' => $serviceId,
                        'GIA' => $service->DV_GIA,
                    ]);

                    $totalAmount += $service->DV_GIA;
                }
            }
        }

        $lichHen->LH_TONGTIEN = $totalAmount;
        $lichHen->save();

        return redirect()->route('user.booking.index')->with('success', 'Lịch hẹn đã được tạo thành công!');
    }
}
