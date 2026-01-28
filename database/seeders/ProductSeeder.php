<?php

namespace Database\Seeders;

use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [

            // ================== تیشرت ==================
            [
                'name' => 'تیشرت طرح مینیمال',
                'slug' => 'minimal-tshirt',
                'category_id' => 1,
                'primary_image' => 'tshirt-minimal.jpg',
                'description' => 'تیشرت نخی با طراحی مینیمال، مناسب استفاده روزمره.',
                'price' => 350000,
                'quantity' => 50,
                'status' => 1,
            ],
            [
                'name' => 'تیشرت طرح تایپوگرافی',
                'slug' => 'typography-tshirt',
                'category_id' => 1,
                'primary_image' => 'tshirt-typography.png',
                'description' => 'تیشرت با چاپ تایپوگرافی فارسی، کیفیت چاپ بالا.',
                'price' => 390000,
                'quantity' => 40,
                'status' => 1,
            ],
            [
                'name' => 'تیشرت طرح هنری',
                'slug' => 'art-tshirt',
                'category_id' => 1,
                'primary_image' => 'tshirt-art.jpg',
                'description' => 'تیشرت با طرح هنری خاص برای استایل متفاوت.',
                'price' => 420000,
                'quantity' => 30,
                'status' => 1,
            ],

            // ================== ماگ ==================
            [
                'name' => 'ماگ سرامیکی ساده',
                'slug' => 'simple-mug',
                'category_id' => 2,
                'primary_image' => 'mug-simple.jpg',
                'description' => 'ماگ سرامیکی مناسب قهوه و چای، مقاوم در برابر شستشو.',
                'price' => 180000,
                'quantity' => 60,
                'status' => 1,
            ],
            [
                'name' => 'ماگ طرح نقل قول',
                'slug' => 'quote-mug',
                'category_id' => 2,
                'primary_image' => 'mug-quote.jpg',
                'description' => 'ماگ با چاپ نقل قول انگیزشی فارسی.',
                'price' => 200000,
                'quantity' => 45,
                'status' => 1,
            ],
            [
                'name' => 'ماگ مشکی مات',
                'slug' => 'black-matte-mug',
                'category_id' => 2,
                'primary_image' => 'mug-black.jpg',
                'description' => 'ماگ مشکی مات با طراحی مدرن.',
                'price' => 230000,
                'quantity' => 35,
                'status' => 1,
            ],

            // ================== شلوار ==================
            [
                'name' => 'شلوار اسلش راحتی',
                'slug' => 'slash-pants',
                'category_id' => 3,
                'primary_image' => 'pants-slash.jpg',
                'description' => 'شلوار اسلش مناسب استفاده روزمره و خانگی.',
                'price' => 650000,
                'quantity' => 25,
                'status' => 1,
            ],
            [
                'name' => 'شلوار کتان',
                'slug' => 'cotton-pants',
                'category_id' => 3,
                'primary_image' => 'pants-cotton.jpg',
                'description' => 'شلوار کتان با کیفیت، مناسب استایل نیمه رسمی.',
                'price' => 780000,
                'quantity' => 20,
                'status' => 1,
            ],
            [
                'name' => 'شلوار ورزشی',
                'slug' => 'sport-pants',
                'category_id' => 3,
                'primary_image' => 'pants-sport.jpg',
                'description' => 'شلوار ورزشی سبک و راحت برای فعالیت‌های روزانه.',
                'price' => 520000,
                'quantity' => 30,
                'status' => 1,
            ],

            // ================== هودی ==================
            [
                'name' => 'هودی ساده',
                'slug' => 'simple-hoodie',
                'category_id' => 4,
                'primary_image' => 'hoodie-simple.jpg',
                'description' => 'هودی ساده و گرم مناسب فصل سرما.',
                'price' => 950000,
                'quantity' => 20,
                'status' => 1,
            ],
            [
                'name' => 'هودی طرح گرافیکی',
                'slug' => 'graphic-hoodie',
                'category_id' => 4,
                'primary_image' => 'hoodie-graphic.jpg',
                'description' => 'هودی با چاپ گرافیکی خاص و جذاب.',
                'price' => 1100000,
                'quantity' => 15,
                'status' => 1,
            ],
            [
                'name' => 'هودی کلاه‌دار',
                'slug' => 'hooded-hoodie',
                'category_id' => 4,
                'primary_image' => 'hoodie-hooded.jpg',
                'description' => 'هودی کلاه‌دار با پارچه ضخیم و با دوام.',
                'price' => 1200000,
                'quantity' => 10,
                'status' => 1,
            ],

            // ================== دفترچه ==================
            [
                'name' => 'دفترچه یادداشت ساده',
                'slug' => 'simple-notebook',
                'category_id' => 5,
                'primary_image' => 'notebook-simple.jpg',
                'description' => 'دفترچه یادداشت مناسب استفاده روزانه.',
                'price' => 120000,
                'quantity' => 80,
                'status' => 1,
            ],
            [
                'name' => 'دفترچه طرح هنری',
                'slug' => 'art-notebook',
                'category_id' => 5,
                'primary_image' => 'notebook-art.jpg',
                'description' => 'دفترچه با جلد هنری و کاغذ با کیفیت.',
                'price' => 150000,
                'quantity' => 60,
                'status' => 1,
            ],
            [
                'name' => 'دفترچه پلنر',
                'slug' => 'planner-notebook',
                'category_id' => 5,
                'primary_image' => 'notebook-planner.jpg',
                'description' => 'دفترچه برنامه‌ریزی برای مدیریت بهتر زمان.',
                'price' => 180000,
                'quantity' => 40,
                'status' => 1,
            ],

        ];

        DB::transaction(function () use ($products) {
            foreach ($products as $product) {
                if (!Storage::disk('public')->exists("images/products/{$product['primary_image']}")) {

                    Storage::disk('public')->put(
                        'images/products/' . $product['primary_image'],
                        file_get_contents(
                            base_path('public/images/seeders/products/' . $product['primary_image'])
                        )
                    );

                    Product::upsert($product, ['slug'], ['name', 'category_id', 'primary_image', 'description', 'price', 'quantity', 'status']);
                }
            }
        });
    }
}
