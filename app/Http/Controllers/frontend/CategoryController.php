<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($id){
        $objCategory = new Category();
        $data['category'] = $objCategory->getCategories();
        $objCity = new City();
        $data['nearByCities'] = $objCity->getNearByCities($id);
        $data['cityId'] = $id;
        $data['title'] = 'Home Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.categories.index',$data);
    }
}
