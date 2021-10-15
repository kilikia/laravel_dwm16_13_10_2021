<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
            'title' => 'Le petite maison',
            'author' => 'Jean-Luc Machin',
            'publication_year' => 1884,
            'genre' => 'Aventure',
            'synopsis' => 'Here’s an example of a short synopsis of the story of Jack and Jill',
            ]
        ]);

        [
            'title' => 'Le petite Prince',
            'author' => 'Lucas Joy',
            'publication_year' => 1774,
            'genre' => 'story',
            'synopsis' => 'HOk ok ok ok ok ok ok ok ok ok ok ok ok ok',

        ];
        [
            'title' => 'Maison des grand',
            'author' => 'Jean Martin Marchal',
            'publication_year' => 1477,
            'genre' => 'Biography',
            'synopsis' => 'yes yes yes yes yes yes yes yes yes yes yes ',
        ];

    }
}
