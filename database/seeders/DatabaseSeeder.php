<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use Database\Factories\PostFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => 'admin',
        ]);



        Category::query()->create(['name' => 'Desenvolvimento Web', 'is_active' => true]);
        Category::query()->create(['name' => 'Tecnologia', 'is_active' => true]);
        Category::query()->create(['name' => 'Dicas de Produtividade', 'is_active' => true]);
    }
}
