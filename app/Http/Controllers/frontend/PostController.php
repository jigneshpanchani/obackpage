<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Continents;
use App\Models\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
    public function postAd(){
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Post Ad';
        return view('frontend.pages.posts.post-ad',$data);
    }

    public function freeAdChooseLocation(Request $request){

        if ($request->isMethod('post')) {
    
                $objPosts = new Posts();
                $data['posts'] = $objPosts->saveposts($request) ;
        }
        $objContinents = new Continents();
        $data['continents'] =  $objContinents->getContinents();
        $data['css'] = array();
        $data['js'] = array('posts.js');
        $data['funinit'] = array('Posts.init()');
        $data['title'] = 'Home Page';
        return view('frontend.pages.posts.free-ad-choose-location',$data);
    }

    public function ajaxAction(Request $request){

        $action = $request->input('action');
        print_r($request->input());exit;
        switch($action){

            case 'getCountryState':

                $objStore = new Continents();
                $result = $objStore->getCountryState($request->input('id'));
                return json_encode($result);
                break;
        }
    }
}
