<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AboutUs::firstOrCreate(
            [],
            [
                'title' => 'درباره فروشگاه ما',
                'body'  => 'فروشگاه ما با هدف ارائه محصولات مرچ با کیفیت بالا و طراحی‌های منحصربه‌فرد راه‌اندازی شده است. ما تلاش می‌کنیم تجربه‌ای لذت‌بخش و مطمئن از خرید آنلاین را برای مشتریان فراهم کنیم و همواره رضایت شما را در اولویت قرار می‌دهیم.',
                'link'  => 'https://example.com/about-us',
            ]
        );
    }
}
