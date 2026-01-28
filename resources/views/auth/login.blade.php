<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login | Sistem Inventaris Aset ESDMu</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
        }

        .login-box {
            background: #fff;
            padding: 30px;
            width: 350px;
            border-radius: 8px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e3c72;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            font-size: 14px;
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .btn-login {
            width: 100%;
            padding: 10px;
            background: #1e3c72;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .btn-login:hover {
            background: #16325c;
        }

        .error {
            color: red;
            font-size: 13px;
            margin-bottom: 10px;
            text-align: center;
        }

        .footer-text {
            text-align: center;
            margin-top: 15px;
            font-size: 12px;
            color: #666;
        }
    </style>
</head>
<body>

<div class="login-box">
    <h2>Login Sistem</h2>

    @if ($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <button class="btn-login" type="submit">Masuk</button>
    </form>

    <div class="footer-text">
        © {{ date('Y') }} PT Energi Swa Dinamika Muda
    </div>
</div>

</body>
</html>

