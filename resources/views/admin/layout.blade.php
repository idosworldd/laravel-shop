<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LUXÉVAIN Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body { font-family: Arial, sans-serif; background: #f6f1ea; margin:0; padding:0; }
        .admin-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #1d1d1d;
            color: #fff;
            padding: 10px 20px;
        }
        .logo { font-weight: bold; font-size: 18px; }
        .header-actions { display: flex; gap: 10px; align-items: center; }
        .header-actions a,
        .header-actions button {
            color: #fff;
            background: #333;
            padding: 5px 10px;
            border-radius: 4px;
            border: none;
            text-decoration: none;
            cursor: pointer;
        }
        .header-actions a:hover,
        .header-actions button:hover { background: #555; }
        main { padding: 20px; }
        table { width: 100%; border-collapse: collapse; background: #fff; margin-top: 20px; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background: #e7d8c7; }
        .btn-edit, .btn-delete { padding: 4px 8px; margin-right: 5px; cursor: pointer; border-radius: 4px; border: none; }
        .btn-edit { background: #333; color: #fff; }
        .btn-delete { background: #a00; color: #fff; }
    </style>
</head>
<body>

<header class="admin-header">
    <div class="logo">LUXÉVAIN Admin</div>
    <div class="header-actions">
        <a href="{{ route('admin.products.create') }}">Tambah Produk</a>
        <form method="POST" action="{{ route('logout') }}" style="display:inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</header>

<main>
    @yield('content')
</main>

</body>
</html>