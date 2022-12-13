<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Continents;

class ContinentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Continents::truncate();

        $csvFile = fopen(base_path("database/seeders/csvfiles/continents.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Continents::create([
                    "id" => $data['0'],
                    "continent" => $data['1']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
