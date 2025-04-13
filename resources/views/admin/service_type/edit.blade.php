@extends('admin.admin_layout')
@section('title')
<title>Service Type</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Chỉnh sửa Loại Dịch Vụ</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.servicetype.update', ['id'=>$loai->LDV_MA]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="LDV_TEN">Tên Loại Dịch Vụ</label>
            <input type="text" class="form-control" id="LDV_TEN" name="LDV_TEN" value="{{ old('LDV_TEN', $loai->LDV_TEN) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="LDV_MOTA">Mô Tả</label>
            <textarea class="form-control" id="LDV_MOTA" name="LDV_MOTA" rows="4">{{ old('LDV_MOTA', $loai->LDV_MOTA) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Cập nhật</button>
        <a href="{{ route('admin.servicetype.index') }}" class="btn btn-secondary">Hủy</a>
    </form>
</div>
@endsection
