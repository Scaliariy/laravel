<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropertiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('properties')->delete();

        \DB::table('properties')->insert(array (
            0 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 1,
                'name' => 'Цвет',
                'name_en' => 'Color',
                'updated_at' => '2022-03-30 20:11:42',
            ),
            1 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 2,
                'name' => 'Внутренняя память',
                'name_en' => 'Memory',
                'updated_at' => '2022-03-30 20:11:42',
            ),
        ));


    }
}
