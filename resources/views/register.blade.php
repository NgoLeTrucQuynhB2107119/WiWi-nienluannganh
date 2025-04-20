<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #777777;
            margin: 0;
            font-family: 'Roboto', sans-serif;
        }

        .register-container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        .register-container h2 {
            margin-bottom: 30px;
            color: #1B2C51;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
            text-align: left;
        }

        .form-group label {
            margin-bottom: 5px;
            color: #1B2C51;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #1B2C51;
            border-radius: 10px;
            box-sizing: border-box;
            font-size: 16px;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group input:focus {
            border-color: #7ca1f0;
        }

        .register-btn,
        .return-btn {
            width: 100%;
            padding: 15px;
            background-color: #136DBD;
            color: #fff;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s;
            margin-top: 10px;
        }

        .register-btn:hover,
        .return-btn:hover {
            background-color: #7ca1f0;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        .login-link {
            display: block;
            margin-top: 15px;
            color: #7ca1f0;
            text-decoration: none;
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h2>Đăng ký tài khoản</h2>

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="KH_HOTEN" placeholder="Nhập họ và tên" required value="{{ old('name') }}">
                @error('KH_HOTEN')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="KH_EMAIL" placeholder="Nhập email" required value="{{ old('email') }}">
                @error('KH_EMAIL')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="KH_SDT">Số điện thoại:</label>
                <input type="text" id="KH_SDT" name="KH_SDT" placeholder="Nhập số điện thoại">
                @error('KH_SDT')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="KH_DIACHI">Địa chỉ:</label>
                <input type="text" id="KH_DIACHI" name="KH_DIACHI" placeholder="Nhập địa chỉ">
                @error('KH_DIACHI')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="KH_GIOITINH">Giới tính:</label>
                <select id="KH_GIOITINH" name="KH_GIOITINH">
                    <option value="">-- Chọn giới tính --</option>
                    <option value="Nam" {{ old('KH_GIOITINH') == 'Nam' ? 'selected' : '' }}>Nam</option>
                    <option value="Nữ" {{ old('KH_GIOITINH') == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                    <option value="Khác" {{ old('KH_GIOITINH') == 'Khác' ? 'selected' : '' }}>Khác</option>
                </select>
                @error('KH_GIOITINH')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="KH_MATKHAU" placeholder="Nhập mật khẩu" required>
                @error('KH_MATKHAU')
                <div class="error-message">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Xác nhận mật khẩu:</label>
                <input type="password" id="password_confirmation" name="KH_MATKHAU_confirmation" placeholder="Nhập lại mật khẩu" required>
            </div>

            <button type="submit" class="register-btn">Đăng ký</button>
        </form>

        <a href="{{ route('login') }}" class="login-link">Đã có tài khoản? Đăng nhập ngay</a>
    </div>
</body>

</html>
