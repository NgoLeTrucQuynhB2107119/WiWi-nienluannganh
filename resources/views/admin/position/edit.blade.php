@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container">
    <h2>Chỉnh sửa chức vụ</h2>
    <form method="POST" action="{{ route('admin.position.update', $chucvu->CV_MA) }}">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Tên chức vụ</label>
            <input type="text" name="CV_TEN" class="form-control" value="{{ $chuvu->CV_TEN }}" required>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="CV_MOTA" class="form-control">{{ $chucvu->CV_MOTA }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
@endsection
