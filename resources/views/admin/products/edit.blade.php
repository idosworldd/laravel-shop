@extends('admin.layout')

@section('content')
<h2>Edit Produk</h2>

<form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <!-- Nama Produk -->
    <div class="form-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required>
    </div>

    <!-- Kategori -->
    <div class="form-group">
        <label for="category">Kategori</label>
        <select name="category" id="category" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="outerwear" {{ $product->category === 'outerwear' ? 'selected' : '' }}>Outerwear</option>
            <option value="shirts" {{ $product->category === 'shirts' ? 'selected' : '' }}>Shirts</option>
            <option value="pants" {{ $product->category === 'pants' ? 'selected' : '' }}>Pants</option>
            <option value="jackets" {{ $product->category === 'jackets' ? 'selected' : '' }}>Jackets</option>
            <option value="accessories" {{ $product->category === 'accessories' ? 'selected' : '' }}>Accessories</option>
        </select>
    </div>

    <!-- Harga -->
    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" name="price" id="price" value="{{ old('price', $product->price) }}" required>
    </div>

    <!-- Stok -->
    <div class="form-group">
        <label for="stock">Stok</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock', $product->stock) }}" required>
    </div>

    <!-- Foto Produk Saat Ini -->
    <div class="form-group">
        <label>Foto Produk Saat Ini</label>
        @if ($product->image)
            <img src="{{ asset('storage/' . $product->image) }}" alt="Foto Produk" style="max-width:150px; display:block; margin-bottom:10px;">
        @else
            <span>Tidak ada foto</span>
        @endif
    </div>

    <!-- Ganti Foto Produk -->
    <div class="form-group">
        <label for="image">Ganti Foto Produk</label>
        <input type="file" name="image" id="image" accept="image/*">
        <small>Kosongkan jika tidak ingin mengganti foto. Maksimal 10 MB.</small>
    </div>

    <!-- Tampilkan di Shop -->
    <div class="form-group">
        <input type="checkbox" name="is_active" id="is_active" {{ $product->is_active ? 'checked' : '' }}>
        <label for="is_active">Tampilkan produk di halaman Shop</label>
    </div>

    <!-- Tombol Submit -->
    <div class="form-group">
        <button type="submit">Simpan Perubahan</button>
        <a href="{{ route('admin.products.index') }}">Batal</a>
    </div>
</form>

<style>
    .form-group { margin-bottom: 15px; display:flex; flex-direction:column; }
    input[type="text"], input[type="number"], select, input[type="file"] { padding: 6px; width: 300px; }
    button { padding: 6px 12px; margin-top: 10px; cursor:pointer; }
    a { margin-left: 10px; text-decoration:none; color:#333; }
</style>
@endsection