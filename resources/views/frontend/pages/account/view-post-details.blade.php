@extends('frontend.layout.default')
@section('title', 'View - obackpage')
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
    <main class="flex-1 relative overflow-y-auto min-h-screen focus:outline-none mt-2" tabindex="0">
        <div class="flex flex-col">
            <div id="cookieCrumb" class="space-x-2 p-6">
                <a href="{{route('home')}}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i>
                @if (Route::has('login'))
                @auth
                    <a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a><i class='fa fa-chevron-right'></i>
                @else
                    <a href="{{ route('login') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a><i class='fa fa-chevron-right'></i>
                @endauth
            @endif
                {{-- <a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a><i class='fa fa-chevron-right'></i> --}}
                <a href=""><span class="text-gray-800 text-sm font-bold">View Posts Details</span></a>
            </div>
            <div class="p-6 space-y-6 bg-white m-6 rounded">
                <div id="heading" class="">
                    <span class="text-gray-900 text-4xl font-bold">{{$posts[0]['title']}}!</span><br>
                    <span class="text-gray-700 text-base font-semibold">Posted:{{  date('d-m-y', strtotime($posts[0]['created_at']))}}</span>
                </div>
                <div class="flex flex-col sm:flex-row  space-y-2 sm:space-y-0 space-x-0 sm:space-x-4">
                <button type="submit" class="bg-blue-500 flex justify-center items-center p-1">
                    <p class="text-base font-bold text-white"><i class="fa fa-envelope-square"></i> {{$posts[0]['contact_email']}}</p>
                </button>
                <button type="submit" class="bg-cyan-500 flex justify-center items-center p-1">
                    <p class="text-base font-bold text-white"><i class="fa fa-phone-square"></i> {{$posts[0]['mobile_number']}}</p>
                </button>
                </div>
                <div class="w-full flex flex-col space-y-2 sm:flex-row">
                    <div class="w-full sm:w-2/3">
                          <div class="space-y-2">
                            <span class="text-gray-700 text-base font-bold">{!!$posts[0]['description']!!}</span>
                            <span class="text-gray-700 text-base font-bold">Location: </span><span class="text-gray-900 text-base font-bold">{{$posts[0]['location']}}</span><br>
                            <span class="text-gray-700 text-base font-bold">Poster age: </span><span class="text-gray-900 text-base font-bold">{{$posts[0]['age']}}</span><br>
                            <span class="text-gray-700 text-base font-bold">Post ID: </span><span class="text-gray-900 text-base font-bold">{{$posts[0]['id']}}</span><br>
                            <span class="text-gray-700 text-base font-bold">Category: </span><span class="text-gray-900 text-base font-bold">{{$posts[0]['category']}}</span><br>
                        </div>
                    </div>
                    <div class="flex flex grid grid-cols-2 gap-10 w-full  sm:w-1/3">
                        @foreach($postAttechment as $postAttechments)
                        <div class="flex">
                            <a data-fancybox="gallery" data-src="{{ asset($postAttechments['file_path'])}}">
                                <img src="{{ asset($postAttechments['file_path'])}}" />
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="">
                    <button type="submit" class="bg-red-500 flex justify-center items-center px-2 py-1 rounded">
                        <a href="{{ route('report-ad', $posts[0]['id']) }}">
                            <span class="text-base font-bold text-white"><i class="fa fa-ban"></i> &nbsp;Report ad </span>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
