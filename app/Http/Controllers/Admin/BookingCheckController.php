<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LichHen;
use App\Models\TrangThaiLichHen;
use App\Models\NhanVien;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Response;
class BookingCheckController extends Controller
{
    //A-Home B-Clinic
    public function indexA(Request $request)
    {
        $status = $request->status;

        $trangThais = TrangThaiLichHen::all();
        $nhanViens = NhanVien::all();

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

        return view('admin.booking_check.index_home', compact('appointments', 'trangThais','nhanViens'));
    }
    ////////////////////////////////////////////////////////////////
    public function indexB(Request $request)
    {
        $status = $request->status;

        $trangThais = TrangThaiLichHen::all();
        $nhanViens = NhanVien::all();

        $appointments = LichHen::with([
            'khachHang',
            'trangThaiLichHen',
            'hinhThuc',
            'loaiThuCung',
            'nhanVien',
            'chiTietLichHen.dichVu',
        ])
        ->where('HT_MA', 2)
        ->when($status, function ($query, $status) {
            return $query->where('TTLH_MA', $status);
        })
        ->get();

        return view('admin.booking_check.index_clinic', compact('appointments', 'trangThais','nhanViens'));
    }
    ///////////////////////////////////////////////////////////////////
    public function updateStatus(Request $request, $id)
    {
        $lichHen = LichHen::findOrFail($id);
        $lichHen->update(['TTLH_MA' => $request->TTLH_MA]);
        if ($request->TTLH_MA == 2 && $request->filled('NV_MA')) {
            $lichHen->NV_MA = $request->NV_MA;
        } else {
            $lichHen->NV_MA = null;
        }

        $lichHen->save();

        return back()->with('success', 'Cập nhật trạng thái thành công!');
    }
    public function markAsCompleted($id)
    {
        $lichHen = LichHen::with([
            'khachHang',
            'chiTietLichHen.dichVu',
            'loaiThuCung',
            'nhanVien',
            'hinhThuc'
        ])->findOrFail($id);

        // Cập nhật trạng thái thành "Đã khám"
        $lichHen->TTLH_MA = 4;
        $lichHen->save();

        // Xuất hóa đơn PDF
        $pdf = PDF::loadView('admin.invoice', compact('lichHen'));

        return $pdf->download("hoa-don-lich-hen-{$lichHen->LH_MA}.pdf");
    }
}