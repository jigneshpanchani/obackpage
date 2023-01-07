@extends('frontend.layout.default')
@section('title', $cityname[0]['city'].' '.'Escorts'.  '|' .'Female'.' '.'Escorts'.  '|' . $getSubCat[0]['sub_category'].','.$cityname[0]['state'])
@section('description', 'obackpage personals for ' . $getSubCat[0]['sub_category'].'. Backpage ' . $getSubCat[0]['sub_category'].' category is for you to post your ads. Browse postings with multiple pics to find men for date and post ads easily.')
@section('keywords', 'Backpage ' . $getSubCat[0]['sub_category'].', Cracker ' . $getSubCat[0]['sub_category'].', obackpage ' . $getSubCat[0]['sub_category'].', Backpage obackpage, obackpage personals, Back page obackpage')
@section('content')


<div class="flex flex-col z-10 flex-1">
        <nav class="navbar">
            <div class="flex bg-blue-900 w-full justify-between w-full items-center p-2">
                <div class="flex flex-row items-center justify-start space-x-4">
                    <i class="fa fa-bars openSidebarBtn cursor-pointer" aria-hidden="true"></i>
                    <a href="{{ route('home') }}">
                        <img style="width: 158px; height: 40px; padding-top: 2px;" alt="obackpage" title="obackpage" class="logow" src="https://obackpage.com/assets/frontend/img/logo_white.png">
                    </a>
                </div>
            </div>
        </nav>
        <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
            <div class="flex- flex-col h-screen">
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="{{ route('home') }}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i>
                    <a href="{{ route('category', $cityId) }}"><span class="text-gray-800 text-sm font-bold">{{  $getSubCat[0]['sub_category'] }}</span></a>
                </div>
                <div class="disclaimerAgreement p-6">
                    <span class="text-2xl font-bold p-2">Disclaimer</span>
                    <div class="text-sm font-gray-700 font-medium p-2">
                        <p>This section contains sexual containt.including pictorial nudity adult language. It is to be accessed only by persons who are 21 years of age or older (and is not considered to be a minor in his/her state of residence) and who live in a community or local jurisdiction where nude pictures and explicit adult materials are not prohibited by law. By accessing this website, you are representing to us that you meet the above qualifications. a false representation may be a criminal offense.<br>
                            I confirm and represent that I am 21 years of age or older (and am not considered to be a minor in my state of residence) and that I am not located in a community or local jurisdiction where nude pictures or explicit adult materials are prohibited by any Law. I agree to report any illegal services or activities which violate the Terms of Use.I also agree to <b>report suspected exploitation of minors and/or human trafficking</b> to appropriate authorities.
                            <br><br>
                            <b>I have read and agree to this disclaimer as well as the <a class="underline text-blue-700 font-bold" href="{{ route('terms-of-use') }}">Terms of Use</a>.</b></p>
                    </div>
                    <br>
                <div class="flex justify-start space-x-2 p-2">
                    <a href="{{ route('view-post', array('cityId' => $cityId, 'subcategoryId' => $subId)) }}">
                    <span class="btn-btn-primary bg-gray-800 text-white font-bold py-2 px-4 rounded-md">I am 21+</span>
                    </a>
                    <a href="{{ route('category', $cityId) }}">
                    <span class="btn-btn-primary bg-gray-800 text-white font-bold py-2 px-4 rounded-md">Exit</span>
                    </a>
                </div>
                    <br>
                    <br>
                </div>
            </div>
        </main>
    </div>



@endsection
