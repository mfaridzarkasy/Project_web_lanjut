<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'nama_kategori' => 'Murah ',
                'keterangan' => 'Televisi urah'
            ],
            [
                'nama_kategori' => 'Sedang',
                'keterangan' => 'Televisi Sedang'
            ],
            [
                'nama_kategori' => 'Mahal',
                'keterangan' => 'Televisi Mahal'
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
