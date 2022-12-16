<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;
    protected $table = 'sub_category';

    protected $fillable = [
        'id', 'category_id','sub_category'
    ];

    public function getSubCategory($id) {
        $query = SubCategory::from('sub_category')
                ->where('category_id', $id)
                ->select('sub_category', 'id')
                ->get()->toArray();
        return $query;
    }

    function getsubcategoryes(){

        $array=SubCategory::from('sub_category')
            ->select('id', 'sub_category',)
            ->get()
            ->toArray();
        return $array;
    }
}
