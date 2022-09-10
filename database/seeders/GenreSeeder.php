<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = collect([
            'Acoustic Blues',
            'African Blues',
            'Blues Rock',
            'Blues Shouter',
            'British Blues',
            'Canadian Blues',
            'Chicago Blues',
            'Classic Blues',
            'Classic Female Blues',
            'Contemporary Blues',
            'Contemporary R&B',
            'Country Blues',
            'Dark Blues',
            'Delta Blues',
            'Detroit Blues',
            'Doom Blues',
        ]);

        $genres->each(function ($genre) {
            Genre::create([
                'name' => $genre,
                'slug' => Str::slug($genre),
            ]);
        });
    }
}
