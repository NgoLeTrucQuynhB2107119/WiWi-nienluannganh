<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LichHen;
use App\Models\TrangThaiLichHen;
class BookingCheckController extends Controller
{
    //A-Home B-Clinic
    public function indexA(Request $request)
    {
        $status = $request->status;

        $trangThais = TrangThaiLichHen::all();

        $appointments = LichHen::with([
            'khachHang',
            'trangThaiLichHen',
            'dichVu',
            'hinhThuc',
            'loaiThuCung',
            'nhanVien',
        ])
        ->where('HT_MA', 1)
        ->when($status, function ($query, $status) {
            return $query->where('TTLH_MA', $status);
        })
        ->get();

        return view('admin.booking_check.index_home', compact('appointments', 'trangThais'));
    }
    ////////////////////////////////////////////////////////////////
    public function indexB(Request $request)
    {
        $status = $request->status;

        $trangThais = TrangThaiLichHen::all();

        $appointments = LichHen::with([
            'khachHang',
            'trangThaiLichHen',
            'dichVu',
            'hinhThuc',
            'loaiThuCung',
            'nhanVien',
        ])
        ->where('HT_MA', 2)
        ->when($status, function ($query, $status) {
            return $query->where('TTLH_MA', $status);
        })
        ->get();

        return view('admin.booking_check.index_clinic', compact('appointments', 'trangThais'));
    }
    ///////////////////////////////////////////////////////////////////
    public function updateStatus(Request $request, $id)
    {
        $lichHen = LichHen::findOrFail($id);
        $lichHen->update(['TTLH_MA' => $request->TTLH_MA]);

        return back()->with('success', 'Cập nhật trạng thái thành công!');
    }
}
