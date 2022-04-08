<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $genres = [
            [
                'name' => 'Action'
            ],
            [
                'name' => 'Aventure'
            ],
            [
                'name' => 'Drame'
            ],
            [
                'name' => 'Comédie'
            ],
            [
                'name' => 'Horreur'
            ],
            [
                'name' => 'Romance'
            ],
            [
                'name' => 'Tranches de vie'
            ],
            [
                'name' => 'Surnaturel'
            ],
            [
                'name' => 'Fantaisie'
            ],
            [
                'name' => 'Science-fiction'
            ],
            [
                'name' => 'Historique'
            ],
            [
                'name' => 'Mystère'
            ],
            [
                'name' => 'Thriller'
            ],
            [
                'name' => 'Psychologique'
            ],
            [
                'name' => 'Tragique'
            ],
            [
                'name' => 'Sport'
            ]
        ];

        foreach($genres as $genre) {
            try {
                Genre::firstOrCreate([
                    'name' => $genre['name']
                ]);
            }catch (\Exception $exception) {
                if($exception->getCode() == "23000") {
                    dump('Genre "' .$genre['name'] .'" already exist');
                }else {
                    dump($exception->getMessage());
                }
            }
        }

    }
}
