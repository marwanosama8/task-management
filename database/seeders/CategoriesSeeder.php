<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#ffff',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#dddd',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#ec434',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#543rg',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#12abz',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#45gh9',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#12345g',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#ff12k',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#abz321',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#cc44g',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#xyz123',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#00ffg0',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#12gghh',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#99999z',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Category ' . rand(10, 99),
                'color' => '#aa1g2h',
                'icon_url' => 'https://example.com/icons/default.png',
                'image_filter' => 'blur',
                'image_seed_offset' => '400/300',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('categories')->insert($categories);
    }
}
