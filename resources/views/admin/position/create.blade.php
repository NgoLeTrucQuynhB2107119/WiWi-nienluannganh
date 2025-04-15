@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container">
    <h2>Thêm chức vụ mới</h2>
    <form method="POST" action="{{ route('admin.position.store') }}">
        @csrf
        <div class="mb-3">
            <label>Tên chức vụ</label>
            <input type="text" name="CV_TEN" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Mô tả</label>
            <textarea name="CV_MOTA" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
    </form>
</div>
@endsection
