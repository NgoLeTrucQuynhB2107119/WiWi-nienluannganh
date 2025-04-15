@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Danh sách Khách hàng</h2>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Họ tên</th>
                <th scope="col">Email</th>
                <th scope="col">Giới tính</th>
                <th scope="col">Số điện thoại</th>
                <th scope="col">Địa chỉ</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($khachhang as $key => $kh)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $kh->KH_HOTEN }}</td>
                    <td>{{ $kh->KH_EMAIL }}</td>
                    <td>{{ $kh->KH_GIOITINH == 1 ? 'Nam' : 'Nữ' }}</td>
                    <td>{{ $kh->KH_SDT }}</td>
                    <td>{{ $kh->KH_DIACHI }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
