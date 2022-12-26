<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;

class Category extends Model
{
    use HasFactory;
    protected $table = 'category';

    protected $fillable = [
        'id', 'category'
    ];

    function getCategories(){

        $category_array = array();

        $array = Category::select('category.category', 'category.id')
            ->pluck('category.category', 'category.id')
            ->toArray();

            foreach($array as $key => $arr) {

                $subCategory = SubCategory::select('sub_category.sub_category', 'sub_category.id')
                    ->where('sub_category.category_id', '=', $key)
                    ->get()
                    ->toArray();

                $category_array [] = array (
                    'id'    => $key,
                    'category'    => $arr,
                    'subcategory' =>  $subCategory
                );
            }

        return $category_array;

    }

    function getcategory(){

        $array=category::from('category')
            ->select('id', 'category',)
            ->get()
            ->toArray();
        return $array;
    }

    public function getCatData(){

        $array=category::from('category')
        ->select('category')
        ->get()
        ->toArray();
    return $array;
    }
}
