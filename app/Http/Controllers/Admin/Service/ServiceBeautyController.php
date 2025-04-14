<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DichVu;
use App\Models\LoaiDichVu;
class ServiceBeautyController extends Controller
{
    public function index()
    {
        $dichvu = DichVu::where('LDV_MA', 1)->get();
        return view('admin.service_beauty.index', compact('dichvu'));
    }

    public function create()
    {
        $loai = LoaiDichVu::all();
        return view('admin.service_beauty.create', [
            'loai' => LoaiDichVu::where('LDV_MA', 1)->get(),
            'loaiDichVu' => 1
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'DV_TEN' => 'required',
            'DV_MOTA' => 'required',
            'DV_GIA' => 'required',
            'DV_THOIGIAN_THUCHIEN' => 'required',
        ]);

        DichVu::create([
            'DV_TEN' => $request->DV_TEN,
            'DV_MOTA' => $request->DV_MOTA,
            'DV_GIA' => $request->DV_GIA,
            'DV_THOIGIAN_THUCHIEN' => $request->DV_THOIGIAN_THUCHIEN,
            'LDV_MA' => 1,
        ]);

        return redirect()->route('admin.serviceA.index')->with('success', 'Thêm dịch vụ thẩm mỹ thành công!');
    }

    public function edit($id)
{
    $dichvu = DichVu::find($id);
    $loai = LoaiDichVu::all();
    return view('admin.service_beauty.edit', compact('dichvu', 'loai'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'DV_TEN' => 'required',
            'DV_MOTA' => 'required',
            'DV_GIA' => 'required',
            'DV_THOIGIAN_THUCHIEN' => 'required',
        ]);

        $dichvu = DichVu::find($id);
        $dichvu->update([
            'DV_TEN' => $request->DV_TEN,
            'DV_MOTA' => $request->DV_MOTA,
            'DV_GIA' => $request->DV_GIA,
            'DV_THOIGIAN_THUCHIEN' => $request->DV_THOIGIAN_THUCHIEN,
            'LDV_MA' => $request->LDV_MA,
        ]);

        return redirect()->route('admin.serviceA.index')->with('success', 'Dịch vụ đã được cập nhật!');
    }

    public function destroy($id)
    {
        DichVu::find($id)->delete();
        return redirect()->route('admin.serviceA.index')->with('success', 'Dịch vụ đã được xóa!');
    }
}