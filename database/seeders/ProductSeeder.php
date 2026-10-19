<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $electronics = Category::firstOrCreate(
            ['name' => 'Elektronik'],
            ['description' => 'Peralatan elektronik dan gadget']
        );

        $clothing = Category::firstOrCreate(
            ['name' => 'Pakaian'],
            ['description' => 'Pakaian dan busana pria/wanita']
        );

        // 3 Produk untuk Kategori Elektronik
        Product::firstOrCreate(
            [
                'category_id' => $electronics->id,
                'name' => 'Laptop ASUS Vivobook',
            ],
            [
                'description' => 'Laptop serbaguna untuk kebutuhan sekolah dan kantor',
                'price' => 8500000,
                'stock' => 15,
            ]
        );

        Product::firstOrCreate(
            [
                'category_id' => $electronics->id,
                'name' => 'Smartphone Samsung Galaxy',
            ],
            [
                'description' => 'Smartphone canggih dengan kamera jernih',
                'price' => 3200000,
                'stock' => 20,
            ]
        );

        Product::firstOrCreate(
            [
                'category_id' => $electronics->id,
                'name' => 'Mouse Wireless Logitech',
            ],
            [
                'description' => 'Mouse nirkabel responsif dan hemat baterai',
                'price' => 150000,
                'stock' => 50,
            ]
        );

        // 3 Produk untuk Kategori Pakaian
        Product::firstOrCreate(
            [
                'category_id' => $clothing->id,
                'name' => 'Kaos Polos Cotton Combed 30s',
            ],
            [
                'description' => 'Kaos katun adem dan nyaman digunakan sehari-hari',
                'price' => 45000,
                'stock' => 100,
            ]
        );

        Product::firstOrCreate(
            [
                'category_id' => $clothing->id,
                'name' => 'Kemeja Flanel Kasual Pria',
            ],
            [
                'description' => 'Kemeja flanel lengan panjang motif kotak-kotak',
                'price' => 135000,
                'stock' => 40,
            ]
        );

        Product::firstOrCreate(
            [
                'category_id' => $clothing->id,
                'name' => 'Celana Jeans Slim Fit Denim',
            ],
            [
                'description' => 'Celana denim stretch berkualitas dan tahan lama',
                'price' => 195000,
                'stock' => 30,
            ]
        );
    }
}
