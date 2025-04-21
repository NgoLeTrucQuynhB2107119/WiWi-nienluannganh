<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Hóa đơn dịch vụ khám</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            color: #003366;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #005B96;
            margin-bottom: 30px;
        }
        p {
            margin: 4px 0;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
            font-size: 14px;
        }
        th, td {
            border: 1px solid #003366;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #cce6ff;
            color: #003366;
        }
        .total-row th {
            background-color: #b3daff;
            font-weight: bold;
        }
        .signature {
            margin-top: 50px;
            text-align: right;
            font-size: 14px;
        }
        .signature p {
            margin: 6px 0;
        }
    </style>
</head>
<body>
    <h2>HÓA ĐƠN DỊCH VỤ KHÁM</h2>

    <p><strong>Mã lịch hẹn:</strong> {{ $lichHen->LH_MA }}</p>
    <p><strong>Khách hàng:</strong> {{ $lichHen->khachHang->KH_HOTEN ?? '---' }}</p>
    <p><strong>Ngày hẹn:</strong> {{ \Carbon\Carbon::parse($lichHen->LH_NGAYHEN)->format('d/m/Y') }}</p>
    <p><strong>Giờ hẹn:</strong> {{ \Carbon\Carbon::parse($lichHen->LH_GIOHEN)->format('H:i') }}</p>
    <p><strong>Thú cưng:</strong> {{ $lichHen->loaiThuCung->LTC_TEN ?? '---' }}</p>
    <p><strong>Hình thức khám:</strong> {{ $lichHen->hinhThuc->HT_TEN ?? '---' }}</p>
    <p><strong>Nhân viên phụ trách:</strong> {{ $lichHen->nhanVien->NV_HOTEN ?? '---' }}</p>

    <h4 style="margin-top: 30px; color: #005B96;">Dịch vụ đã chọn:</h4>
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
            <tr class="total-row">
                <th>Tổng cộng</th>
                <th>{{ number_format($tongTien, 0, ',', '.') }} đ</th>
            </tr>
        </tbody>
    </table>

    <div class="signature">
        <p>..., ngày {{ now()->day }} tháng {{ now()->month }} năm {{ now()->year }}</p>
        <p>Người lập phiếu</p>
        <p><strong><em>(Ký và ghi rõ họ tên)</em></strong></p>
    </div>
</body>
</html>
