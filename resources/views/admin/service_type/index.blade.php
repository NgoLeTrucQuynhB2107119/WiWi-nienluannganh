@extends('admin.admin_layout')
@section('title')
<title>Service Type</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Quản lý Loại Dịch Vụ</h2>

    <a href="{{ route('admin.servicetype.create') }}" class="btn btn-primary mb-3">Thêm mới</a>

    @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Tên Loại Dịch Vụ</th>
                <th scope="col">Mô Tả</th>
                <th scope="col">Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($loai as $key=> $loaiDichVu)
                <tr>
                    <td>{{ $key + 1}}</td>
                    <td>{{ $loaiDichVu->LDV_TEN }}</td>
                    <td>{{ $loaiDichVu->LDV_MOTA }}</td>
                    <td>
                        <a href="{{ route('admin.servicetype.edit', ['id'=>$loaiDichVu->LDV_MA]) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.servicetype.destroy', $loaiDichVu->LDV_MA) }}" method="POST" style="display: inline-block;">
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
