<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LichHen;
class ShowBookingHistoryController extends Controller
{
    public function showHistory(){
        $customer = auth('web')->user();

        $appointments = LichHen::where('KH_MA', $customer->KH_MA)->get();
        return view('user.modal.booking_final', compact('appointments'));
    }
}
