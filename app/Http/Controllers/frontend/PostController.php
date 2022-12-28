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
        $objContinents = new City();
        $data['city'] =  $objContinents->getCitys();
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
        $data['postDetails'] = $objpostpreview->getPostPreviewDetails($id);
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

            $objPosts = new Posts();
            $postSave = $objPosts->saveLocalAdposts($request);


            // $this -> validate($request, [
            //     'g-recaptcha-response' =>
            //     ['required', new Recaptcha()]]);

            if($postSave){
                $request->session()->flash('session_success', 'Contract Funding Source is Saved.');
                return redirect(route('local-ad-preview', $postSave));
            }else{
                $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                return redirect(route('local-ad-post'))->withInput();
            }
        }
        $objContinents = new Continents();
        $data['continents'] =  $objContinents->getContinents();
        $objCategory = new Category();
        $data['categories'] = $objCategory->getCategories();
        $data['css'] = array();
        $data['js'] = array('posts.js');
        $data['funinit'] = array('Posts.localPost()');
        $data['title'] = 'Home Page';
        return view('frontend.pages.posts.local-ad-post-form',$data);

    }

    public function localAdPreview($id){
        $objpostpreview = new posts();
        $data['postDetails'] = $objpostpreview->getPostPreviewDetails($id);
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
            case 'getCountryStateMultiple':
                $idArr = $request->id;
                $objStore = new CountryState();
                $result = $objStore->getCountryStateMultiple($idArr);
                return json_encode($result);
                break;
            case 'getCityMultiple':
                $idArr = $request->id;
                $objStore = new City();
                $result = $objStore->getCityMultiple($idArr);
                return json_encode($result);
                break;
        }
    }

    public function viewPost($id, $sid){

        $objviewpost = new posts();
        $data['posts'] = $objviewpost->getViewPost($id, $sid);
        $objCity = new City();
        $data['nearByCities'] = $objCity->getNearByCities($id);
        $data['title'] = 'View-Post Page';
        $data['cityId'] = $id;
        $data['subId'] = $sid;
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.posts.view-post', $data);
    }

    public function postsDetails($id, $sid, $pid){

        $objviewpost = new posts();
        $data['posts'] = $objviewpost->getPostsDetails($pid);
        $data['title'] = 'posts Details Page';
        $data['cityId'] = $id;
        $data['postId'] = $id;
        $data['subId'] = $sid;
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.posts.posts-details', $data);
    }

    public function multipleAdPost(Request $request){

        if ($request->isMethod('post')) {
            
            $objPosts = new Posts();
            $postSave = $objPosts->saveMultipleAdposts($request);


            // $this -> validate($request, [
            //     'g-recaptcha-response' =>
            //     ['required', new Recaptcha()]]);

            if($postSave){
                $request->session()->flash('session_success', 'Contract Funding Source is Saved.');
                return redirect(route('multiple-ad-preview', $postSave));
            }else{
                $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                return redirect(route('multiple-ad-post'))->withInput();
            }
        }

            $objContinents = new Continents();
            $data['continents'] =  $objContinents->getContinents();
            $objCategory = new Category();
            $data['categories'] = $objCategory->getCategories();
            $data['css'] = array();
            $data['js'] = array('posts.js');
            $data['funinit'] = array('Posts.multiplePost()');
            $data['title'] = 'Multiple Ad Page';
            return view('frontend.pages.posts.multiple-ad-post-form', $data);
        
        }

        public function multipleAdPreview($id){
            $objpostpreview = new posts();
            $data['postDetails'] = $objpostpreview->getPostPreviewDetails($id);
            $objpostpreview = new PostsAttechment();
            $data['postAttechment'] = $objpostpreview->getPostAttechment($id);
            $data['css'] = array();
            $data['js'] = array('posts.js');
            $data['funinit'] = array('Posts.init()');
            $data['title'] = 'Multiple Ad Preview Page';
        return view('frontend.pages.posts.multiple-ad-post-preview',$data);
    }
         
    }

    
