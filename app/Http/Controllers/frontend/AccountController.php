<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function manageAds(){
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Manage Ads';
        return view('frontend.pages.account.manage-account',$data);
    }

    public function transaction(){
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Transaction';
        return view('frontend.pages.account.transaction-details',$data);
    }

    public function addCredit(){
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Add Credit';
        return view('frontend.pages.account.add-credit',$data);
    }
}
