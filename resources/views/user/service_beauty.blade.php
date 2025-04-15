@extends('user.user_layout')
@section('title')
<title>Service</title>
@endsection
@section('user_content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Dịch Vụ Thẩm Mỹ</h2>
    <div class="row">
        @foreach ($dichvu as $dv)
            <div class="col-md-4 mb-4">
                <div class="card service-card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $dv->DV_TEN }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Loại: {{ $dv->LoaiDichVu->LDV_TEN }}
                        </h6>
                        <p class="card-text">{{ $dv->DV_MOTA }}</p>
                        <p class="card-text"><strong>Thời gian:</strong> {{ $dv->DV_THOIGIAN_THUCHIEN }}</p>
                        <p class="card-text text-success"><strong>Giá:</strong> {{ number_format($dv->DV_GIA, 0, ',', '.') }} đ</p>

                        <a href="#" class="btn btn-primary btn-booking">
                            Đặt lịch hẹn
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    .service-card {
        position: relative;
        overflow: hidden;
        transition: all 0.4s ease;
    }

    .service-card:hover {
        background-color: rgba(167, 167, 167, 0.7);
        backdrop-filter: blur(3px);
    }

    .btn-booking {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%) translateY(20px);
        opacity: 0;
        transition: all 0.4s ease;
    }

    .service-card:hover .btn-booking {
        transform: translateX(-50%) translateY(0);
        opacity: 1;
    }
</style>
@endsection


