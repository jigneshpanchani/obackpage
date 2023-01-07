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
        $data['js'] = array('home.js');
        $data['funinit'] = array();
        $data['title'] = 'Home Page';
        return view('frontend.pages.homepage.index',$data);
    }

    public function Autocomplete(Request $request){
        $action = $request->input('action');
        switch($action){
            case 'getCity':
                $idArr = $request->id;
                $search = $request->input('keyword');
                $result = city::where('city', 'LIKE', '%'. $search. '%')->select('city','slug')->get();
                $output ='<ul class="dropdown-menu search-menu" style="display:block; position:relative">';
                foreach($result as $row){
                 $output .='<li><a href="'.url('category').'/'.$row->slug.'">'.$row->city.'</a></li>';
                }
                $output .='</ul>';
                return json_encode($output);
                break;
        }
    }
}
