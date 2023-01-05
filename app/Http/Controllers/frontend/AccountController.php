<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use App\Models\Continents;
use App\Models\CountryState;
use App\Models\City;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\PostsAttechment;
use App\Models\Transaction;
use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class AccountController extends Controller
{

    public function manageAds(Request $request){

        $data['css'] = array();
        $data['js'] = array('manage-table.js');
        $data['funinit'] = array('manageAcount.manageAds()');
        $data['title'] = 'Manage Ads';
        return view('frontend.pages.account.manage-account',$data);
    }

    public function transaction(){
        $data['css'] = array();
        $data['js'] = array('transaction-table.js');
        $data['funinit'] = array('transaction.transaction()');
        $data['title'] = 'Transaction';
        return view('frontend.pages.account.transaction-details',$data);
    }

    public function addCredit(Request $request){

        if ($request->isMethod('post')) {

            $objUser = new user();
            $UserUpdate = $objUser->updateUser($request);

            $objtransaction = new transaction();
            $data = $objtransaction->saveTransaction($request);

            if($UserUpdate){
                $request->session()->flash('session_success', 'Amount credited Successfully.');
                return redirect(route('add-credit'));
            }else{
                $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                return redirect(route('add-credit'))->withInput();
            }
        }

        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Add Credit';
        return view('frontend.pages.account.add-credit',$data);
    }

    public function editFreeAdPost(Request $request,$id){

        if ($request->isMethod('post')) {
            $objPosts = new Posts();
            $postUpdate = $objPosts->updatePosts($request, $id);

            if($postUpdate){
                $request->session()->flash('session_success', 'Post Pata Updated Successfully.');
                return redirect(route('manage-ads'));
            }else{
                $request->session()->flash('session_error', 'Something will be wrong. Please try again.');
                return redirect(route('edit-free-ad-post-data'))->withInput();
            }
        }

        $objContinents = new Continents();
        $data['continents'] =  $objContinents->getContinents();
        $objCategory = new Category();
        $data['categories'] = $objCategory->getCategories();
        $objpostDetails = new Posts();
        $data['posts'] =  $objpostDetails->geteditPostData($id);
        $objpostAttechment = new PostsAttechment();
        $data['postAttechment'] = $objpostAttechment->getPostAttechment($id);
        $data['postId'] =  $id;
        $data['css'] = array();
        $data['js'] = array('edit-post.js');
        $data['funinit'] = array('PostsEdit.init()');
        $data['title'] = 'Edit Post';
        return view('frontend.pages.account.edit-post',$data);
    }

    public function ajaxAction(Request $request)
    {

        $userId = Auth::user()->id;
        $action    = $request->input('action');

        switch ($action) {
            case 'getPostData':
                $dataArr     = $request->input('data');
                $objpostData = new posts();
                $arrPostList = $objpostData->getPostList($userId, $request);
                echo json_encode($arrPostList);
                break;
            case 'deletePostData':
                $dataArr     = $request->input('data');
                $objpost  = new posts();
                $arrpost = $objpost->deletePost($request);
                echo json_encode($arrpost);
                break;
            case 'getTransactionData':
                $dataArr  = $request->input('data');
                $objtransactionData = new Transaction();
                $arrTransactionList = $objtransactionData->getTransactionList($userId, $request);
                echo json_encode($arrTransactionList);
                break;
        }
        exit;
    }

    public function viewPostDetails($pid){

        $objviewpost = new posts();
        $data['posts'] = $objviewpost->getViewPostDetail($pid);
        $objpostpreview = new PostsAttechment();
        $data['postAttechment'] = $objpostpreview->getPostAttechment($pid);
        $data['title'] = 'View posts Details Page';
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        return view('frontend.pages.account.view-post-details',$data);
    }

}
