<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>About - LUXÉVAIN</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: #f6f1ea;
            color: #1d1d1d;
            font-family: Georgia, "Times New Roman", serif;
        }

        header {
            width: 100%;
            padding: 28px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f6f1ea;
            border-bottom: 1px solid #ded2c3;
        }

        .logo {
            color: #1d1d1d;
            font-size: 28px;
            font-weight: bold;
            letter-spacing: 4px;
            text-decoration: none;
        }

        nav a {
            margin-left: 32px;
            color: #1d1d1d;
            font-size: 14px;
            letter-spacing: 2px;
            text-decoration: none;
            text-transform: uppercase;
        }

        .about-hero {
            min-height: 82vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            gap: 70px;
            padding: 80px 60px;
        }

        .about-image {
            min-height: 580px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(
                135deg,
                #2c211b,
                #9f7c5d,
                #e8d8c4
            );
            color: white;
            font-size: 16px;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        .about-content span {
            display: block;
            margin-bottom: 18px;
            color: #7a6858;
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .about-content h1 {
            margin-bottom: 28px;
            font-size: 64px;
            line-height: 1;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .about-content p {
            max-width: 560px;
            margin-bottom: 18px;
            color: #5f554b;
            font-family: Arial, sans-serif;
            font-size: 17px;
            line-height: 1.8;
        }

        .btn {
            display: inline-block;
            margin-top: 18px;
            padding: 16px 32px;
            background: #1d1d1d;
            color: white;
            font-family: Arial, sans-serif;
            font-size: 13px;
            letter-spacing: 2px;
            text-decoration: none;
            text-transform: uppercase;
        }

        footer {
            padding: 34px 60px;
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #ded2c3;
            color: #5f554b;
            font-family: Arial, sans-serif;
            font-size: 14px;
        }

        @media (max-width: 900px) {
            header {
                padding: 22px;
                flex-direction: column;
                gap: 18px;
            }

            nav a {
                margin: 0 9px;
                font-size: 12px;
            }

            .about-hero {
                grid-template-columns: 1fr;
                padding: 40px 22px;
            }

            .about-image {
                min-height: 400px;
            }

            .about-content h1 {
                font-size: 44px;
            }

            footer {
                padding: 28px 22px;
                flex-direction: column;
                gap: 10px;
            }
        }
    </style>
</head>

<body>

<header>
    <a href="{{ route('home') }}" class="logo">
        LUXÉVAIN
    </a>

    <nav>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('shop') }}">Shop</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<main class="about-hero">
    <div class="about-image">
        Brand Story
    </div>

    <div class="about-content">
        <span>About Our Brand</span>

        <h1>Modern Style With Purpose</h1>

        <p>
            LUXÉVAIN menghadirkan koleksi fashion dengan pendekatan
            minimalis, modern, dan elegan.
        </p>

        <p>
            Setiap produk dipilih untuk memberikan kenyamanan,
            kualitas, dan tampilan yang tetap relevan dalam berbagai
            kesempatan.
        </p>

        <a href="{{ route('shop') }}" class="btn">
            Explore Collection
        </a>
    </div>
</main>

<footer>
    <div>© 2026 LUXÉVAIN</div>
    <div>Instagram · WhatsApp · Email</div>
</footer>

</body>
</html>