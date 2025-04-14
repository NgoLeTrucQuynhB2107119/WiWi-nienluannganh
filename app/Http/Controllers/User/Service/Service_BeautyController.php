<?php

namespace App\Http\Controllers\User\Service;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\DichVu;
class Service_BeautyController extends Controller
{
    public function index(){
        $dichvu=DichVu::with('LoaiDichVu')->where('LDV_MA',1)->get();
        return view('user.service_beauty',compact('dichvu'));
    }
}
