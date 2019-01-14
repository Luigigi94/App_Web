<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        dd(ProfessionSeeder::class);
        // $this->call(UsersTableSeeder::class);

        $this->TruncateTable([
            'usuario',
            'professions',
            'sexs',
            'categories',
            'users',
            'galeries',
            'images',
            'asign_galeries'
        ]);

        $this->call(ProfessionSeeder::class);
//        $this->call(eluserSeeder::class);
        $this->call(SexSeeder::class);
        $this->call(CategoriesSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(GaleriesSeeder::class);
        $this->call(ImagesSeeder::class);
        $this->call(Asign_GaleriesSeeder::class);
        $this->call(UsuarioSeeder::class);


    }

    public function TruncateTable(array $tables): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        foreach ($tables as $table){
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
