@extends('frontend.layout.default')
@section('title', 'Preview ad - obackpage')
@section('description', "obackpage is site similar to backpage and the alternative of backpage. People love us as the best backpage replacement or sites similar to backpage.")
@section('keywords', "backpage, back page, sites similar to backpage, alternative to backpage, sites like backpage and craigslist personals, backpage replacement, backpage substitute, obackpage")
@section('content')

    <div class="flex flex-col z-10 flex-1 w-full">
        <nav class="navbar">
            <div class="flex bg-blue-900 w-full justify-between w-full items-center p-2">
                <div class="flex flex-row items-center justify-start space-x-4">
                    <i class="fa fa-bars openSidebarBtn cursor-pointer" aria-hidden="true"></i>
                    <a href="{{ route('home') }}">
                        <img style="width: 158px; height: 40px; padding-top: 2px;" alt="obackpage" title="obackpage" class="logow" src="https://obackpage.com/assets/frontend/img/logo_white.png">
                    </a>
                    @if (Route::has('login'))
                        @auth
                            <div class="btn btn-primary bg-red-700 rounded-sm font-bold text-white p-1">
                                <a class="p-1" href="{{route('post-ad')}}"><i class="fa fa-paper-plane"></i> Post ad </a>
                            </div>
                        @else
                            <div class="btn btn-primary bg-red-700 rounded-sm font-bold text-white p-1">
                                <a class="p-1" href="{{route('login')}}"><i class="fa fa-paper-plane"></i> Post ad </a>
                            </div>
                        @endauth
                    @endif
                </div>
            </div>
        </nav>
        <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
            <div class="flex flex-col">
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="{{ route('home') }}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i>
                    <a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a><i class='fa fa-chevron-right'></i>
                    <a href="#"><span class="text-gray-800 text-sm font-bold">free Ad Preview</span></a>
                </div>
                <div id="heading" class="px-6">
                    <span class="text-gray-900 text-2xl font-extrabold">Free Ad Preview</span>
                </div>
                <div class="p-6 space-y-6 bg-white m-6 rounded">
                    <div class="space-y-6">
                        <div class="g-recaptcha py-6" id="feedback-recaptcha"
                            data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                        </div>
                        <a href="{{ route('manage-ads') }}" class="bg-blue-900 w-48 flex justify-center items-center p-2 rounded">
                            <p class="text-xl font-bold text-white">Place Ad Now</p>
                        </a>
                        <div class="flex flex-col sm:flex-row">
                            <span class="w-60 text-red-900 text-lg font-bold">Title :</span><span class="w-60 text-gray-800 text-base font-bold"> {{$postDetails[0]['title']}} </span>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <span class="w-60 text-red-900 text-lg font-bold">Description : </span><span class="w-60 text-gray-800 text-base font-bold">{!!$postDetails[0]['description']!!}</span>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <span class="w-60 text-red-900 text-lg font-bold">Contact Email : </span><span class="w-60 text-gray-800 text-base font-bold">{{$postDetails[0]['contact_email']}}</span>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <span class="w-60 text-red-900 text-lg font-bold">Contact mobaile Number : </span><span class="w-60 text-gray-800 text-base font-bold">{{$postDetails[0]['mobile_number']}}</span>
                        </div>
                        <div class="flex flex-col sm:flex-row">
                            <span class="w-60 text-red-900 text-lg font-bold"> Category : </span><span class="w-60 text-gray-800 text-base font-bold">{{$postDetails[0]['sub_category']}}</span>
                        </div>
                        <div class="flex flex grid grid-cols-4 gap-10">
                            @foreach($postAttechment as $postAttechments)
                            <div class="flex">
                                <img src="{{ asset($postAttechments['file_path'])}}" alt="searchIcon" />
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
