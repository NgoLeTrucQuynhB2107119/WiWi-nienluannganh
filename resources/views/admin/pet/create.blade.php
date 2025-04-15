@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container">
    <h1>Thêm Loài Thú Cưng</h1>
    <form action="{{ route('admin.pet.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="LTC_TEN" class="form-label">Tên loài</label>
            <input type="text" name="LTC_TEN" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('admin.pet.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
