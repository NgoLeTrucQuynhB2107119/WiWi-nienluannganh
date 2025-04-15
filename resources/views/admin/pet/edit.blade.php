@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container">
    <h1>Sửa Loài Thú Cưng</h1>
    <form action="{{ route('admin.pet.update', $pet->LTC_MA) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label for="LTC_TEN" class="form-label">Tên loài</label>
            <input type="text" name="LTC_TEN" class="form-control" value="{{ $pet->LTC_TEN }}" required>
        </div>
        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="{{ route('admin.pet.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
@endsection
