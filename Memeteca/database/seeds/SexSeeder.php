<?php

use Illuminate\Database\Seeder;
use App\Models\Sex;

class SexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sex::create([
            'genero'=>'Masculino'
        ]);

        Sex::create([
            'genero'=>'Femenino'
        ]);

    }
}
