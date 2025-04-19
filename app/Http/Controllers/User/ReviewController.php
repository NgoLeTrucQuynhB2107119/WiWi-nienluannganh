<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\DanhGia;
use App\Models\DichVu;
class ReviewController extends Controller
{
    public function index(){
        $danhgias = DanhGia::with('khachHang','dichVu')->latest()->get();
        $dichvus=DichVu::all();
        return view('user.index',compact('danhgias','dichvus'));

    }
    public function store(Request $request)
    {
        $request->validate([
            'DG_DIEMSO' => 'required|integer|min:1|max:5',
            'DG_BINHLUAN' => 'required|string|max:1000',
            'KH_MA' => 'required|exists:khach_hangs,KH_MA',
            'DV_MA' => 'nullable|exists:dich_vus,DV_MA',
        ]);

        DanhGia::create($request->only('DG_DIEMSO', 'DG_BINHLUAN', 'KH_MA','DV_MA'));

        return redirect()->back()->with('success', 'Đánh giá đã được gửi!');
    }

}
