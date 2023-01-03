<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Continents;
use App\Models\City;
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

    public function search(Request $request)
    {
          $search = $request->get('term');
          $result = city::where('city', 'LIKE', '%'. $search. '%')->get();
          
        // return view('frontend.pages.homepage.index',$result);
          return response()->json($result)->view('frontend.pages.homepage.index',$result);
            
    } 
}
