<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $product->name }} - LUXÉVAIN</title>
<style>
*{box-sizing:border-box;}
body{margin:0;font-family:Arial,sans-serif;background:#f6f1ea;color:#1d1d1d;}
header{padding:28px 60px;background:#f6f1d;display:flex;justify-content:space-between;align-items:center;border-bottom:1px solid #ded2c3;}
header .logo{font-size:28px;font-weight:bold;color:#1d1d1d;text-decoration:none;letter-spacing:4px;}
nav a{margin-left:32px;text-decoration:none;color:#1d1d1d;font-size:14px;text-transform:uppercase;letter-spacing:2px;}
nav a:hover{opacity:0.6;}
.main-container{max-width:1000px;margin:50px auto;padding:0 24px;display:grid;grid-template-columns:1fr 1fr;gap:40px;}
.product-image img{width:100%;height:auto;object-fit:cover;border:1px solid #ddd;}
.category{display:inline-block;padding:6px 10px;background:#ece3d8;color:#6c5848;font-size:11px;text-transform:uppercase;letter-spacing:1px;margin-bottom:12px;}
.product-info h1{margin-bottom:18px;font-size:32px;text-transform:uppercase;}
.product-info .price{font-size:22px;font-weight:bold;margin-bottom:10px;}
.product-info .stock{margin-bottom:15px;color:#6c6259;}
.product-info p{line-height:1.7;margin-bottom:25px;}
.btn-order{padding:14px 25px;background:#1d1d1d;color:#fff;border:1px solid #1d1d1d;text-decoration:none;text-transform:uppercase;letter-spacing:1px;cursor:pointer;display:inline-block;}
.btn-order:hover{background:transparent;color:#1d1d1d;}
@media(max-width:850px){.main-container{grid-template-columns:1fr;gap:25px;}}
</style>
</head>
<body>

<header>
<a href="{{ route('home') }}" class="logo">LUXÉVAIN</a>
<nav>
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('shop') }}">Shop</a>
<a href="{{ route('about') }}">About</a>
<a href="{{ route('contact') }}">Contact</a>
</nav>
</header>

<main class="main-container">
<div class="product-image">
@if($product->image)
<img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
@else
<span>Tidak ada gambar produk</span>
@endif
</div>

<div class="product-info">
@if($product->category)
<span class="category">{{ ucfirst($product->category) }}</span>
@endif

<h1>{{ $product->name }}</h1>

<div class="price">Rp {{ number_format($product->price,0,',','.') }}</div>
<div class="stock">Stok: {{ $product->stock }}</div>

<p>{{ $product->description ?: 'Deskripsi produk belum tersedia.' }}</p>

@if($product->stock > 0)
<a href="https://wa.me/nomor-telepon?text=Saya%20tertarik%20dengan%20produk%20{{ urlencode($product->name) }}" class="btn-order">
Pesan via WhatsApp
</a>
@else
<span class="btn-order" style="opacity:0.5;cursor:not-allowed;">Stok Habis</span>
@endif
</div>
</main>

</body>
</html>