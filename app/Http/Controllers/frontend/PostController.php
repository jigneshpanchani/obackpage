<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postAd(){
        $data['title'] = 'Post Ad';
        return view('frontend.pages.posts.post-ad',$data);
    }
}
