<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // Importar SRT para poder usar el __ Str::slug($title)

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // datos que van hacer insertados __ Categorias
        $categories = [
            [
                'name' => 'Ropa',
                'slug' => Str::slug('Ropa'),
                'icon' =>'<i class="fas fa-tshirt"></i>'
            ],
            [
                'name' => 'Consolas',
                'slug' => Str::slug('Consolas '),
                'icon' => '<i class="fas fa-game-console-handheld"></i>'
            ],
            [
                'name' => 'Figuras',
                'slug' => Str::slug('Figuras '),
                'icon' => '<i class="fas fa-code-branch"></i>'
            ],
            [
                'name' => 'PC',
                'slug' => Str::slug('PC'),
                'icon'
            ],
            [
                'name' => 'Perfericos',
                'slug' => Str::slug('Perfericos '),
                'icon' => '<i class="fas fa-headphones"></i>'
            ],
        ];

        foreach ($categories as $category){
            // MODELO
            Category::create($category);
        }
    }
}
