<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('albums')->insert([
            'name' => 'Album 1',
            'year' => 2005,
            'times_sold' => 100000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 2',
            'year' => 2010,
            'times_sold' => 75000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 3',
            'year' => 2015,
            'times_sold' => 50000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 4',
            'year' => 2020,
            'times_sold' => 25000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('albums')->insert([
            'name' => 'Album 5',
            'year' => 2022,
            'times_sold' => 10000,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
