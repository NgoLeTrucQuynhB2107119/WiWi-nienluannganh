@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Quản lý Chức Vụ</h2>

    <a href="{{ route('admin.position.create') }}" class="btn btn-primary mb-3">Thêm mới</a>

    @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Chức Vụ</th>
                <th scope="col">Mô Tả</th>
                <th scope="col">Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($chucvu as $key=> $chucVu)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $chucVu->CV_TEN }}</td>
                    <td>{{ $chucVu->CV_MOTA }}</td>
                    <td>
                        <a href="{{ route('admin.servicetype.edit', ['id'=>$chucVu->CV_MA]) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.servicetype.destroy', $chucVu->CV_MA) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
