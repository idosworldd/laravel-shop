@extends('admin.layout')

@section('content')
<h2>Tambah Produk Baru</h2>

<form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Nama Produk -->
    <div class="form-group">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" id="name" value="{{ old('name') }}" required>
    </div>

    <!-- Kategori -->
    <div class="form-group">
        <label for="category">Kategori</label>
        <select name="category" id="category" required>
            <option value="">-- Pilih Kategori --</option>
            <option value="outerwear">Outerwear</option>
            <option value="shirts">Shirts</option>
            <option value="pants">Pants</option>
            <option value="jackets">Jackets</option>
            <option value="accessories">Accessories</option>
        </select>
    </div>

    <!-- Harga -->
    <div class="form-group">
        <label for="price">Harga</label>
        <input type="number" name="price" id="price" value="{{ old('price') }}" required>
    </div>

    <!-- Stok -->
    <div class="form-group">
        <label for="stock">Stok</label>
        <input type="number" name="stock" id="stock" value="{{ old('stock') }}" required>
    </div>

    <!-- Gambar Produk -->
    <div class="form-group">
        <label for="image">Foto Produk</label>
        <input type="file" name="image" id="image" accept="image/*">
    </div>

    <!-- Tampilkan di Shop -->
    <div class="form-group">
        <input type="checkbox" name="is_active" id="is_active" checked>
        <label for="is_active">Tampilkan produk di halaman Shop</label>
    </div>

    <!-- Tombol Submit -->
    <div class="form-group">
        <button type="submit">Simpan Produk</button>
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