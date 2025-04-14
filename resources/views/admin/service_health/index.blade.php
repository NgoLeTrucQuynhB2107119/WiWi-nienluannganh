@extends('admin.admin_layout')
@section('title')
<title>Service_Health</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Quản lý Dịch Vụ Chăm sóc Sức khỏe</h2>

    <a href="{{ route('admin.serviceB.create') }}" class="btn btn-primary mb-3">Thêm mới dịch vụ</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Dịch Vụ</th>
                <th>Mô Tả</th>
                <th>Giá</th>
                <th>Loại Dịch Vụ</th>
                <th>Thời Gian Thực Hiện</th>
                <th>Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dichvu as $key => $dv)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $dv->DV_TEN }}</td>
                    <td>{{ $dv->DV_MOTA }}</td>
                    <td>{{ number_format($dv->DV_GIA, 0, ',', '.') }} đ</td>
                    <td>{{ $dv->LoaiDichVu->LDV_TEN }}</td>
                    <td>{{ $dv->DV_THOIGIAN_THUCHIEN }}</td>
                    <td>
                        <a href="{{ route('admin.serviceB.edit', $dv->DV_MA) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.serviceB.destroy', $dv->DV_MA) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
