<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Contact - LUXÉVAIN</title>

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

        .contact-section {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 70px;
            max-width: 1250px;
            min-height: 78vh;
            margin: auto;
            padding: 80px 60px;
        }

        .contact-info span {
            display: block;
            margin-bottom: 18px;
            color: #7a6858;
            font-family: Arial, sans-serif;
            font-size: 13px;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .contact-info h1 {
            margin-bottom: 28px;
            font-size: 62px;
            line-height: 1;
            letter-spacing: 3px;
            text-transform: uppercase;
        }

        .contact-info > p {
            max-width: 500px;
            margin-bottom: 35px;
            color: #5f554b;
            font-family: Arial, sans-serif;
            font-size: 17px;
            line-height: 1.8;
        }

        .contact-list {
            display: grid;
            gap: 15px;
        }

        .contact-item {
            padding: 18px;
            background: #ece3d8;
            color: #1d1d1d;
            font-family: Arial, sans-serif;
            text-decoration: none;
        }

        .contact-item strong {
            display: block;
            margin-bottom: 6px;
        }

        .contact-form {
            padding: 38px;
            background: #ffffff;
            border: 1px solid #ded2c3;
        }

        .contact-form h2 {
            margin-bottom: 28px;
            font-size: 32px;
        }

        .form-group {
            margin-bottom: 22px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-family: Arial, sans-serif;
            font-size: 14px;
            font-weight: bold;
        }

        input,
        textarea {
            width: 100%;
            padding: 14px;
            border: 1px solid #cccccc;
            background: #ffffff;
            font-family: Arial, sans-serif;
            font-size: 15px;
        }

        textarea {
            min-height: 150px;
            resize: vertical;
        }

        .btn {
            width: 100%;
            padding: 15px;
            border: none;
            background: #1d1d1d;
            color: #ffffff;
            cursor: pointer;
            font-family: Arial, sans-serif;
            font-size: 13px;
            letter-spacing: 2px;
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

            .contact-section {
                grid-template-columns: 1fr;
                padding: 50px 22px;
            }

            .contact-info h1 {
                font-size: 44px;
            }

            .contact-form {
                padding: 25px;
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

<main class="contact-section">
    <section class="contact-info">
        <span>Contact Us</span>

        <h1>Let’s Talk</h1>

        <p>
            Hubungi kami untuk informasi produk, ketersediaan ukuran,
            pemesanan, dan pertanyaan lainnya.
        </p>

        <div class="contact-list">
            <a
                href="https://wa.me/6281234567890"
                target="_blank"
                class="contact-item"
            >
                <strong>WhatsApp</strong>
                +62 812-3456-7890
            </a>

            <a
                href="https://instagram.com/luxevain"
                target="_blank"
                class="contact-item"
            >
                <strong>Instagram</strong>
                @luxevain
            </a>

            <a
                href="mailto:hello@luxevain.com"
                class="contact-item"
            >
                <strong>Email</strong>
                hello@luxevain.com
            </a>
        </div>
    </section>

    <section class="contact-form">
        <h2>Kirim Pesan</h2>

        <form id="whatsappForm">
            <div class="form-group">
                <label for="name">Nama</label>

                <input
                    type="text"
                    id="name"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="message">Pesan</label>

                <textarea
                    id="message"
                    required
                ></textarea>
            </div>

            <button type="submit" class="btn">
                Kirim via WhatsApp
            </button>
        </form>
    </section>
</main>

<footer>
    <div>© 2026 LUXÉVAIN</div>
    <div>Instagram · WhatsApp · Email</div>
</footer>

<script>
    const form = document.getElementById('whatsappForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();

        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        const whatsappNumber = '6281234567890';

        const whatsappMessage =
            `Halo LUXÉVAIN,%0A%0A` +
            `Nama: ${encodeURIComponent(name)}%0A` +
            `Email: ${encodeURIComponent(email)}%0A` +
            `Pesan: ${encodeURIComponent(message)}`;

        window.open(
            `https://wa.me/${whatsappNumber}?text=${whatsappMessage}`,
            '_blank'
        );
    });
</script>

</body>
</html>