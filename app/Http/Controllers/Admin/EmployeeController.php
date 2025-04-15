<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\NhanVien;
use App\Models\ChucVu;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $nhanvien = NhanVien::all();
        return view('admin.employee.index',compact('nhanvien'));
    }
    public function create()
    {
        $chucvu = ChucVu::all();
        return view('admin.employee.create', compact('chucvu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'NV_EMAIL' => 'required|email',
            'NV_HOTEN' => 'required|string|max:100',
            'CV_MA' => 'required|exists:chuc_vus,CV_MA',
        ]);

        NhanVien::create($request->all());
        return redirect()->route('admin.employee.index')->with('success', 'Thêm nhân viên thành công!');
    }

    public function edit($id)
    {
        $nhanvien = NhanVien::findOrFail($id);
        $chucvu = ChucVu::all();
        return view('admin.employee.edit', compact('nhanvien', 'chucvu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'NV_EMAIL' => 'required|email',
            'NV_HOTEN' => 'required|string|max:100',
            'CV_MA' => 'required|exists:chuc_vus,CV_MA',
        ]);

        $nhanvien = NhanVien::findOrFail($id);
        $nhanvien->update($request->all());
        return redirect()->route('admin.employee.index')->with('success', 'Cập nhật nhân viên thành công!');
    }

    public function destroy($id)
    {
        $nhanvien = NhanVien::findOrFail($id);
        $nhanvien->delete();
        return redirect()->route('admin.employee.index')->with('success', 'Đã xóa nhân viên!');
    }
}