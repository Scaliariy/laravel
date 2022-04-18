<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('categories')->delete();

        $categories = array (
            0 =>
                array (
                    'id' => 4,
                    'name' => 'Вітаміни',
                    'code' => 'vitamins',
                    'description' => 'Вітаміни – це органічні сполуки, які необхідні нам у невеликій кількості для нормального функціонування організму.',
                    'image' => 'images/categories_apteka/vitamins.jpg',
                    'name_en' => 'Vitamins',
                    'description_en' => 'Vitamins are organic compounds that we need in small quantities for the normal functioning of the body.',
                ),
            1 =>
                array (
                    'id' => 5,
                    'name' => 'Гігієнічні засоби',
                    'code' => 'hygiene',
                    'description' => 'Догляд за особистою гігієною є дуже важливим. Кожен любить почуватися свіжим та мати ідеальний вигляд.',
                    'image' => 'images/categories_apteka/hygiene.jpg',
                    'name_en' => 'Hygienic means',
                    'description_en' => 'Personal hygiene is very important. Everyone loves to feel fresh and look perfect.',
                ),
            2 =>
                array (
                    'id' => 6,
                    'name' => 'Косметика',
                    'code' => 'cosmetics',
                    'description' => 'Косметика - все що вам потрібно для поліпшення фізичного вигляду з точки зору чистоти та зовнішнього вигляду.',
                    'image' => 'images/categories_apteka/cosmetics.jpg',
                    'name_en' => 'Cosmetics',
                    'description_en' => 'Cosmetics - everything you need to improve your physical appearance in terms of cleanliness and appearance.',
                ),
            3 =>
                array (
                    'id' => 7,
                    'name' => 'Медичні товари',
                    'code' => 'supplies',
                    'description' => 'Медичні товари - інструмент, апарат, прилад, призначені для діагностики, лікування, профілактики організму людини.',
                    'image' => 'images/categories_apteka/supplies.jpg',
                    'name_en' => 'Medical supplies',
                    'description_en' => 'Medical supplies - tools, apparatus, device, designed for diagnosis, treatment, prevention of the human body.',
                ),
            4 =>
                array (
                    'id' => 8,
                    'name' => 'Медикаменти',
                    'code' => 'medications',
                    'description' => 'Завжди великий вибір різноманітних медикаментів по доступним цінам.',
                    'image' => 'images/categories_apteka/medications.jpg',
                    'name_en' => 'Medications',
                    'description_en' => 'There is always a large selection of different medicines at affordable prices.',
                ),
        );

        for ($i = 0; $i < count($categories); $i++) {
            $categories[$i]['created_at'] = Carbon::now();
            $categories[$i]['updated_at'] = Carbon::now();
        }

        \DB::table('categories')->insert($categories);


    }
}
