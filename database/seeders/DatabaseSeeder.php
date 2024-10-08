<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('password'),
        // ]);
        Post::factory(10)->for(User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt('password'),
        ]))->create();
    }
}