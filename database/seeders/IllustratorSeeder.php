<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IllustratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('illustrators')->insert([
            [
                'name' =>'Hayao Miyazaki',
                'birth_year' => 1941,
                'nationality' =>"japonais",
            ],
            [
                'name' =>'Marjane Satrapi',
                'birth_year' => 1969,
                'nationality' =>"franco-iranienne",
            ],
            [
                'name' =>'Zep',
                'birth_year' => 1967,
                'nationality' =>"français",
            ]
        ]);

    }
}
