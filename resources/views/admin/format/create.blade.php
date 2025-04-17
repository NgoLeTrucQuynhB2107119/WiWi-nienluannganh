@extends('admin.admin_layout')
@section('title')
<title>Format</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2>Thêm Hình Thức</h2>

    <form action="{{ route('admin.format.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="HT_TEN" class="form-label">Tên Hình Thức</label>
            <input type="text" name="HT_TEN" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('admin.format.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
