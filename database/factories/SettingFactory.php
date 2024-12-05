<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Setting>
 */
class SettingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'about_title'=>fake()->text(50),
            'about_content'=>fake()->text(200),
            'site_name'=>'Laravel News App',
            'site_logo'=>'logo.png',
            'facebook_link'=>'https://www.facebook.com',
            'twitter_link'=>'https://twitter.com',
            'youtube_link'=>'https://www.youtube.com',
            'github_link'=>'https://github.com',
            'address'=>fake()->address(),
            'phone'=>fake()->phoneNumber(),
        ];
    }
}
