<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\post;
use App\Models\User;
use App\Models\setting;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Database\Factories\SettingFactory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Post::factory(100)->create();
        Setting::factory(1)->create();
        Category::factory(10)->create();
        Tag::factory(10)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
