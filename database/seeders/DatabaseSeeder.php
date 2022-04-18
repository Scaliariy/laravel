<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UsersTableSeeder::class);
        $this->call(CurrencySeeder::class);
//        $this->call(ContentSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(PropertiesTableSeeder::class);
        $this->call(PropertyOptionsTableSeeder::class);
//        $this->call(PropertyProductTableSeeder::class);
//        $this->call(SkuPropertyOptionTableSeeder::class);
        $this->call(SkusTableSeeder::class);
    }
}
