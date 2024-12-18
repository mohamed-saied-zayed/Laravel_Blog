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
        $setting = new Setting();
        $setting->site_name = 'News App';
        $setting->site_logo = 'logo.png';
        $setting->facebook_link = 'https://facebook.com';
        $setting->twitter_link = 'https://twitter.com';
        $setting->youtube_link = 'https://www.youtube.com';
        $setting->github_link = 'https://github.com';
        $setting->address = '123 Main St, City, State, ZIP';
        $setting->phone = '123-456-7890';
        $setting->about_title = 'About Us';
        $setting->about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel neque vel ligula ultricies volutpat. Vestibulum vel justo sit amet velit pharetra rutrum vel a turpis.';
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
