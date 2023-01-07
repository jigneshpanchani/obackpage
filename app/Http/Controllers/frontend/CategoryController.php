<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\City;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index($id){

        $objCategory = new Category();
        $data['category'] = $objCategory->getCategories();
        $objCity = new City();
        $data['nearByCities'] = $objCity->getNearByCities($id);
        $data['cityname'] = $objCity->getPostPath($id);
        $data['cityId'] = $id;
        $data['title'] = 'Home Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.categories.index',$data);
    }

    // public function createCategory(Request $request)
    // {
    //     $categories = Category::where('parent_id', null)->orderby('name', 'asc')->get();
    //     if($request->method()=='GET')
    //     {
    //         return view('create-category', compact('categories'));
    //     }
    //     if($request->method()=='POST')
    //     {
    //         $validator = $request->validate([
    //             'name'      => 'required',
    //             'slug'      => 'required|unique:categories',
    //             'parent_id' => 'nullable|numeric'
    //         ]);

    //         Category::create([
    //             'name' => $request->name,
    //             'slug' => $request->slug,
    //             'parent_id' =>$request->parent_id
    //         ]);

    //         return redirect()->back()->with('success', 'Category has been created successfully.');
    //     }
    // }
}
