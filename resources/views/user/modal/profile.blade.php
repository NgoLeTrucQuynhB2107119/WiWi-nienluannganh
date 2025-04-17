@if(Auth::guard('web')->check())
    <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="profileModalLabel">Thông tin cá nhân</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Hiển thị thông tin cá nhân -->
                <div class="modal-body">
                    <p><strong>Họ và Tên:</strong> {{ Auth::guard('web')->user()->KH_HOTEN }}</p>
                    <p><strong>Email:</strong> {{ Auth::guard('web')->user()->KH_EMAIL }}</p>
                    <p><strong>Số điện thoại:</strong> {{ Auth::guard('web')->user()->KH_SDT }}</p>
                    <p><strong>Địa chỉ:</strong> {{ Auth::guard('web')->user()->KH_DIACHI }}</p>
                </div>
                <div class="modal-footer">
                    <!-- Chuyển tới trang chỉnh sửa -->
                    @if (!$editMode)
                        <a href="{{ route('profile') }}?edit=true" class="btn btn-primary">Sửa</a>
                    @else
                        <a href="{{ route('editProfile') }}" class="btn btn-success">Lưu thay đổi</a>
                    @endif
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                </div>
            </div>
        </div>
    </div>
@endif
