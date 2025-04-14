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
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $dv->DV_TEN }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">
                            Loại: {{ $dv->LoaiDichVu->LDV_TEN }}
                        </h6>
                        <p class="card-text">{{ $dv->DV_MOTA }}</p>
                        <p class="card-text"><strong>Thời gian:</strong> {{ $dv->DV_THOIGIAN_THUCHIEN }}</p>
                        <p class="card-text text-success"><strong>Giá:</strong> {{ number_format($dv->DV_GIA, 0, ',', '.') }} đ</p>
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
        transition: transform 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);
    }

    .btn-booking {
        position: absolute;
        bottom: -50px;
        left: 50%;
        transform: translateX(-50%);
        transition: all 0.3s ease;
        opacity: 0;
        animation: none;
    }

    .service-card:hover .btn-booking {
        bottom: 20px;
        opacity: 1;
        animation: shake 0.5s ease-in-out infinite;
    }

    @keyframes shake {
        0% { transform: translateX(-50%) translateY(0); }
        25% { transform: translateX(-50%) translateY(-2px); }
        50% { transform: translateX(-50%) translateY(2px); }
        75% { transform: translateX(-50%) translateY(-2px); }
        100% { transform: translateX(-50%) translateY(0); }
    }
</style>

@endsection
