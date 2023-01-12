@extends('frontend.layout.default')
@section('title', 'Post Ad - obackpage')
@section('description', "obackpage is site similar to backpage and the alternative of backpage. People love us as the best backpage replacement or sites similar to backpage.")
@section('keywords', "obackpage, back page, sites similar to backpage, alternative to backpage, sites like backpage and craigslist personals, backpage replacement, backpage substitute, obackpage")
@section('content')


    <div class="flex flex-col z-10 flex-1">
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
                    <a href="{{ route('home') }}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                </div>
                <div id="heading" class="px-6">
                    <span class="text-gray-900 text-2xl font-extrabold">Post An Ad</span>
                </div>
                <div class="p-6 space-y-6 bg-white m-6 rounded">
                    <div class="space-x-2">
                        <i class='fa fa-caret-right'></i>
                        <a href="{{ route('free-ad-post') }}" class="space-x-2"><span class="text-red-900 text-base font-bold underline">Post free ad</span></a><span class="text-gray-800 text-sm font-bold">(Mainly free)</span><br/>
                    </div>
                    <div class="space-x-2">
                        <i class='fa fa-caret-right'></i>
                        <a href="{{ route('local-ad-post') }}" class="space-x-2"><span class="text-red-900 text-base font-bold underline">Post local ad</span></a><span class="text-gray-800 text-sm font-bold">(Paid Premium And Sponsor ads)</span><br/>
                    </div>
                    <div class="space-x-2">
                        <i class='fa fa-caret-right'></i>
                        <a href="{{route('multiple-ad-post')}}" class="space-x-2"><span class="text-red-900 text-base font-bold underline">Post in multiple cities</span></a><span class="text-gray-800 text-sm font-bold">(Paid Premium And Sponsor ads)</span><br/>
                    </div>
                </div>

            </div>
        </main>
    </div>


@endsection
