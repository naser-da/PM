<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Client::factory(10)->create();
        \App\Models\Project::factory(10)->create();
        // \App\Models\Client::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Naser',
            'email' => 'naser.dakhel@abjad.ink',
            'password' => bcrypt('password')
        ]);

        \App\Models\Type::create([
            'name' => 'Writing',
            'eq' => '2',
        ]);

        \App\Models\Type::create([
            'name' => 'Translation',
            'eq' => '1',
        ]);

        \App\Models\Type::create([
            'name' => 'Voice Over',
            'eq' => '10',
        ]);

        \App\Models\Type::create([
            'name' => 'Subtitling',
            'eq' => '1.5',
        ]);
    }
}
