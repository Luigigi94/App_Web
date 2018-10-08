<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' => 'Luigigi',
            'email' => 'a@c',
            'password' => '123456',
            'nombre_real' => 'Luis',
            'ap_p' => 'Hernandez',
            'edad' => '23',
            'id_sexo' => 1
        ]);
    }
}
