<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\HinhThuc;

class FormatController extends Controller
{
    public function index(){
        $format = HinhThuc::all();
        return view('admin.format.index',compact('format'));
    }
    public function create(){
        return view('admin.format.create');
    }

    public function store(Request $request){
        HinhThuc::create($request->only('HT_TEN', 'HT_MOTA'));
        return redirect()->route('admin.format.index')->with('success', 'Thêm mới thành công!');
    }

    public function edit($id){
        $hinhthuc = HinhThuc::findOrFail($id);
        return view('admin.format.edit', compact('hinhthuc'));
    }

    public function update(Request $request, $id){
        $hinhthuc = HinhThuc::findOrFail($id);
        $hinhthuc->update($request->only('HT_TEN', 'HT_MOTA'));
        return redirect()->route('admin.format.index')->with('success', 'Cập nhật thành công!');
    }

    public function destroy($id){
        $hinhthuc = HinhThuc::findOrFail($id);
        $hinhthuc->delete();
        return redirect()->route('admin.format.index')->with('success', 'Đã xóa thành công!');
    }
}