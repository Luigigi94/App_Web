<?php

use App\Models\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class eluserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        $professions = DB::select('SELECT id FROM professions WHERE nombre=? LIMIT 0,1',['Back-end Developer']);
//        $professions=DB::table('professions')->select('id')->take(1)->get(); take =  toma 1 solo resultado
//        $profession=DB::table('professions')->select('id')->first(); //para seleccionar el primer resultado
//        dd($profession);
        $professionid=Profession::where('title', 'Back-end Developeres')->value('id');

//        dd($professionid);
        Usuario::create([
            'name' => 'Luis',
            'email' => 'el.luige94@gmail.com',
            'password' => bcrypt('Lui-_-G1994'),
            'profession_id' => $professionid,
            'is_admin' => true,
        ]);

        factory(Usuario::class)->create([
            'profession_id' => $professionid
        ]);
        factory(Usuario::class)->create();

    }
}
