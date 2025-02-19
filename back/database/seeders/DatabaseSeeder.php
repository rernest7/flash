<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user =         User::factory()->create([
                    'name' => 'Test User',
                    'email' => 'test@example.com',
                ]);
        for ($i = 1;$i <= 30;$i++) {
            $deck = $user->decks()->create([
                'name' => fake()->words(rand(2, 8), true),
            ]);

            for ($i = 1; $i <= 30; $i++) {
                $deck->cards()->create([
                    'question' => fake()->words(rand(3, 10), true),
                    'answer' => fake()->words(rand(3, 10), true)
                ]);
            }
        }

    }
}
