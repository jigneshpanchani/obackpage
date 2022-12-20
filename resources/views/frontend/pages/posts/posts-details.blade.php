@extends('frontend.layout.default')
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
                <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i>
                <a href="#"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a><i class='fa fa-chevron-right'></i>
                <a href="#"><span class="text-gray-800 text-sm font-bold">View Posts</span></a>
            </div>
                <div class="p-6 space-y-6 bg-white m-6 rounded">
                    <div id="heading" class="">
                        <span class="text-gray-900 text-4xl font-bold">{{$posts[0]['title']}}!</span><br>
                        <span class="text-gray-700 text-base font-semibold">Posted:{{  date('d-m-y', strtotime($posts[0]['created_at']))}}</span>
                    </div>
                    <button type="submit" class="bg-blue-500 flex justify-center items-center p-1 rounded">
                        <p class="text-base font-bold text-white"><i class="fa fa-envelope-square"></i> {{$posts[0]['contact_email']}}</p>
                    </button>
                    <div class="border-2 border-red-500 p-4 bg-yellow-100">
                        <div class="infobox"><span class="text-red-500 text-base font-semibold">SCAM Alert!!!</span>
                            <br> if ad poster asks for money or tells you to verify in another website by 
                            <span class="text-gray-800 text-base font-bold">Gift Card, Cash app, Venmo, Zelle app, Bitcoin, Debit Card, Credit Card</span>
                            <span class=""> or by any other way, consider its a Total </span>
                            <span class="text-gray-800 text-base font-bold">SCAM</span>
                            <span class=""> ! They will take your money and will never respond your messages. DO NOT pay anything before meeting the provider!</span><br>
                            <span class="text-red-500 text-base font-semibold">obackpage won’t be responsible for any fraud if you ignore this warning.</span>
                        </div>
                    </div>
                    <div class="flex">
                        <span class="text-gray-700 text-base font-bold">{{$posts[0]['description']}}</span>
                    </div>
                <div id="heading" class="">
                    <span class="text-gray-700 text-base font-bold">Location:</span><span class="text-gray-900 text-base font-bold">{{$posts[0]['location']}}</span><br>
                    <span class="text-gray-700 text-base font-bold">Poster age:</span><span class="text-gray-900 text-base font-bold">{{$posts[0]['age']}}</span><br>
                    <span class="text-gray-700 text-base font-bold">Post ID:</span><span class="text-gray-900 text-base font-bold">{{$posts[0]['id']}}</span>
                </div>
                <div class="">
                    <button type="submit" class="bg-red-500 flex justify-center items-center p-1 rounded">
                        <p class="text-base font-bold text-white"><i class="fa fa-ban"></i> &nbsp;Report ad </p>
                    </button>
                </div>
            </div>
        </div>
    </main>
</div>
@endsection