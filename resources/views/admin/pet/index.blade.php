@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Quản lý Loài Thú Cưng</h2>

    <a href="{{ route('admin.pet.create') }}" class="btn btn-primary mb-3">Thêm Mới</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Loài</th>
                <th class="text-center">Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach($pet as $item)
                <tr>
                    <td>{{ $item->LTC_MA }}</td>
                    <td>{{ $item->LTC_TEN }}</td>
                    <td class="text-center">
                        <a href="{{ route('admin.pet.edit', $item->LTC_MA) }}" class="btn btn-warning btn-sm">Sửa</a>
                        <form action="{{ route('admin.pet.destroy', $item->LTC_MA) }}" method="POST" style="display:inline-block;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

