<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'name' => 'Luxury Outerwear',
                'slug' => 'luxury-outerwear',
                'description' => 'Premium outerwear dengan desain minimalis dan elegan.',
                'price' => 450000,
                'image' => null,
                'stock' => 12,
                'is_active' => true,
            ],
            [
                'name' => 'Classic Shirt',
                'slug' => 'classic-shirt',
                'description' => 'Kemeja klasik untuk tampilan bersih dan modern.',
                'price' => 250000,
                'image' => null,
                'stock' => 20,
                'is_active' => true,
            ],
            [
                'name' => 'Essential Pants',
                'slug' => 'essential-pants',
                'description' => 'Celana premium yang nyaman untuk penggunaan sehari-hari.',
                'price' => 320000,
                'image' => null,
                'stock' => 15,
                'is_active' => true,
            ],
            [
                'name' => 'Limited Jacket',
                'slug' => 'limited-jacket',
                'description' => 'Jaket edisi terbatas dengan material berkualitas tinggi.',
                'price' => 680000,
                'image' => null,
                'stock' => 5,
                'is_active' => true,
            ],
        ];

        foreach ($products as $product) {
            Product::updateOrCreate(
                ['slug' => $product['slug']],
                $product
            );
        }
    }
}