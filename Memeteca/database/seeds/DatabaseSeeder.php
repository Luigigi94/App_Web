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
            'elusers',
            'professions'
        ]);

        $this->call(ProfessionSeeder::class);
        $this->call(eluserSeeder::class);
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
