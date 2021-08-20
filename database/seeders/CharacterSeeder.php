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
        DB::table('characters')->insert([
            [
                'name' => 'Tintin',
                'artist_id' => 1,
                'creation_year' => 1929,
                'comic_name' => 'Les Aventures de Tintin'
            ],
            [
                'name' => 'Milou',
                'artist_id' => 1,
                'creation_year' => 1930,
                'comic_name' => 'Les Aventures de Tintin'
            ],
            [
                'name' => 'Capitaine Haddock',
                'artist_id' => 1,
                'creation_year' => 1941,
                'comic_name' => 'Les Aventures de Tintin'
            ],
            [
                'name' => 'Corto Maltese',
                'artist_id' => 2,
                'creation_year' => 1929,
                'comic_name' => 'Corto Maltese'
            ],
            [
                'name' => 'Astérix',
                'artist_id' => 3,
                'creation_year' => 1959,
                'comic_name' => 'Astérix'
            ],
            [
                'name' => 'Obélix',
                'artist_id' => 3,
                'creation_year' => 1959,
                'comic_name' => 'Astérix'
            ],
            [
                'name' => 'Panoramix',
                'artist_id' => 3,
                'creation_year' => 1961,
                'comic_name' => 'Astérix'
            ],
            [
                'name' => 'Zlabya',
                'artist_id' => 4,
                'creation_year' => 2002,
                'comic_name' => 'Le chat du rabbin'
            ],
            [
                'name' => 'Le chat du rabbin',
                'artist_id' => 4,
                'creation_year' => 2002,
                'comic_name' => 'Le chat du rabbin'
            ],
            [
                'name' => 'Dr Manhattan',
                'artist_id' => 5,
                'creation_year' => 1986,
                'comic_name' => 'Watchmen'
            ],
            [
                'name' => 'Rorschach',
                'artist_id' => 5,
                'creation_year' => 1986,
                'comic_name' => 'Watchmen'
            ],
            [
                'name' => 'Adrian Veidt aka Ozymandias',
                'artist_id' => 5,
                'creation_year' => 1986,
                'comic_name' => 'Watchmen'
            ],
            [
                'name' => 'John Hartigan',
                'artist_id' => 6,
                'creation_year' => 1991,
                'comic_name' => 'Sin City'
            ],
            [
                'name' => 'Marv',
                'artist_id' => 6,
                'creation_year' => 1991,
                'comic_name' => 'Sin City'
            ],
        ]);
    }
}
