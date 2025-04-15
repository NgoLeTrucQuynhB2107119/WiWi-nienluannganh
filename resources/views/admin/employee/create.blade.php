@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container">
    <h1>Thêm Nhân Viên</h1>
    <form action="{{ route('admin.employee.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label>Họ tên</label>
            <input type="text" name="NV_HOTEN" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="NV_EMAIL" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>SĐT</label>
            <input type="text" name="NV_SDT" class="form-control">
        </div>
        <div class="mb-3">
            <label>Chức vụ</label>
            <select name="CV_MA" class="form-control">
                @foreach($chucvu as $cv)
                    <option value="{{ $cv->CV_MA }}">{{ $cv->CV_TEN }}</option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Lưu</button>
        <a href="{{ route('admin.employee.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
