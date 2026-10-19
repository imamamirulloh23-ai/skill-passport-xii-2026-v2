<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::firstOrCreate(
            ['name' => 'Elektronik'],
            ['description' => 'Peralatan elektronik dan gadget']
        );

        Category::firstOrCreate(
            ['name' => 'Pakaian'],
            ['description' => 'Pakaian dan busana pria/wanita']
        );
    }
}
