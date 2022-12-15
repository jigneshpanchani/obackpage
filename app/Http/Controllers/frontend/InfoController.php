<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function aboutus()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'About Us';
        return view("frontend.pages.info.aboutus" , $data);
    }

    public function termsOfUse()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Terms';
        return view("frontend.pages.info.terms" , $data);
    }

    public function contact()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Contact';
        return view("frontend.pages.info.contact" , $data);
    }

    public function privacyPolicy()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Privacy';
        return view("frontend.pages.info.privacy" , $data);
    }

    public function blog()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Blog';
        return view("frontend.pages.info.blog" , $data);
    }

    public function alternativeToBackpage()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Alternative';
        return view("frontend.pages.info.alternative" , $data);
    }

    public function websiteSimilarToBackpage()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Similar';
        return view("frontend.pages.info.similar" , $data);
    }

    public function bestSitesLikeBackpage()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Bestsite';
        return view("frontend.pages.info.bestsite" , $data);
    }

    public function backpageReplacement()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'Backpage';
        return view("frontend.pages.info.replacement" , $data);
    }


}
