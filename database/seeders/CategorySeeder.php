<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();

        $csvFile = fopen(base_path("database/seeders/csvfiles/category.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Category::create([
                    "id" => $data['0'],
                    "category" => $data['1']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
