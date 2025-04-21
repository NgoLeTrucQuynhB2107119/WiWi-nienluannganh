<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phiếu đặt hẹn khám</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            color: #003f5c;
            margin: 20px;
        }
        h2 {
            text-align: center;
            color: #0077b6;
        }
        p {
            font-size: 16px;
            margin: 5px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 15px;
        }
        th, td {
            border: 1px solid #0077b6;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #caf0f8;
            color: #03045e;
        }
        tr:nth-child(even) {
            background-color: #f1f9ff;
        }
        tr:last-child {
            font-weight: bold;
            background-color: #e0f7ff;
        }
    </style>
</head>
<body>
    <h2>PHIẾU ĐẶT HẸN KHÁM</h2>
    <p><strong>Mã lịch hẹn:</strong> {{ $lichHen->LH_MA }}</p>
    <p><strong>Khách hàng:</strong> {{ $lichHen->khachHang->KH_HOTEN ?? '---' }}</p>
    <p><strong>Ngày hẹn:</strong> {{ \Carbon\Carbon::parse($lichHen->LH_NGAYHEN)->format('d/m/Y') }}</p>
    <p><strong>Giờ hẹn:</strong> {{ \Carbon\Carbon::parse($lichHen->LH_GIOHEN)->format('H:i') }}</p>
    <p><strong>Thú cưng:</strong> {{ $lichHen->loaiThuCung->LTC_TEN ?? '---' }}</p>
    <p><strong>Hình thức khám:</strong> {{ $lichHen->hinhThuc->HT_TEN ?? '---' }}</p>
    <p><strong>Nhân viên phụ trách:</strong> {{ $lichHen->nhanVien->NV_HOTEN ?? '---' }}</p>

    <h4 style="margin-top: 20px;">Dịch vụ đã chọn:</h4>
    <table>
        <thead>
            <tr>
                <th>Tên dịch vụ</th>
                <th>Giá</th>
            </tr>
        </thead>
        <tbody>
            @php $tongTien = 0; @endphp
            @foreach($lichHen->chiTietLichHen as $ct)
                <tr>
                    <td>{{ $ct->dichVu->DV_TEN ?? '' }}</td>
                    <td>{{ number_format($ct->dichVu->DV_GIA ?? 0, 0, ',', '.') }} đ</td>
                </tr>
                @php $tongTien += $ct->dichVu->DV_GIA ?? 0; @endphp
            @endforeach
            <tr>
                <td>Tổng cộng</td>
                <td>{{ number_format($tongTien, 0, ',', '.') }} đ</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
