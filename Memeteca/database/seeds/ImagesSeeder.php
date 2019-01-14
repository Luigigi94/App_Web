<?php

use App\Models\Categorie;
use App\Models\Image;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category_id=Categorie::where('desc_categoria','Dinosaurio')->value('id');


        Image::create([
            'nombre_imagen' => 'Viejo Lesbiano',
            'imagen' => 'Aqui va un memazo',
            'puntuacion' => '5',
            'category_id' => $category_id,
        ]);

        $category_id=Categorie::where('desc_categoria','Invierano')->value('id');

//        dd($category_id);
        Image::create([
            'nombre_imagen' => 'Phineas y Ferb',
            'imagen' => 'Aqui va un memazo',
            'puntuacion' => '2',
            'category_id' => $category_id,
        ]);
    }
}
