<?php

use App\Models\Galerie;
use App\User;
use Illuminate\Database\Seeder;

class GaleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userid=User::where('name','Luigigi94')->value('id');

//        dd($userid);

        Galerie::create([
            'nombre' => 'Escuela',
            'user_id' => $userid,
        ]);

        factory(Galerie::class)->times(15)->create();
    }
}
