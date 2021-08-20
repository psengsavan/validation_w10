<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('artists')->insert([
            [
                'name' => 'Hergé',
                'birth_year' => 1907,
                'nationality' => 'Belge'
            ],
            [
                'name' => 'Hugo Pratt',
                'birth_year' => 1927,
                'nationality' => 'Italien'
            ],
            [
                'name' => 'Albert Uderzo',
                'birth_year' => 1927,
                'nationality' => 'Français'
            ],
            [
                'name' => 'Joann Sfar',
                'birth_year' => 1971,
                'nationality' => 'Français'
            ],
            [
                'name' => 'Dave Gibbons',
                'birth_year' => 1949,
                'nationality' => 'Britannique'
            ],
            [
                'name' => 'Franck Miller',
                'birth_year' => 1957,
                'nationality' => 'Américain'
            ],
        ]);
    }
}
