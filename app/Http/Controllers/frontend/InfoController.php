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
        $data['title'] = 'Replacement';
        return view("frontend.pages.info.replacement" , $data);
    }

    public function alternativeToCraigslistPersonals()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'AlternativeToCraigslistPersonals';
        return view("frontend.pages.info.alternativetocraigslistpersonals" , $data);
    }

    public function backpageAlternatives()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'BackpageAlternatives';
        return view("frontend.pages.info.backpagealternatives" , $data);
    }

    public function craigslistPersonals()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'CraigslistPersonals';
        return view("frontend.pages.info.craigslistpersonals" , $data);
    }

    public function similarToBackpage()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'SimilarToBackpage';
        return view("frontend.pages.info.similartobackpage" , $data);
    }

    public function newBackpage()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'NewBackpage';
        return view("frontend.pages.info.newbackpage" , $data);
    }

    public function sitesLikeCraigslis()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'SitesLikeCraigslis';
        return view("frontend.pages.info.siteslikecraigslis" , $data);
    }

    public function topAlternativeToBackpage()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'TopAlternativeToBackpage';
        return view("frontend.pages.info.topalternativetobackpage" , $data);
    }

    public function newBackpageReplacement()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'NewBackpageReplacement';
        return view("frontend.pages.info.newbackpagereplacement" , $data);
    }

    public function theBestEscortSites()
    {
        $data['css'] = array();
        $data['js'] = array();
        $data['funinit'] = array();
        $data['title'] = 'TheBestEscortSitesToHelpYouFindThePerfectCompanion';
        return view("frontend.pages.info.thebestescortsites" , $data);
    }


}
