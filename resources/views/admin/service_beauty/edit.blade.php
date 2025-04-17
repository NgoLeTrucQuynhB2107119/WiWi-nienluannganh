@extends('admin.admin_layout')
@section('title')
<title>Service_Beauty</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Sửa Dịch Vụ Thẩm Mỹ</h2>

    <form action="{{ route('admin.serviceA.update', $dichvu->DV_MA) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="DV_TEN">Tên Dịch Vụ</label>
            <input type="text" class="form-control" id="DV_TEN" name="DV_TEN" value="{{ $dichvu->DV_TEN }}" required>
        </div>
        <div class="form-group">
            <label for="DV_MOTA">Mô Tả</label>
            <textarea class="form-control" id="DV_MOTA" name="DV_MOTA" required>{{ $dichvu->DV_MOTA }}</textarea>
        </div>
        <div class="form-group">
            <label for="DV_GIA">Giá Dịch Vụ</label>
            <input type="number" class="form-control" id="DV_GIA" name="DV_GIA" value="{{ $dichvu->DV_GIA }}" required>
        </div>
        <div class="form-group">
            <label for="LDV_MA">Loại Dịch Vụ</label>
            <select class="form-control" id="LDV_MA" name="LDV_MA" required>
                @foreach ($loai as $item)
                    <option value="{{ $item->LDV_MA }}" {{ $item->LDV_MA == $dichvu->LDV_MA ? 'selected' : '' }}>
                        {{ $item->LDV_TEN }}
                    </option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Cập Nhật</button>
    </form>
</div>
@endsection
