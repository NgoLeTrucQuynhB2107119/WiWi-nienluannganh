<?php

namespace App\Http\Controllers\Admin\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DichVu;
use App\Models\LoaiDichVu;
class ServiceHealthController extends Controller
{
    public function index()
    {
        $dichvu = DichVu::where('LDV_MA', 2)->get();
        return view('admin.service_health.index', compact('dichvu'));
    }

    public function create()
    {
        $loai = LoaiDichVu::all();
        return view('admin.service_health.create', [
            'loai' => LoaiDichVu::where('LDV_MA', 2)->get(),
            'loaiDichVu' => 2
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'DV_TEN' => 'required',
            'DV_MOTA' => 'required',
            'DV_GIA' => 'required',
        ]);

        DichVu::create([
            'DV_TEN' => $request->DV_TEN,
            'DV_MOTA' => $request->DV_MOTA,
            'DV_GIA' => $request->DV_GIA,
            'LDV_MA' => 2,
        ]);

        return redirect()->route('admin.serviceB.index')->with('success', 'Thêm sịch vụ sức khỏe thành công!');
    }

    public function edit($id)
{
    $dichvu = DichVu::find($id);
    $loai = LoaiDichVu::all();
    return view('admin.service_health.edit', compact('dichvu', 'loai'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'DV_TEN' => 'required',
            'DV_MOTA' => 'required',
            'DV_GIA' => 'required',
        ]);

        $dichvu = DichVu::find($id);
        $dichvu->update([
            'DV_TEN' => $request->DV_TEN,
            'DV_MOTA' => $request->DV_MOTA,
            'DV_GIA' => $request->DV_GIA,
            'LDV_MA' => $request->LDV_MA,
        ]);

        return redirect()->route('admin.serviceB.index')->with('success', 'Dịch vụ đã được cập nhật!');
    }

    public function destroy($id)
    {
        DichVu::find($id)->delete();
        return redirect()->route('admin.serviceB.index')->with('success', 'Dịch vụ đã được xóa!');
    }
}
