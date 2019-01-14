<?php

use App\Models\AsignGalerie;
use App\Models\Galerie;
use App\Models\Image;
use Illuminate\Database\Seeder;

class Asign_GaleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $image_id=Image::where('nombre_imagen','Viejo Lesbiano')->value('id');
        $galery_id= Galerie::where('nombre','Escuela')->value('id');

        AsignGalerie::create([
            'image_id' => $image_id,
            'galery_id' => $galery_id,
        ]);

        factory(AsignGalerie::class)->times(15)->create();

    }
}
