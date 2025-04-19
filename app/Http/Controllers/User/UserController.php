<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\DanhGia;
use App\Models\DichVu;

class UserController extends Controller
{
    //Lỡ gòi thì lưu dô luon, ĐỪNG ĐỔI HAY XÓA NHE QUỲNH ƠIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIIII
    public function open_home(){
        $danhgias = DanhGia::with('dichVu', 'khachHang')->latest()->get();
        $dichvus = DichVu::all();
        return view('user.index',compact('danhgias','dichvus'));
    }
    public function open_service(){
        return view('user.service');
    }
    public function open_contact(){
        return view('user.contact');
    }
    // public function open_info(){
    //     return view('user.info');
    // }
    public function open_adminhome(){
        return view('admin.index');
    }
    //XỬ LÝ QUẢ LÝ TÀI KHOẢN Ở ĐÂY
    public function index(){

    }

}
