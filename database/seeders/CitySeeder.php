<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use  App\Models\City;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::truncate();

        $csvFile = fopen(base_path("database/seeders/csvfiles/city.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                City::create([
                    "id" => $data['0'],
                    "continent_id" => $data['1'],
                    "country_state_id" => $data['2'],
                    "city" => $data['3'],
                    "slug" => $data['4']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
