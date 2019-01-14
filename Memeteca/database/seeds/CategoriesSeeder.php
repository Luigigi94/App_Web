<?php

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::create([
           'desc_categoria' => 'Dinosaurio'
        ]);

        Categorie::create([
            'desc_categoria' => 'Gatos'
        ]);

        Categorie::create([
            'desc_categoria' => 'Invierano'
        ]);

        Categorie::create([
            'desc_categoria' => 'Caricaturas'
        ]);
    }
}
