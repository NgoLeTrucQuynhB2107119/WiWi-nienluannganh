@extends('admin.admin_layout')
@section('title')
<title>Format</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2>Sửa Hình Thức</h2>

    <form action="{{ route('admin.format.update', $hinhthuc->HT_MA) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="HT_TEN" class="form-label">Tên Hình Thức</label>
            <input type="text" name="HT_TEN" class="form-control" value="{{ $hinhthuc->HT_TEN }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.format.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
