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
                                                <br>
                                                <a href="{{ route('user.booking.pdf', $appointment->LH_MA) }}" class="btn btn-sm btn-primary mt-1" target="_blank">
                                                    Xem PDF
                                                </a>
                                                <br>
                                                <form action="{{ route('user.booking.destroy', $appointment->LH_MA) }}" method="POST" onsubmit="return confirm('Bạn có chắc muốn xóa lịch hẹn này?');">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Xóa</button>
                                                </form>
                                            @elseif($appointment->TTLH_MA == 2)
                                                Đã Duyệt
                                                <br>
                                                <a href="{{ route('user.booking.pdf', $appointment->LH_MA) }}" class="btn btn-sm btn-primary mt-1" target="_blank">
                                                    Xem PDF
                                                </a>
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
    .modal-body>table>thead>tr>th,
    .modal-body>table>tbody>tr>td
    {
        color: #000000
    }
    .bg-warning {
    background-color: #eadb9d !important;
    }
    .bg-success {
        background-color: #9acaec !important;
    }
    .bg-danger {
        background-color: #fa7582 !important;
    }

</style>
