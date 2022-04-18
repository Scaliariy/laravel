<?php

namespace Database\Seeders;

use Carbon\Carbon;
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

        $properties = array (
            0 =>
                array (
                    'id' => 7,
                    'name' => 'Рецепт',
                    'name_en' => 'Prescription',
                ),
        );

        for ($i = 0; $i < count($properties); $i++) {
            $properties[$i]['created_at'] = Carbon::now();
            $properties[$i]['updated_at'] = Carbon::now();
        }

        \DB::table('properties')->insert($properties);


    }
}
