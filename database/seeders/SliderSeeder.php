<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'title' => 'مرچ رسمی، استایل خاص',
                'body' => 'جدیدترین مرچ‌های رسمی با طراحی خاص و کیفیت بالا. استایل خودت رو با آیتم‌هایی بساز که فقط مخصوص هوادارای واقعیه.',
                'link_title' => 'مشاهده محصولات',
                'link_address' => '/products',
            ],
            [
                'title' => 'کالکشن جدید رسید',
                'body' => 'کالکشن جدید مرچ با طراحی‌های خاص و محدود منتشر شد. فرصت رو از دست نده و اولین نفر باش.',
                'link_title' => 'دیدن کالکشن',
                'link_address' => '/collections/new',
            ],
            [
                'title' => 'استایل روزمره با مرچ',
                'body' => 'از تیشرت و هودی تا اکسسوری‌های خاص؛ مرچ‌هایی که هم برای روزمره‌ان هم برای هواداری.',
                'link_title' => 'خرید مرچ',
                'link_address' => '/shop',
            ],
        ];

        Slider::upsert($data,['title'],['body','link_title', 'link_address']);
    }
}
