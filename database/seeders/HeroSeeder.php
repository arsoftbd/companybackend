<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hero;

class HeroSeeder extends Seeder
{
    public function run(): void
    {
        Hero::updateOrCreate(
            ['id' => 1], // ensure single record
            [
                'badge' => 'Portfolio',
                'title' => "Hi, I'm Ahsan, A Full Stack Web App Developer",
                'description' => "I build modern, scalable, and high-performance websites and web applications using React, Next.js, PHP, and Laravel.",

                'image' => "fadfa",

                'button_text_one' => "Let's Work Together",
                'button_link_one' => "https://www.ahsanalam.online/#contact",

                'button_text_two' => "View Projects",
                'button_link_two' => "https://www.ahsanalam.online/#projects",
            ]
        );
    }
}
