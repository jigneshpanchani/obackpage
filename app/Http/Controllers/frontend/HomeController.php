<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Continents;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){

        $objContinents = new Continents();
        $data['continents'] =  $objContinents->getContinents();
        $data['title'] = 'Home Page';
        return view('frontend.pages.homepage.index',$data);
    }

    public function freeAdChooseLocation(){
        $objContinents = new Continents();
        $data['continents'] =  $objContinents->getContinents();
        $data['title'] = 'Home Page';
        return view('frontend.pages.posts.free-ad-choose-location',$data);

    }
}
