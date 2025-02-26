<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
