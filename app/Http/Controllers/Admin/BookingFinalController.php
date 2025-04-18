<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\LichHen;
use App\Models\LoaiDichVu;
use App\Models\NhanVien;
use App\Models\TrangThaiLichHen;
class BookingFinalController extends Controller
{
    //A-Home B-Clinic
    public function indexA(Request $request)
    {
        return $this->renderSchedule($request, 1, 'admin.booking_final.index_home');
    }

    public function indexB(Request $request)
    {
        return $this->renderSchedule($request, 2, 'admin.booking_final.index_clinic');
    }
    private function renderSchedule(Request $request, $hinhThuc, $view)
    {
        $month = $request->month ?? now()->month;
        $year = $request->year ?? now()->year;
        $nhanViens = NhanVien::all();
        $loaiDichVus = LoaiDichVu::all();

        $startDate = Carbon::create($year, $month, 1)->startOfMonth();
        $endDate = $startDate->copy()->endOfMonth();
        $daysInMonth = $startDate->daysInMonth;

        $hours = [];
        for ($hour = 8; $hour <= 20; $hour++) {
            $hours[] = sprintf('%02d:00', $hour);
        }

        $appointments = LichHen::with(['khachHang', 'loaiThuCung','TrangThaiLichHen','chiTietLichHen'])
            ->whereBetween('LH_NGAYHEN', [$startDate->toDateString(), $endDate->toDateString()])
            ->where('HT_MA', $hinhThuc)
            ->where('TTLH_MA', 2)
            ->when($request->nhanVien, function ($query) use ($request) {
                return $query->where('NV_MA', $request->nhanVien);
            })
            ->when($request->loaiDichVu, function ($query) use ($request) {
                return $query->whereHas('dichVu', function ($q) use ($request) {
                    $q->where('LDV_MA', $request->loaiDichVu);
                });
            })
            ->get();

            return view($view, compact('appointments', 'month', 'year', 'daysInMonth', 'startDate', 'hours', 'nhanViens', 'loaiDichVus'));
    }

}
