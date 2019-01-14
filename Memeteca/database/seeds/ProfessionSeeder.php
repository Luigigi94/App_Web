<?php

use App\Models\Profession;
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
            'title' =>   'Back-end Developeres'
        ]);

        Profession::create([
            'title' =>   'Front-end Developer'
        ]);

        Profession::create([
            'title' =>   'Web Developer'
        ]);

        factory(Profession::class,17)->create();


//        DB::insert('INSERT INTO professions (nombre) VALUES (:nombre)',[
//            'nombre'=>'Back-End Developer',
//        ]);

//        DB::table('professions')->insert([
//            'nombre' =>   'Back-end Developer'
//        ]);
    }
}
