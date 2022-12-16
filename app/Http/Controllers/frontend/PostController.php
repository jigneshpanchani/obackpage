<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Continents;
use App\Models\CountryState;
use App\Models\City;
use App\Models\Posts;
use App\Models\PostsAttechment;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Rules\Recaptcha;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;


class PostController extends Controller
{
    public function postAd(){
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Post Ad';
        return view('frontend.pages.posts.post-ad',$data);
    }

    public function freeAdPost(Request $request){

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description'   => 'required',
            ]);
            if ($validator->fails()) {
                return redirect(route('free-ad-post'))->withErrors($validator)->withInput();
            }

            $objPosts = new Posts();
            $postSave = $objPosts->saveposts($request);


            // $this -> validate($request, [
            //     'g-recaptcha-response' =>
            //     ['required', new Recaptcha()]]);

            if($postSave){
                $request->session()->flash('session_success', 'Contract Funding Source is Saved.');
                return redirect(route('free-ad-preview', $postSave));
            }else{
                $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                return redirect(route('free-ad-post'))->withInput();
            }
        }
        $objContinents = new Continents();
        $data['continents'] =  $objContinents->getContinents();
        $objCategory = new Category();
        $data['categories'] = $objCategory->getCategories();
        $data['css'] = array();
        $data['js'] = array('posts.js');
        $data['funinit'] = array('Posts.init()');
        $data['title'] = 'Home Page';
        return view('frontend.pages.posts.free-ad-post-form',$data);

    }

    public function freeAdPreview($id){
        $objpostpreview = new posts();
        $data['postDetails'] = $objpostpreview->getPostDetails($id);
        $objpostpreview = new PostsAttechment();
        $data['postAttechment'] = $objpostpreview->getPostAttechment($id);
        $data['css'] = array();
        $data['js'] = array('posts.js');
        $data['funinit'] = array('Posts.init()');
        $data['title'] = 'Home Page';
        return view('frontend.pages.posts.free-ad-post-preview',$data);
    }

    public function localAdPost(Request $request){

        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(), [
                'title' => 'required',
                'description'   => 'required',
            ]);
            if ($validator->fails()) {
                return redirect(route('free-ad-post'))->withErrors($validator)->withInput();
            }

            $objPosts = new Posts();
            $postSave = $objPosts->saveposts($request);


            // $this -> validate($request, [
            //     'g-recaptcha-response' =>
            //     ['required', new Recaptcha()]]);

            if($postSave){
                $request->session()->flash('session_success', 'Contract Funding Source is Saved.');
                return redirect(route('free-ad-preview', $postSave));
            }else{
                $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                return redirect(route('free-ad-post'))->withInput();
            }
        }
        $objContinents = new Continents();
        $data['continents'] =  $objContinents->getContinents();
        $objCategory = new Category();
        $data['categories'] = $objCategory->getCategories();
        $data['css'] = array();
        $data['js'] = array('posts.js');
        $data['funinit'] = array('Posts.init()');
        $data['title'] = 'Home Page';
        return view('frontend.pages.posts.local-ad-post-form',$data);

    }

    public function localAdPreview($id){
        $objpostpreview = new posts();
        $data['postDetails'] = $objpostpreview->getPostDetails($id);
        $objpostpreview = new PostsAttechment();
        $data['postAttechment'] = $objpostpreview->getPostAttechment($id);
        $data['css'] = array();
        $data['js'] = array('posts.js');
        $data['funinit'] = array('Posts.init()');
        $data['title'] = 'Home Page';
        return view('frontend.pages.posts.local-ad-post-preview',$data);
    }

    public function postAdds(Request $request){
        $action = $request->input('action');
        switch($action){
            case 'getCountryStateByContinent':
                $objStore = new CountryState();
                $result = $objStore->getCountryState($request->input('id'));
                return json_encode($result);
                break;
            case 'getCityByCountryState':
                $objStore = new City();
                $result = $objStore->getCity($request->input('id'));
                return json_encode($result);
                break;
            case 'getSubCategory':
                $objStore = new SubCategory();
                $result = $objStore->getSubCategory($request->input('id'));
                return json_encode($result);
                break;
        }
    }
}
