<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\LoaiThuCung;
use Illuminate\Http\Request;

class PetController extends Controller
{
    public function index(){
        $pet = LoaiThuCung::all();
        return view('admin.pet.index',compact('pet'));
    }
    public function create()
    {
        return view('admin.pet.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'LTC_TEN' => 'required|string|max:100',
        ]);

        LoaiThuCung::create($request->all());
        return redirect()->route('admin.pet.index')->with('success', 'Thêm loài thú cưng thành công!');
    }

    public function edit($id)
    {
        $pet = LoaiThuCung::findOrFail($id);
        return view('admin.pet.edit', compact('pet'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'LTC_TEN' => 'required|string|max:100',
        ]);

        $pet = LoaiThuCung::findOrFail($id);
        $pet->update($request->all());
        return redirect()->route('admin.pet.index')->with('success', 'Cập nhật thành công!');
    }

    public function destroy($id)
    {
        $pet = LoaiThuCung::findOrFail($id);
        $pet->delete();
        return redirect()->route('admin.pet.index')->with('success', 'Đã xóa!');
    }

}