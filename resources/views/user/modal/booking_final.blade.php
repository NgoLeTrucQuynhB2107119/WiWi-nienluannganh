@if(Auth::guard('web')->check())
    @php
        $appointments = \App\Models\LichHen::where('KH_MA', Auth::guard('web')->user()->KH_MA)
        ->with(['chiTietLichHen' => function($query) {
            $query->with('dichVu');
        }])->get();
    @endphp
    <div class="modal fade" id="bookingHistoryModal" tabindex="-1" aria-labelledby="bookingHistoryModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="bookingHistoryModalLabel">Lịch sử Lịch Hẹn</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- Hiển thị danh sách lịch hẹn -->
                <div class="modal-body">
                    @if($appointments->isEmpty())
                        <p>Không có lịch hẹn nào được gửi.</p>
                    @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Ngày Hẹn</th>
                                    <th>Giờ Hẹn</th>
                                    <th>Dịch Vụ</th>
                                    <th>Trạng Thái</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($appointments as $appointment)
                                    <tr class="{{ $appointment->TTLH_MA == 1 ? 'bg-warning' : ($appointment->TTLH_MA == 2 ? 'bg-success' : 'bg-danger') }}">
                                        <td>{{ $appointment->LH_NGAYHEN }}</td>
                                        <td>{{ $appointment->LH_GIOHEN }}</td>
                                        <td>
                                            @foreach($appointment->chiTietLichHen as $detail)
                                                {{ $detail->dichVu->DV_TEN }} - {{ number_format($detail->GIA, 0, ',', '.') }}đ <br>
                                            @endforeach
                                        </td>
                                        <td>
                                            @if($appointment->TTLH_MA == 1)
                                                Chờ Duyệt
                                            @elseif($appointment->TTLH_MA == 2)
                                                Đã Duyệt
                                            @else
                                                Không Duyệt
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                </div>
            </div>
        </div>
    </div>
@endif
<style>
    .bg-warning {
    background-color: #ffcc00 !important;
    }
    .bg-success {
        background-color: #28a745 !important;
    }
    .bg-danger {
        background-color: #dc3545 !important;
    }
</style>
