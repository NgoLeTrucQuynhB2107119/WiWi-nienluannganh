<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserController extends Controller
{
    public function open_home(){
        return view('user.index');
    }
    public function open_service(){
        return view('user.service');
    }
    public function open_contact(){
        return view('user.contact');
    }
    public function open_info(){
        return view('user.info');
    }
    public function open_adminhome(){
        return view('admin.index');
    }
}