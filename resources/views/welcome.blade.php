 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luxury Store</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Georgia, 'Times New Roman', serif;
            background: #f6f1ea;
            color: #1d1d1d;
        }

        header {
            width: 100%;
            padding: 28px 60px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: #f6f1ea;
            position: sticky;
            top: 0;
            z-index: 10;
            border-bottom: 1px solid #ded2c3;
        }

        .logo {
            font-size: 28px;
            letter-spacing: 4px;
            font-weight: bold;
        }

        nav a {
            margin-left: 32px;
            text-decoration: none;
            color: #1d1d1d;
            font-size: 14px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .hero {
            min-height: 85vh;
            display: grid;
            grid-template-columns: 1fr 1fr;
            align-items: center;
            padding: 70px 60px;
            gap: 50px;
        }

        .hero-text h1 {
            font-size: 76px;
            line-height: 0.95;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 24px;
        }

        .hero-text p {
            max-width: 460px;
            font-size: 18px;
            line-height: 1.7;
            color: #5f554b;
            margin-bottom: 34px;
        }

        .btn {
            display: inline-block;
            padding: 16px 34px;
            background: #1d1d1d;
            color: #ffffff;
            text-decoration: none;
            letter-spacing: 2px;
            font-size: 13px;
            text-transform: uppercase;
        }

        .hero-image {
            height: 620px;
            background: linear-gradient(135deg, #2c211b, #9f7c5d, #e8d8c4);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 18px;
            letter-spacing: 4px;
            text-transform: uppercase;
        }

        .section-title {
            text-align: center;
            padding: 80px 20px 40px;
        }

        .section-title h2 {
            font-size: 42px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .section-title p {
            color: #6c6259;
            font-size: 16px;
        }

        .collections {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
            padding: 0 60px 80px;
        }

        .collection-card {
            height: 430px;
            background: #d8c3ad;
            padding: 28px;
            display: flex;
            align-items: flex-end;
            .product-collection {
    position: relative;
    overflow: hidden;
    padding: 0;
    color: #ffffff;
    text-decoration: none;
}

.product-collection img {
    width: 100%;
    height: 100%;
    display: block;
    object-fit: cover;
    transition: transform 0.4s ease;
}

.product-collection:hover img {
    transform: scale(1.05);
}

.collection-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(
        to top,
        rgba(0, 0, 0, 0.75),
        rgba(0, 0, 0, 0.05)
    );
}

.collection-content {
    position: absolute;
    right: 28px;
    bottom: 28px;
    left: 28px;
    z-index: 2;
}

.collection-content h3 {
    margin-bottom: 8px;
}

.collection-content p {
    font-size: 16px;
}
        }

        .collection-card:nth-child(2) {
            background: #b99b7d;
        }

        .collection-card:nth-child(3) {
            background: #2b2622;
            color: #ffffff;
        }

        .collection-card h3 {
            font-size: 28px;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .about {
            background: #1d1d1d;
            color: #ffffff;
            padding: 90px 60px;
            text-align: center;
        }

        .about h2 {
            font-size: 44px;
            letter-spacing: 3px;
            text-transform: uppercase;
            margin-bottom: 22px;
        }

        .about p {
            max-width: 740px;
            margin: auto;
            line-height: 1.8;
            color: #d6d0ca;
            font-size: 17px;
        }

        footer {
            padding: 34px 60px;
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #ded2c3;
            font-size: 14px;
            color: #5f554b;
        }

        @media (max-width: 900px) {
            header {
                padding: 22px;
                flex-direction: column;
                gap: 18px;
            }

            nav a {
                margin: 0 10px;
                font-size: 12px;
            }

            .hero {
                grid-template-columns: 1fr;
                padding: 40px 22px;
            }

            .hero-text h1 {
                font-size: 48px;
            }

            .hero-image {
                height: 420px;
            }

            .collections {
                grid-template-columns: 1fr;
                padding: 0 22px 60px;
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
    <div class="logo">LUXÉVAIN</div>

    <nav>
        <a href="/">Home</a>
        <a href="/shop">Shop</a>
        <a href="{{ route('about') }}">About</a>
        <a href="{{ route('contact') }}">Contact</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h1>Modern Luxury Wear</h1>
        <p>
            A clean and premium fashion catalogue built for elegant products,
            timeless visuals, and simple customer ordering.
        </p>
        <a href="/shop" class="btn">To The Shop</a>
    </div>

    <div class="hero-image">
        Brand Visual
    </div>
</section>

<section class="section-title">
    <h2>Featured Collections</h2>
    <p>Selected pieces for a refined daily look.</p>
</section>

<section class="collections">
    @forelse ($featuredProducts as $product)
        <a
            href="{{ route('product.show', $product->slug) }}"
            class="collection-card product-collection"
        >
            @if ($product->image)
                <img
                    src="{{ asset('storage/' . $product->image) }}"
                    alt="{{ $product->name }}"
                >
            @endif

            <div class="collection-overlay"></div>

            <div class="collection-content">
                <h3>{{ $product->name }}</h3>

                <p>
                    Rp {{ number_format($product->price, 0, ',', '.') }}
                </p>
            </div>
        </a>
    @empty
        <div class="collection-card">
            <h3>Produk belum tersedia</h3>
        </div>
    @endforelse
</section>

<section class="about">
    <h2>Built With Taste</h2>
    <p>
        This website will become a luxury product catalogue with product pages,
        admin management, image upload, pricing, and WhatsApp ordering.
    </p>
</section>

<footer>
    <div>© 2026 LUXÉVAIN</div>
    <div>Instagram · WhatsApp · Email</div>
</footer>

</body>
</html>