<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CountryState;

class CountryStateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CountryState::truncate();

        $csvFile = fopen(base_path("database/seeders/csvfiles/countrystate.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                CountryState::create([
                    "id" => $data['0'],
                    "continent_id" => $data['1'],
                    "country_state" => $data['2']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
