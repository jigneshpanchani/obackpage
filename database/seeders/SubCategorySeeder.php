<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SubCategory;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::truncate();

        $csvFile = fopen(base_path("database/seeders/csvfiles/subcategory.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                SubCategory::create([
                    "id" => $data['0'],
                    "category_id" => $data['1'],
                    "sub_category" => $data['2'],
                    "slug" => $data['3']
                ]);
            }
            $firstline = false;
        }

        fclose($csvFile);
    }
}
