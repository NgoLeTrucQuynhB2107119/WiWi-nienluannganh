@extends('admin.admin_layout')
@section('title')
<title>Admin/BookingFinal</title>
@endsection
@section('admin_content')
<div class="container mt-4">
    <h3 class="mb-3">Lịch hẹn khám tại phòng khám</h3>

    <form method="GET" class="row g-2 mb-4">
        <div class="col-md-2">
            <select name="month" class="form-control">
                @for($i = 1; $i <= 12; $i++)
                    <option value="{{ $i }}" {{ $month == $i ? 'selected' : '' }}>Tháng {{ $i }}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-2">
            <select name="year" class="form-control">
                @for($y = now()->year; $y <= now()->year + 2; $y++)
                    <option value="{{ $y }}" {{ $year == $y ? 'selected' : '' }}>{{ $y }}</option>
                @endfor
            </select>
        </div>
        <div class="col-md-2">
            <select name="nhanVien" class="form-control">
                <option value="">-- Chọn Nhân viên --</option>
                @foreach($nhanViens as $nv)
                    <option value="{{ $nv->NV_MA }}" {{ $nv->NV_MA == request('nhanVien') ? 'selected' : '' }}>
                        {{ $nv->NV_HOTEN }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <select name="loaiDichVu" class="form-control">
                <option value="">-- Chọn Dịch vụ --</option>
                @foreach($loaiDichVus as $ldv)
                    <option value="{{ $ldv->LDV_MA }}" {{ $ldv->LDV_MA == request('loaiDichVu') ? 'selected' : '' }}>
                        {{ $ldv->LDV_TEN }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="col-md-2">
            <button type="submit" class="btn btn-primary">Lọc</button>
        </div>
    </form>


    <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-secondary">
                <tr>
                    <th>Giờ / Ngày</th>
                    @for ($d = 0; $d < $daysInMonth; $d++)
                        <th>{{ $startDate->copy()->addDays($d)->format('d/m') }}</th>
                    @endfor
                </tr>
            </thead>
            <tbody>
                @foreach ($hours as $time)
                    <tr>
                        <th>{{ $time }}</th>
                        @for ($d = 0; $d < $daysInMonth; $d++)
                            @php
                                $date = $startDate->copy()->addDays($d)->format('Y-m-d');
                                $matching = $appointments->filter(function($a) use ($date, $time) {
                                    return \Carbon\Carbon::parse($a->LH_NGAYHEN)->format('Y-m-d') === $date &&
                                           \Carbon\Carbon::parse($a->LH_GIOHEN)->format('H:i') === $time;
                                });
                            @endphp
                            <td>
                                @foreach ($matching as $a)
                                    <div class="p-1 mb-1 rounded text-white" style="background-color: #6f42c1;">
                                        <strong>{{ $a->dichVu->DV_TEN ?? 'N/A' }}</strong><br>
                                        {{ $a->khachHang->KH_HOTEN ?? 'N/A' }}<br>
                                        {{ \Carbon\Carbon::parse($a->LH_GIOHEN)->format('H:i') }}<br>
                                        {{ $a->loaiThuCung->LTC_TEN ?? '' }}
                                    </div>
                                @endforeach
                            </td>
                        @endfor
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

