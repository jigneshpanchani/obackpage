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
        $this->call([
            ContinentsSeeder::class,
            CountryStateSeeder::class,
            CitySeeder::class,
            CategorySeeder::class,
            SubCategorySeeder::class,
        ]);
    }
}
