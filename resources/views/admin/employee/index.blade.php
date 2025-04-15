@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Quản lý Nhân Viên</h2>

    <a href="{{ route('admin.employee.create') }}" class="btn btn-primary mb-3">Thêm Mới</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Họ tên</th>
                <th>Email</th>
                <th>SĐT</th>
                <th>Chức vụ</th>
                <th class="text-center">Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nhanvien as $nv)
                <tr>
                    <td>{{ $nv->NV_MA }}</td>
                    <td>{{ $nv->NV_HOTEN }}</td>
                    <td>{{ $nv->NV_EMAIL }}</td>
                    <td>{{ $nv->NV_SDT }}</td>
                    <td>{{ $nv->chucVu->CV_TEN ?? 'Chưa có' }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.employee.edit', $nv->NV_MA) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.employee.destroy', $nv->NV_MA) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Xác nhận xóa nhân viên này?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

