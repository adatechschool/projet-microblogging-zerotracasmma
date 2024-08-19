<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    public function run()
    {
        // Crée 50 utilisateurs fictifs
        Post::factory()->count(50)->create();
    }
}