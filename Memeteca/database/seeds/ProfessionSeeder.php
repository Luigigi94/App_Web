<?php

use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Profession::create([
            'nombre' =>   'Back-end Developeres'
        ]);

        Profession::create([
            'nombre' =>   'Front-end Developer'
        ]);

        Profession::create([
            'nombre' =>   'Web Developer'
        ]);


//        DB::insert('INSERT INTO professions (nombre) VALUES (:nombre)',[
//            'nombre'=>'Back-End Developer',
//        ]);

//        DB::table('professions')->insert([
//            'nombre' =>   'Back-end Developer'
//        ]);
    }
}
