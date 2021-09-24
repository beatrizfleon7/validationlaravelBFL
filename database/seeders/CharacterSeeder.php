<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert(
            [
                [
                    'name' => 'Chihiro',
                    'comic_name' => 'Le Voyage de Chihiro',
                    'creation_year' => 2001,
                    'illustrator_id' => 1
                ],
                [
                    'name' => 'Marjane',
                    'comic_name' => 'Persepolis',
                    'creation_year' => 2000,
                    'illustrator_id' => 2
                ],
                
                [
                    'name' => 'Titeuf',
                    'comic_name' => 'Le sens de la vie',
                    'creation_year' => 2008,
                    'illustrator_id' => 3
                ]
            ]);
    }
}
