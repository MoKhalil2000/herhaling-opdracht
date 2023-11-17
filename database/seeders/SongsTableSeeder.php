<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SongsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $songs = [
            [
                'title' => 'Imagine',
                'singer' => 'John Lennon',
            ],
            [
                'title' => 'Bohemian Rhapsody',
                'singer' => 'Queen',
            ],
            [
                'title' => 'Hotel California',
                'singer' => 'Eagles',
            ],
            [
                'title' => 'Like a Rolling Stone',
                'singer' => 'Bob Dylan',
            ],
            [
                'title' => 'Purple Haze',
                'singer' => 'Jimi Hendrix',
            ],
        ];

        DB::table('songs')->insert($songs);
    }

}

