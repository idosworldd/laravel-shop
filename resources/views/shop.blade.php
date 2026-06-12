<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Shop Collection - LUXÉVAIN</title>
<style>
*{box-sizing:border-box;}
body{margin:0;font-family:Arial,sans-serif;background:#f6f1ea;color:#1d1d1d;}
header{position:sticky;top:0;z-index:100;padding:28px 60px;display:flex;justify-content:space-between;align-items:center;background:#f6f1ea;border-bottom:1px solid #ded2c3;}
.logo{font-size:28px;font-weight:bold;text-decoration:none;color:#1d1d1d;letter-spacing:4px;}
nav a{margin-left:32px;color:#1d1d1d;text-decoration:none;font-size:14px;text-transform:uppercase;letter-spacing:2px;}
nav a:hover{opacity:0.6;}
.shop-hero{padding:90px 60px 45px;text-align:center;}
.shop-hero span{display:block;margin-bottom:15px;font-size:12px;text-transform:uppercase;letter-spacing:3px;color:#7a6858;}
.shop-hero h1{margin-bottom:18px;font-size:58px;text-transform:uppercase;letter-spacing:4px;}
.shop-hero p{color:#6c6259;font-size:17px;line-height:1.7;}
.filter-section{padding:0 60px 25px;}
.filter-form{max-width:900px;margin:auto;display:grid;grid-template-columns:1.5fr 1fr auto auto;gap:10px;}
.filter-form input, .filter-form select{width:100%;padding:14px 16px;border:1px solid #cfc3b6;outline:none;font-family:Arial,sans-serif;font-size:15px;background:#fff;color:#1d1d1d;}
.filter-form input:focus, .filter-form select:focus{border-color:#1d1d1d;}
.filter-form button, .filter-form a{padding:14px 24px;border:1px solid #1d1d1d;background:#1d1d1d;color:#fff;text-decoration:none;cursor:pointer;font-size:12px;text-transform:uppercase;white-space:nowrap;}
.filter-form a{background:transparent;color:#1d1d1d;}
.filter-form button:hover{background:#383838;}
.filter-form a:hover{background:#1d1d1d;color:#fff;}
.filter-result{max-width:900px;margin:18px auto 0;display:flex;flex-wrap:wrap;gap:10px 25px;color:#6c6259;font-size:14px;}
.products{padding:30px 60px 90px;display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:32px;}
.product-card{overflow:hidden;background:#fff;border:1px solid #e1d7cb;transition:transform 0.25s ease,box-shadow 0.25s ease;}
.product-card:hover{transform:translateY(-5px);box-shadow:0 15px 35px rgba(29,29,29,0.1);}
.product-image{height:360px;overflow:hidden;display:flex;align-items:center;justify-content:center;background:linear-gradient(135deg,#d8c3ad,#96775e);color:#fff;font-size:13px;letter-spacing:3px;text-transform:uppercase;}
.product-image img{width:100%;height:100%;display:block;object-fit:cover;transition:transform 0.4s ease;}
.product-card:hover .product-image img{transform:scale(1.04);}
.product-info{padding:22px;}
.category{display:inline-block;padding:6px 10px;background:#ece3d8;color:#6c5848;font-size:11px;text-transform:uppercase;letter-spacing:1px;margin-bottom:10px;}
.product-info h3{margin-bottom:10px;font-size:20px;letter-spacing:1px;text-transform:uppercase;}
.product-description{min-height:42px;margin-bottom:16px;overflow:hidden;display:-webkit-box;-webkit-box-orient:vertical;-webkit-line-clamp:2;color:#6c6259;font-size:14px;}
.product-meta{margin-bottom:18px;display:flex;justify-content:space-between;align-items:center;gap:15px;}
.price{color:#1d1d1d;font-size:16px;font-weight:bold;}
.stock{color:#6c6259;font-size:13px;}
.btn{width:100%;padding:14px 20px;border:1px solid #1d1d1d;background:#1d1d1d;color:#fff;font-size:12px;text-align:center;text-decoration:none;text-transform:uppercase;}
.btn:hover{background:transparent;color:#1d1d1d;}
.empty-products{grid-column:1/-1;padding:70px 20px;text-align:center;}
.empty-products h3{margin-bottom:12px;font-size:30px;}
.empty-products p{margin-bottom:25px;color:#6c6259;font-size:14px;line-height:1.6;}
.empty-products .btn{width:auto;padding:0 30px;}
footer{padding:34px 60px;display:flex;justify-content:space-between;gap:20px;border-top:1px solid #ded2c3;color:#5f554b;font-size:14px;}
@media(max-width:1100px){.products{grid-template-columns:repeat(3,minmax(0,1fr));}}
@media(max-width:900px){header{padding:22px;flex-direction:column;gap:18px;text-align:center;}nav{flex-wrap:wrap;justify-content:center;gap:8px 18px;}nav a{margin-left:0;font-size:12px;}.filter-form{grid-template-columns:1fr 1fr;}.products{grid-template-columns:repeat(2,minmax(0,1fr));padding:0 30px;}}
@media(max-width:600px){.shop-hero{padding:60px 22px 35px;}.shop-hero h1{font-size:40px;}.filter-section{padding:0 22px 20px;}.filter-form{grid-template-columns:1fr;}.products{grid-template-columns:1fr;padding:20px 22px 60px;}.product-image{height:420px;}footer{padding:28px 22px;flex-direction:column;}}
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

<main>
<section class="shop-hero">
<span>Our Collection</span>
<h1>Shop Collection</h1>
<p>Temukan koleksi pilihan dengan desain modern, minimalis, dan elegan.</p>
</section>

<section class="filter-section">
<form action="{{ route('shop') }}" method="GET" class="filter-form">
<input type="text" name="search" value="{{ $search ?? '' }}" placeholder="Cari nama produk..." aria-label="Cari produk">
<select name="category" aria-label="Pilih kategori">
<option value="">Semua Kategori</option>
<option value="outerwear" {{ ($category ?? '')==='outerwear'?'selected':'' }}>Outerwear</option>
<option value="shirts" {{ ($category ?? '')==='shirts'?'selected':'' }}>Shirts</option>
<option value="pants" {{ ($category ?? '')==='pants'?'selected':'' }}>Pants</option>
<option value="jackets" {{ ($category ?? '')==='jackets'?'selected':'' }}>Jackets</option>
<option value="accessories" {{ ($category ?? '')==='accessories'?'selected':'' }}>Accessories</option>
</select>
<button type="submit">Terapkan</button>
@if(!empty($search) || !empty($category))
<a href="{{ route('shop') }}">Reset</a>
@endif
</form>

@if(!empty($search) || !empty($category))
<div class="filter-result">
@if(!empty($search))<span>Kata kunci: <strong>{{ $search }}</strong></span>@endif
@if(!empty($category))<span>Kategori: <strong>{{ ucfirst($category) }}</strong></span>@endif
</div>
@endif
</section>

<section class="products">
@forelse($products as $product)
<article class="product-card">
<div class="product-image">
@if($product->image)
<img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
@else
<span>Product Image</span>
@endif
</div>
<div class="product-info">
@if($product->category)<span class="category">{{ ucfirst($product->category) }}</span>@endif
<h3>{{ $product->name }}</h3>
<p class="product-description">{{ $product->description ?: 'Deskripsi produk belum tersedia.' }}</p>
<div class="product-meta">
<div class="price">Rp {{ number_format($product->price,0,',','.') }}</div>
<div class="stock">Stok: {{ $product->stock }}</div>
</div>
<a href="{{ route('product.show',$product->slug) }}" class="btn">View Product</a>
</div>
</article>
@empty
<div class="empty-products">
<h3>Produk tidak ditemukan</h3>
<p>Coba gunakan kata pencarian atau kategori lain.</p>
<a href="{{ route('shop') }}" class="btn">Lihat Semua Produk</a>
</div>
@endforelse
</section>
</main>

<footer>
<div>© 2026 LUXÉVAIN</div>
<div>Instagram · WhatsApp · Email</div>
</footer>

</body>
</html>