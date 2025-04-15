<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ChucVu;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    public function index(){
        $chucvu=ChucVu::all();
        return view('admin.position.index',compact('chucvu'));
    }
    public function create()
    {
        return view('admin.position.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'CV_TEN' => 'required|string|max:100',
            'CV_MOTA' => 'nullable|string',
        ]);

        ChucVu::create($request->all());

        return redirect()->route('admin.position.index')->with('success', 'Thêm chức vụ thành công!');
    }

    public function edit($id)
    {
        $chucvu = ChucVu::findOrFail($id);
        return view('admin.position.edit', compact('chucvu'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'CV_TEN' => 'required|string|max:100',
            'CV_MOTA' => 'nullable|string',
        ]);

        $chucvu = ChucVu::findOrFail($id);
        $chucvu->update($request->all());

        return redirect()->route('admin.position.index')->with('success', 'Cập nhật chức vụ thành công!');
    }

    public function destroy($id)
    {
        ChucVu::destroy($id);
        return redirect()->route(route: 'admin.position.index')->with('success', 'Xóa chức vụ thành công!');
    }
}