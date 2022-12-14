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
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Home Page';
        return view('frontend.pages.homepage.index',$data);
    }
}
