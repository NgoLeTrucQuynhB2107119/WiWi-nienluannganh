<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileController extends Controller
{
    public function showProfile()
    {
        $editMode = request()->has('edit');
        return view('user.modal.profile', compact('editMode'));
    }
    public function editProfile()
    {
        return view('user.edit_profile');
    }

    public function updateProfile(Request $request)
    {
        $validatedData = $request->validate([
            'KH_HOTEN' => 'required|string|max:255',
            'KH_EMAIL' => 'required|email|unique:khach_hangs,KH_EMAIL,' . Auth::guard('web')->id() . ',KH_MA',
            'KH_SDT' => 'nullable|string|max:15',
            'KH_DIACHI' => 'nullable|string|max:255',
        ]);
        /** @var \App\Models\KhachHang $user */
        $user = Auth::guard('web')->user();
        $user->fill($validatedData)->save();
        return redirect()->route('profile')->with('success', 'Cập nhật thành công!');
    }
}