@if(Auth::guard('web')->check())
<div class="modal fade" id="popupDanhGia" tabindex="-1" aria-labelledby="popupDanhGiaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content p-3">
            <div class="modal-header">
                <h5 class="modal-title" id="popupDanhGiaLabel">Tất cả đánh giá</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Đóng"></button>
            </div>
            <div class="modal-body">

                <!-- Danh sách đánh giá -->
                <div class="mb-3" style="max-height: 300px; overflow-y: auto;">
                    @if ($danhgias->isEmpty())
                        <p>Chưa có đánh giá nào.</p>
                    @else
                        @foreach ($danhgias->sortByDesc('created_at') as $dg)
                            <div class="border-bottom mb-2 pb-2">
                                @if($dg->dichVu)
                                    <p class="mb-1"><strong>Dịch vụ:</strong> {{ $dg->dichVu->DV_TEN }}</p>
                                @endif
                                <strong>{{ $dg->khachHang->KH_HOTEN ?? 'Ẩn danh' }}</strong>
                                <span class="text-warning">
                                    @for ($i = 1; $i <= $dg->DG_DIEMSO; $i++) ★ @endfor
                                    @for ($i = $dg->DG_DIEMSO + 1; $i <= 5; $i++) ☆ @endfor
                                </span>
                                <p class="mb-1">{{ $dg->DG_BINHLUAN }}</p>
                                <small class="text-muted">
                                    {{ $dg->created_at ? $dg->created_at->format('d/m/Y H:i') : 'Không rõ thời gian' }}
                                </small>
                            </div>
                        @endforeach
                    @endif
                </div>

                <!-- Viết đánh giá -->
                <form action="{{ route('user.review.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="KH_MA" value="{{ auth()->guard('web')->user()->KH_MA ?? '' }}">

                    <div class="mb-3">
                        <label for="dichvu" class="form-label">Chọn dịch vụ (nếu có):</label>
                        <select class="form-select" name="DV_MA" id="dichvu">
                            <option value="">-- Không chọn dịch vụ --</option>
                            @foreach ($dichvus as $dv)
                                <option value="{{ $dv->DV_MA }}">{{ $dv->DV_TEN }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Số sao:</label><br>
                        @for ($i = 1; $i <= 5; $i++)
                            <label class="form-check-inline">
                                <input type="radio" name="DG_DIEMSO" value="{{ $i }}" required>
                                <span class="text-warning">★</span>
                            </label>
                        @endfor
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Bình luận:</label>
                        <textarea name="DG_BINHLUAN" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Gửi đánh giá</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
