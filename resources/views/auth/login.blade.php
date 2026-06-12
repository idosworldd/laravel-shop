<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin LUXÉVAIN</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: #f6f1ea;
            color: #1d1d1d;
            font-family: Arial, sans-serif;
        }

        .login-container {
            width: 100%;
            max-width: 430px;
            padding: 42px;
            background: #ffffff;
            border: 1px solid #ded2c3;
        }

        .brand {
            margin-bottom: 12px;
            text-align: center;
            font-family: Georgia, serif;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 4px;
        }

        h1 {
            margin: 0 0 32px;
            text-align: center;
            font-size: 20px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 13px;
            border: 1px solid #cccccc;
            font: inherit;
        }

        .remember {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
        }

        .remember label {
            margin: 0;
            font-weight: normal;
        }

        .error {
            margin-top: 7px;
            color: #b42318;
            font-size: 14px;
        }

        .btn {
            width: 100%;
            padding: 14px;
            border: none;
            background: #1d1d1d;
            color: #ffffff;
            cursor: pointer;
            font-size: 14px;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        .back {
            display: block;
            margin-top: 22px;
            text-align: center;
            color: #555555;
            text-decoration: none;
        }
    </style>
</head>

<body>

<div class="login-container">
    <div class="brand">LUXÉVAIN</div>

    <h1>Login Administrator</h1>

    <form action="{{ route('login.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="email">Email</label>

            <input
                type="email"
                id="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >

            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>

            <input
                type="password"
                id="password"
                name="password"
                required
            >

            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="remember">
            <input
                type="checkbox"
                id="remember"
                name="remember"
                value="1"
            >

            <label for="remember">
                Ingat saya
            </label>
        </div>

        <button type="submit" class="btn">
            Masuk
        </button>
    </form>

    <a href="{{ route('shop') }}" class="back">
        Kembali ke toko
    </a>
</div>

</body>
</html>