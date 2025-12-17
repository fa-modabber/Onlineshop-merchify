<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::firstOrCreate([], [
            'col_1_title' => "تماس با ما",
            'col_1_body_1' => "09123456789",
            'col_1_body_2' => "تهران-خیابان ونک-ملاصدرا",

            'col_2_title' => "شبکه های اجتماعی",
            'col_2_body' => "ما را در شبکه های اجتماعی دنبال کنید",

            'col_3_title' => "پشتیبانی",
            'col_3_body' => "۲۴ ساعته ۷ روز هفته",

            'telegram_link' => fake()->optional()->url(),
            'whatsapp_link' => fake()->optional()->url(),
            'instagram_link' => fake()->optional()->url(),
            'youtube_link' => fake()->optional()->url(),

            'copyright' => '© ' . date('Y') . ' ' . fake()->company(),
        ]);
    }
}
