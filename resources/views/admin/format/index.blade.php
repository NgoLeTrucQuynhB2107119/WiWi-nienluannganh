@extends('admin.admin_layout')
@section('title')
<title>Format</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Quản lý Hình Thức</h2>

     <a href="{{ route('admin.format.create') }}" class="btn btn-primary mb-3">Thêm mới</a>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên Hình Thức</th>
                <th>Mô Tả</th>
                <th>Tùy Chỉnh</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($format as $key => $ht)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $ht->HT_TEN }}</td>
                    <td>{{ $ht->HT_MOTA }}</td>
                    <td>
                        <a href="{{ route('admin.format.edit', ['id' => $ht->HT_MA]) }}" class="btn btn-warning">Sửa</a>
                        <form action="{{ route('admin.format.destroy', $ht->HT_MA) }}" method="POST" style="display: inline-block;">
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
