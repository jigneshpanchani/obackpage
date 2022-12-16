<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\continents;
use App\Models\CountryState;
use App\Models\City;
use App\Models\Category;
use App\Models\SubCategory;

class DashboardController extends Controller
{
    public function index()
    {
        $data['title']= 'Dashboard';
        return view("backend.pages.dashboard",$data);
    }

    public function userData(){
        $objUser = new User();
        $data['users'] = $objUser->getUser();
        $data['title'] = 'User Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('backend.pages.user',$data);
    }

    public function countryData(){
        $objcountry = new continents();
        $data['continent'] = $objcountry->getCountry();
        $data['title'] = 'Country Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('backend.pages.Country',$data);

    }

    public function stateData(){

        $objstate = new CountryState();
        $data['country_state'] = $objstate->getstate();
        $data['title'] = 'State Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('backend.pages.state',$data);
    }

    public function cityData(){

        $objcity = new city();
        $data['city'] = $objcity->getcitys();
        $data['title'] = 'City Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('backend.pages.city',$data);
    }

    public function categoryData(){

        $objcategory = new category();
        $data['category'] = $objcategory->getcategory();
        $data['title'] = 'Category Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('backend.pages.category',$data);
    }

    public function subCategoryData(){

        $objsubcategory = new SubCategory();
        $data['sub_category'] = $objsubcategory->getsubcategoryes();
        $data['title'] = 'Sub Category Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('backend.pages.subCategory',$data);
    }
}