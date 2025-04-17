@extends('admin.admin_layout')
@section('title')
<title>Service_Health</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Thêm Mới Dịch Vụ Sức Khỏe</h2>

    <form action="{{ route('admin.serviceB.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="DV_TEN">Tên Dịch Vụ</label>
            <input type="text" class="form-control" id="DV_TEN" name="DV_TEN" required>
        </div>
        <div class="form-group">
            <label for="DV_MOTA">Mô Tả</label>
            <textarea class="form-control" id="DV_MOTA" name="DV_MOTA" required></textarea>
        </div>
        <div class="form-group">
            <label for="DV_GIA">Giá Dịch Vụ</label>
            <input type="number" class="form-control" id="DV_GIA" name="DV_GIA" required>
        </div>
        <div class="form-group">
            <label for="LDV_MA">Loại Dịch Vụ</label>
            <select name="LDV_MA" class="form-control">
                @foreach ($loai as $item)
                    <option value="{{ $item->LDV_MA }}" {{ $item->LDV_MA == $loaiDichVu ? 'selected' : '' }}>
                        {{ $item->LDV_TEN }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Mới</button>
    </form>
</div>
@endsection
