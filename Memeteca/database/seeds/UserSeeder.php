<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Sex;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sexid = Sex::where('genero','Masculino')->value('id');


//        dd($sexid);

        User::create([
            'name' => 'Luigigi94',
            'email' => 'el.luige94@gmail.com',
            'password' => bcrypt('Lui-_-G1994'),
            'Nombre_Real' => 'Luis',
            'Apellido_Paterno' => 'Hernandez',
            'Apellido_Materno' => 'Salazar',
            'Edad' => '24',
            'sex_id' => $sexid,

        ]);

        factory(User::class)->times(20)->create();
    }
}
