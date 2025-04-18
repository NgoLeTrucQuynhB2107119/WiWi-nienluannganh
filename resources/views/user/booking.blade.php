@extends('user.user_layout')
@section('title')
<title>Booking</title>
@endsection
@section('user_content')
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
<div class="container mt-4">
    <h3 class="mb-3">Tạo lịch hẹn khám bệnh</h3>

    <form action="{{ route('user.booking.store') }}" method="POST">
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row">
            <div class="col-md-4 mb-3">
                <label for="date" class="form-label">Chọn ngày hẹn</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label for="time" class="form-label">Chọn giờ hẹn</label>
                <select name="time" id="time" class="form-control" required>
                    <option value="08:00">08:00</option>
                    <option value="09:00">09:00</option>
                    <option value="10:00">10:00</option>
                    <option value="11:00">11:00</option>
                    <option value="12:00">12:00</option>
                    <option value="13:00">13:00</option>
                    <option value="14:00">14:00</option>
                    <option value="15:00">15:00</option>
                    <option value="16:00">16:00</option>
                    <option value="17:00">17:00</option>
                    <option value="18:00">18:00</option>
                    <option value="19:00">19:00</option>
                </select>
            </div>
            <div class="col-md-4 mb-3">
                <label for="service" class="form-label">Chọn dịch vụ</label>
                <div class="form-check">
                    @foreach ($services as $service)
                        <input type="checkbox" name="service[]" value="{{ $service->DV_MA }}" class="form-check-input" data-price="{{ $service->DV_GIA }}" onchange="updateTotal()">
                        <label class="form-check-label">
                            {{ $service->DV_TEN }}- {{ number_format($service->DV_GIA , 0, ',', '.') }}đ
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <label class="form-label">Tổng tiền dịch vụ</label>
            <input type="text" class="form-control" id="total_amount" value="0đ" readonly>
        </div>

        <div class="mb-3">
            <label for="pet_type" class="form-label">Loại thú cưng</label>
            <select name="pets" id="pets" class="form-control" required>
                @foreach ($pets as $pet)
                    <option value="{{ $pet->LTC_MA }}">{{ $pet->LTC_TEN }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="customer_name" class="form-label">Tên khách hàng</label>
            <input type="text" name="customer_name" value="{{ old('customer_name', $customer->KH_HOTEN ?? '') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="contact_number" class="form-label">Số điện thoại</label>
            <input type="text" name="contact_number" value="{{ old('contact_number', $customer->KH_SDT ?? '') }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="form_type" class="form-label">Hình thức khám</label>
            <select name="form_type" id="form_type" class="form-control" onchange="toggleAddressField()" required>
                @foreach ($formTypes as $formType)
                    <option value="{{ $formType->HT_MA }}">{{ $formType->HT_TEN }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3" id="address_field" style="{{ old('form_type') == 1 ? '' : 'display:none;' }}">
            <label for="address" class="form-label">Địa chỉ</label>
            <input type="text" name="address" value="{{ old('address', $customer->KH_DIACHI ?? '') }}" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Tạo lịch hẹn</button>
    </form>

    {{-- Hiện form để nhập địa chỉ --}}
    <script>
        function toggleAddressField() {
            var formType = document.getElementById("form_type").value;
            var addressField = document.getElementById("address_field");
            addressField.style.display = formType == "1" ? "block" : "none";
        }
    </script>
    {{-- Xử lsy tổng tiền trên front --}}
    <script>
        function updateTotal() {
            let total = 0;

            document.querySelectorAll('input[name="service[]"]:checked').forEach(function(checkbox) {
                total += parseInt(checkbox.getAttribute('data-price'));
            });
            // Cập nhật tổng tiền vào ô input
            document.getElementById('total_amount').value = total ? total.toLocaleString() + 'đ' : '0đ';
        }
    </script>
@endsection
