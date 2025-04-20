<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LichHen;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
class ShowBookingHistoryController extends Controller
{
    public function showHistory(){
        $customer = auth('web')->user();

        $appointments = LichHen::where('KH_MA', $customer->KH_MA)->get();
        return view('user.modal.booking_final', compact('appointments'));
    }
    public function exportPDF($id)
    {
        $customer = auth('web')->user();

        $lichHen = LichHen::with([
            'khachHang',
            'chiTietLichHen.dichVu',
            'loaiThuCung',
            'nhanVien',
            'hinhThuc'
        ])
        ->where('KH_MA', $customer->KH_MA)
        ->findOrFail($id);

        $pdf = PDF::loadView('user.invoice', compact('lichHen'));
        return $pdf->stream("hoa-don-lich-hen-{$lichHen->LH_MA}.pdf");
    }
    public function destroy($id)
    {
        $customer = auth('web')->user();

        $lichHen = LichHen::where('KH_MA', $customer->KH_MA)->findOrFail($id);

        $lichHen->delete();

        return redirect()->back()->with('success', 'Lịch hẹn đã được xóa thành công.');
    }
}