<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PropertyOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('property_options')->delete();

        \DB::table('property_options')->insert(array (
            0 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 1,
                'name' => 'Белый',
                'name_en' => 'White',
                'property_id' => 1,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            1 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 2,
                'name' => 'Черный',
                'name_en' => 'Black',
                'property_id' => 1,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            2 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 3,
                'name' => 'Серебристый',
                'name_en' => 'Silver',
                'property_id' => 1,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            3 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 4,
                'name' => 'Золотой',
                'name_en' => 'Gold',
                'property_id' => 1,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            4 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 5,
                'name' => 'Красный',
                'name_en' => 'Red',
                'property_id' => 1,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            5 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 6,
                'name' => 'Синий',
                'name_en' => 'Blue',
                'property_id' => 1,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            6 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 7,
                'name' => '32гб',
                'name_en' => '32gb',
                'property_id' => 2,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            7 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 8,
                'name' => '64гб',
                'name_en' => '64gb',
                'property_id' => 2,
                'updated_at' => '2022-03-30 20:11:42',
            ),
            8 =>
            array (
                'created_at' => '2022-03-30 20:11:42',
                'deleted_at' => NULL,
                'id' => 9,
                'name' => '128гб',
                'name_en' => '128gb',
                'property_id' => 2,
                'updated_at' => '2022-03-30 20:11:42',
            ),
        ));


    }
}
