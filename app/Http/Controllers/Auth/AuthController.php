<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }
    public function showRegisterForm(){
        return view('register');
    }
    public function register(Request $request)
    {
        $request->validate([
            'KH_HOTEN' => 'required|string|max:255',
            'KH_EMAIL' => 'required|email|unique:khach_hangs,KH_EMAIL',
            'KH_MATKHAU' => 'required|min:6|confirmed',
            'KH_SDT' => 'nullable|string|max:10',
            'KH_DIACHI' => 'nullable|string|max:255',
            'KH_GIOITINH' => 'nullable|string|in:Nam,Nữ,Khác'
        ]);

        $khachhang=KhachHang::create([
            'KH_HOTEN' => $request->KH_HOTEN,
            'KH_EMAIL' => $request->KH_EMAIL,
            'KH_MATKHAU' => Hash::make($request->KH_MATKHAU),
            'KH_SDT' => $request->KH_SDT,
            'KH_DIACHI' => $request->KH_DIACHI,
            'KH_GIOITINH' => $request->KH_GIOITINH,
        ]);

        Auth::guard('web')->login($khachhang);

        return redirect()->route('login')->with('success', 'Đăng ký thành công!');

    }

    public function login(Request $request)
    {
        $credentials = [
            'KH_EMAIL' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Chào mừng bạn trở lại!');
        }
        ///////////////////////////////////////////////
        $credentials = [
            'QTV_EMAIL' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('admin_home')->with('success', 'Đăng nhập thành công!');
        }

        return back()->withInput()->withErrors(['login_error' => 'Email hoặc mật khẩu không đúng.']);
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Đã đăng xuất thành công.');
    }
}