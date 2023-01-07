@extends('frontend.layout.default')
@section('title', 'Report Ad')
@section('description', "submit misuse report obackpage")
@section('keywords', "obackpage misuse report")
@section('content')

<div class="flex flex-col z-10 flex-1">
    <nav class="navbar">
        <div class="flex bg-blue-900 w-full justify-between w-full items-center p-2">
            <div class="flex flex-row items-center justify-start space-x-4">
                <i class="fa fa-bars openSidebarBtn cursor-pointer" aria-hidden="true"></i>
                <a href="">
                    <img style="width: 158px; height: 40px; padding-top: 2px;" alt="obackpage" title="obackpage" class="logow" src="https://obackpage.com/assets/frontend/img/logo_white.png">
                </a>
            </div>
        </div>
    </nav>
    <main class="flex-1 relative overflow-y-auto min-h-screen focus:outline-none mt-2" tabindex="0">
        <div class="flex flex-col">
            <div id="cookieCrumb" class="space-x-2 p-6">
                <a href="{{ route('home') }}"><span class="text-gray-800 text-sm font-bold">Home</span></a>
            </div>
            <span class="text-gray-900 text-2xl font-bold px-6">Report Ad!</span>
            <div class="space-y-2 p-6">
                <span class="text-2xl font-bold">{{$posts[0]['title']}}!</span><br>
                <span class="text-gray-700 text-base font-semibold">Posted:{{  date('d-m-y', strtotime($posts[0]['created_at']))}}</span>
            </div>
            <div class="space-y-6 border-2 border-gray-500 p-6 bg-gray-200 m-6 rounded">
                <div class="text-xl font-bold space-y-2">
                    <span>Post ID: </span><span>{{$posts[0]['id']}}</span><br>
                </div>
                <div class="font-semibold">
                    <p>If you have any complaints about this ad! please email: <a class="text-blue-700 font-bold underline" href="mailto:misuse@obackpage.com">misuse@obackpage.com</a> with post id, we will resolve it within 24 hours.</p>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection
