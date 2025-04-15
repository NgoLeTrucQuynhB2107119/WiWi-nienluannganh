@extends('admin.admin_layout')
@section('title')
<title>Home/Admin</title>
@endsection
@section('admin_content')
<div class="container">
    <h1>Sửa Nhân Viên</h1>
    <form action="{{ route('admin.employee.update', $nhanvien->NV_MA) }}" method="POST">
        @csrf @method('PUT')
        <div class="mb-3">
            <label>Họ tên</label>
            <input type="text" name="NV_HOTEN" class="form-control" value="{{ $nhanvien->NV_HOTEN }}" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="email" name="NV_EMAIL" class="form-control" value="{{ $nhanvien->NV_EMAIL }}" required>
        </div>
        <div class="mb-3">
            <label>SĐT</label>
            <input type="text" name="NV_SDT" class="form-control" value="{{ $nhanvien->NV_SDT }}">
        </div>
        <div class="mb-3">
            <label>Chức vụ</label>
            <select name="CV_MA" class="form-control">
                @foreach($chucvu as $cv)
                    <option value="{{ $cv->CV_MA }}" {{ $nhanvien->CV_MA == $cv->CV_MA ? 'selected' : '' }}>
                        {{ $cv->CV_TEN }}
                    </option>
                @endforeach
            </select>
        </div>
        <button class="btn btn-success">Cập nhật</button>
        <a href="{{ route('admin.employee.index') }}" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
