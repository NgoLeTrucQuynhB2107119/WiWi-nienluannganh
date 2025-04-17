@extends('admin.admin_layout')
@section('title')
<title>Admin/BookingCheck</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h2 class="mb-4">Danh sách lịch hẹn tại phòng khám</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form method="GET" class="mb-4">
        <div class="row align-items-center">
            <div class="col-md-3">
                <label for="status" class="form-label">Lọc theo trạng thái:</label>
                <select name="status" id="status" class="form-select" onchange="this.form.submit()">
                    <option value="">-- Tất cả trạng thái --</option>
                    @foreach($trangThais as $tt)
                        <option value="{{ $tt->TTLH_MA }}" {{ request('status') == $tt->TTLH_MA ? 'selected' : '' }}>
                            {{ $tt->TTLH_TEN }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Khách hàng</th>
                <th>Ngày hẹn</th>
                <th>Giờ</th>
                <th>Dịch vụ</th>
                <th>Loại thú cưng</th>
                <th>Hình thức</th>
                <th>Nhân viên</th>
                <th>Trạng thái</th>
                <th>Cập nhật</th>
            </tr>
        </thead>
        <tbody>
            @foreach($appointments as $item)
                <tr class="@if($item->TTLH_MA == 1) table-warning
                            @elseif($item->TTLH_MA == 2) table-success
                            @elseif($item->TTLH_MA == 3) table-danger
                            @endif">
                    <td>{{ $item->khachHang->KH_HOTEN ?? '---' }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->LH_NGAYHEN)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($item->LH_GIOHEN)->format('H:i') }}</td>
                    <td>{{ $item->dichVu->DV_TEN ?? '---' }}</td>
                    <td>{{ $item->loaiThuCung->LTC_TEN ?? '---' }}</td>
                    <td>{{ $item->hinhThuc->HT_TEN ?? '---' }}</td>
                    <td>
                        @if ($item->TTLH_MA == 1)
                            <span class="text-warning fw-bold">Chưa có</span>
                        @elseif ($item->TTLH_MA == 3)
                            <span class="text-danger fw-bold">Không</span>
                        @elseif ($item->TTLH_MA == 2)
                            <span class="text-success fw-bold">{{ $item->nhanVien->NV_HOTEN ?? '---' }}</span>
                        @endif
                    </td>
                    <td>
                        <span class="badge bg-{{ $item->TTLH_MA == 1 ? 'warning' : ($item->TTLH_MA == 2 ? 'success' : 'danger') }}">
                            {{ $item->trangThaiLichHen->TTLH_TEN }}
                        </span>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('admin.updateBookingStatus', $item->LH_MA) }}" class="d-flex">
                            @csrf
                            @method('PUT')
                            <select name="TTLH_MA" class="form-select form-select-sm me-2">
                                @foreach($trangThais as $tt)
                                    <option value="{{ $tt->TTLH_MA }}" {{ $item->TTLH_MA == $tt->TTLH_MA ? 'selected' : '' }}>
                                        {{ $tt->TTLH_TEN }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
