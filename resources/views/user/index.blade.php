@extends('user.user_layout')
@section('title')
<title>Home</title>
@endsection
@section('user_content')
@include('user.modal.review')
<!-- Bài viết thú cưng -->
<div class="container my-5">
    <h4 class="text-center mb-4">Tin tức thú cưng nổi bật</h4>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <!-- Bài 1 -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0"style="width: 400px;">
                <img src="{{ asset('/userlayout/img/husky.jpg') }}" class="card-img-top" style="height: 300px;" alt="Chó con dễ thương">
                <div class="card-body">
                    <h5 class="card-title">5 Cách Giúp Cún Con Phát Triển Toàn Diện</h5>
                    <p class="card-text">Từ chế độ ăn đến lịch khám định kỳ, đây là những điều bạn cần biết để cún yêu luôn khỏe mạnh và năng động.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <!-- Bài 2 -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="width: 400px;">
                <img src="{{ asset('/userlayout/img/meo.jpg') }}" class="card-img-top" style="height: 300px;" alt="Mèo xinh">
                <div class="card-body">
                    <h5 class="card-title">Giải mã hành vi thường gặp của mèo</h5>
                    <p class="card-text">Tại sao mèo lại kêu vào đêm, hay gãi vào sofa? Tìm hiểu để hiểu "hoàng thượng" hơn nhé!</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
        <!-- Bài 3 -->
        <div class="col">
            <div class="card h-100 shadow-sm border-0" style="width: 400px;">
                <img src="{{ asset('/userlayout/img/smile.jpg') }}" class="card-img-top" style="height: 300px;" alt="Chăm sóc thú cưng">
                <div class="card-body">
                    <h5 class="card-title">Lịch tiêm phòng đầy đủ cho thú cưng</h5>
                    <p class="card-text">Đừng để cún/mèo nhà bạn bỏ lỡ các mũi vắc xin quan trọng. Lên lịch tiêm phòng đầy đủ giúp phòng bệnh hiệu quả.</p>
                    <a href="#" class="btn btn-sm btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>

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
