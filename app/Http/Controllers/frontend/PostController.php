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
use Carbon\Carbon;


class PostController extends Controller
{
    public $title;

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
                return redirect(route('add-credit'))->withInput();
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

    public function viewPost($cityName, $subcategoryName){

        $getcitynameid =City::where('city.slug', $cityName)->select('id')->get();
        $id = $getcitynameid[0]->id;       
        $getsubcategorynameid =SubCategory::where('sub_category.slug', $subcategoryName)->select('id')->get();
        $sid = $getsubcategorynameid[0]->id;
        $objviewpost = new posts();
        $data['postpremium'] = $objviewpost->getViewPostPremium($id, $sid);
        $objviewpost = new posts();
        $data['posts'] = $objviewpost->getViewPost($id, $sid);
        $objCity = new City();
        $data['nearByCities'] = $objCity->getNearByCities($id);
        $data['getPostPath'] = $objCity->getPostPath($id);
        $objSubCategory = new SubCategory();
        $data['getSubCat'] = $objSubCategory->getSubCat($sid);
        $data['title'] = 'View-Post Page';
        $data['cityId'] = $cityName;
        $data['subId'] = $subcategoryName;
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.posts.view-post', $data);
    }

    public function postsDetails($cityName, $subcategoryName, $pid){

        $getcitynameid =City::where('city.slug', $cityName)->select('id')->get();
        $id = $getcitynameid[0]->id;       
        $getsubcategorynameid =SubCategory::where('sub_category.slug', $subcategoryName)->select('id')->get();
        $sid = $getsubcategorynameid[0]->id;
        $objviewpost = new posts();
        $data['posts'] = $objviewpost->getPostsDetails($pid);
        $objpostpreview = new PostsAttechment();
        $data['postAttechment'] = $objpostpreview->getPostAttechment($pid);
        $objCity = new City();
        $data['getPostPath'] = $objCity->getPostPath($id);
        $objSubCategory = new SubCategory();
        $data['getSubCat'] = $objSubCategory->getSubCat($sid);
        $data['cityId'] = $id;
        $data['postId'] = $pid;
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

     public function disclamier($cityName, $subcategoryName){

        $getcitynameid =City::where('city.slug', $cityName)->select('id')->get();
        $id = $getcitynameid[0]->id;   
        $getsubcategorynameid =SubCategory::where('sub_category.slug', $subcategoryName)->select('id')->get();
        $sid = $getsubcategorynameid[0]->id;
        $objSubCategory = new SubCategory();
        $data['getSubCat'] = $objSubCategory->getSubCat($sid);
        $objCity = new City();
        $data['nearByCities'] = $objCity->getNearByCities($id);
        $data['cityname'] = $objCity->getPostPath($id);
        $data['css'] = array();
        $data['cityId'] = $cityName;
        $data['subId'] = $subcategoryName;
        $data['js'] = array('posts.js');
        $data['funinit'] = array('Posts.init()');
        $data['title'] = 'Disclamier';
        return view('frontend.pages.posts.disclamier',$data);
    }

    public function reportAd($pid){
        
        $objviewpost = new posts();
        $data['posts'] = $objviewpost->getPostsDetails($pid);
        $data['postId'] = $pid;
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        
        return view('frontend.pages.posts.report-ad', $data);
    }

   public function postExpireStatusUpdate(Request $request){
        $date = Carbon::now()->subDays(7);
        $posts = Posts::where('created_at', '>=', $date)->get()->toArray();
        foreach( $posts as $post){
            $objPost = Posts::find($post['id']);
            $objPost->is_expire = '1';
            $objPost->update();
        }
        $objPost = "last 7 days posts has been Expired!";
        return $objPost;
    }

}


