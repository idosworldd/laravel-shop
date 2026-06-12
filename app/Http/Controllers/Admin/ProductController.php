<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    // Tampilkan daftar produk
    public function index()
    {
        $products = Product::orderBy('id','desc')->get();
        return view('admin.products.index', compact('products'));
    }

    // Form tambah produk
    public function create()
    {
        return view('admin.products.create');
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:outerwear,shirts,pants,jackets,accessories',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:10240', // 10MB
            'is_active' => 'sometimes|boolean'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products','public');
            $validated['image'] = $path;
        }

        $validated['is_active'] = $request->has('is_active');

        // Generate slug unik
        $validated['slug'] = Str::slug($validated['name'].'-'.Str::random(5));

        Product::create($validated);

        return redirect()->route('admin.products.index')->with('success','Produk berhasil ditambahkan.');
    }

    // Form edit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product'));
    }

    // Update produk
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'required|in:outerwear,shirts,pants,jackets,accessories',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'image' => 'nullable|image|max:10240',
            'is_active' => 'sometimes|boolean'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products','public');
            $validated['image'] = $path;
        }

        $validated['is_active'] = $request->has('is_active');

        $product->update($validated);

        return redirect()->route('admin.products.index')->with('success','Produk berhasil diubah.');
    }

    // Hapus produk
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('admin.products.index')->with('success','Produk berhasil dihapus.');
    }
}