<?php

namespace Database\Seeders;

use Carbon\Carbon;
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

        $propertyOptions = array (
            0 =>
                array (
                    'id' => 15,
                    'name' => 'Без рецепту',
                    'name_en' => 'Without a prescription',
                    'property_id' => 7,
                ),
            1 =>
                array (
                    'id' => 16,
                    'name' => 'По рецепту',
                    'name_en' => 'On prescription',
                    'property_id' => 7,
                ),
        );

        for ($i = 0; $i < count($propertyOptions); $i++) {
            $propertyOptions[$i]['created_at'] = Carbon::now();
            $propertyOptions[$i]['updated_at'] = Carbon::now();
        }

        \DB::table('property_options')->insert($propertyOptions);


    }
}
