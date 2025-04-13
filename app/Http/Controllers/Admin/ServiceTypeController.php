<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\LoaiDichVu;

class ServiceTypeController extends Controller
{
    public function index(){
        $loai = LoaiDichVu::all();
        return view('admin.service_type.index',compact('loai'));
    }
    public function create(){
        return view('admin.service_type.create');
    }
    public function store(Request $request){
        $request->validate([
            'LDV_TEN' => 'required|string|max:255',
            'LDV_MOTA' => 'nullable|string',
        ]);
        LoaiDichVu::create([
            'LDV_TEN' => $request->LDV_TEN,
            'LDV_MOTA' => $request->LDV_MOTA
        ]);
        return redirect()->route('admin.servicetype.index')->with('success', 'Thêm loại dịch vụ mới thành công!');
    }
    public function edit($id){
        $loai = LoaiDichVu::findOrFail($id);
        return view('admin.service_type.edit', compact('loai'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'LDV_TEN' => 'required|string|max:255',
            'LDV_MOTA' => 'nullable|string',
        ]);

        $loai = LoaiDichVu::findOrFail($id);
        $loai->update([
            'LDV_TEN' => $request->LDV_TEN,
            'LDV_MOTA' => $request->LDV_MOTA,
        ]);

        return redirect()->route('admin.servicetype.index')->with('success', 'Cập nhật loại dịch vụ thành công!');
    }
    public function destroy($id){
        $loai = LoaiDichVu::findOrFail($id);
        $loai->delete();
        return redirect()->route('admin.servicetype.index')->with('success', 'Xóa loại dịch vụ thành công!');
    }

}