@extends('user.user_layout')
@section('title')
<title>Home</title>
@endsection
@section('user_content')
@include('user.modal.review')
<!-- Bình luận chạy ngang -->
<div class="overflow-hidden bg-light py-3">
    <div class="d-flex flex-nowrap animate-scroll px-2">
        @if (isset($danhgias) && $danhgias->isEmpty())
            <p>Chưa có đánh giá nào.</p>
        @else
            @foreach ($danhgias as $dg)
                <div class="card mx-2" style="min-width: 300px;">
                    <div class="card-body">
                        @if($dg->dichVu)
                            <p class="mb-1"><strong>Dịch vụ:</strong> {{ $dg->dichVu->DV_TEN }}</p>
                        @endif
                        <h6 class="card-title mb-1">{{ $dg->khachHang->KH_HOTEN ?? 'Ẩn danh' }}</h6>
                        <div class="mb-1 text-warning">
                            @for ($i = 1; $i <= $dg->DG_DIEMSO; $i++) ★ @endfor
                            @for ($i = $dg->DG_DIEMSO + 1; $i <= 5; $i++) ☆ @endfor
                        </div>
                        <p class="card-text small">{{ $dg->DG_BINHLUAN }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
</div>

<!-- Nút để lại đánh giá -->
<div class="text-center my-4">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#popupDanhGia">
        Để lại đánh giá
    </button>
</div>

    <style>
        @keyframes scroll-left {
        0% { transform: translateX(100%); }
        100% { transform: translateX(-100%); }
    }

    .animate-scroll {
        display: inline-flex;
        animation: scroll-left 30s linear infinite;
    }
    </style>

@endsection
