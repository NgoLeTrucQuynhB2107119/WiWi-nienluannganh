@extends('user.user_layout')
@section('title')
<title>Profile</title>
@endsection
@section('user_content')
<div class="container">
    <h3>Chỉnh sửa thông tin cá nhân</h3>
    <form action="{{ route('updateProfile') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Họ và Tên</label>
            <input type="text" class="form-control" id="name" name="KH_HOTEN" value="{{ Auth::guard('web')->user()->KH_HOTEN }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="KH_EMAIL" value="{{ Auth::guard('web')->user()->KH_EMAIL }}">
        </div>
        <div class="form-group">
            <label for="phone">Số điện thoại</label>
            <input type="text" class="form-control" id="phone" name="KH_SDT" value="{{ Auth::guard('web')->user()->KH_SDT }}">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" class="form-control" id="address" name="KH_DIACHI" value="{{ Auth::guard('web')->user()->KH_DIACHI }}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success">Lưu</button>
            <a href="{{ route('profile') }}" class="btn btn-secondary">Hủy</a>
        </div>
    </form>
</div>
@endsection
