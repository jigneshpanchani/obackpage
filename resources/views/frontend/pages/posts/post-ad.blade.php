@extends('frontend.layout.default')
@section('content')
    <style>
    .widthzero {
        width: 0px;
        /* display: none; */
    }
    .fa-bars{
        font-size: 32px;
        color: #fff;
    }
    .fa-caret-right{
        font-size: 14px;
        color: rgb(82, 79, 79);
    }
    .fa-chevron-right {
        font-size: 14px;
        color: rgb(82, 79, 79);
    }
    .citySidebar ul{
        padding: 0px;
        margin: 0px;
    }
    .citySidebar li {
        margin: 0;
        border-bottom: 1px solid black;
    }
    </style>

    <div class="">
        <div class="flex h-screen" style="background-color: #f1f5f9">
            <div class="citySidebar duration-1000 toggelfilter transition-all flex w-48 bg-white px-0">
                <div class="flex flex-col w-full p-1">
                    <div class="p-6">
                        <a href="{{ route('post-ad') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                            <p class="text-xl font-bold text-white">Post ad</p>
                        </a>
                    </div>
                    <ul class="overflow-y-auto w-full">
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">Home</p>
                                </div>
                            </a>
                        </li>
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">My Account</p>
                                </div>
                            </a>
                        </li>
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">Buy Credits</p>
                                </div>
                            </a>
                        </li>
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">Logout</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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
                <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
                    <div class="flex flex-col">
                        <div id="cookieCrumb" class="space-x-2 p-6">
                            <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="#"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                        </div>
                        <div id="heading" class="px-6">
                            <span class="text-gray-900 text-2xl font-extrabold">Post An Ad</span>
                        </div>
                        <div class="space-y-2 p-6">
                            <div class="space-x-2">
                                <i class='fa fa-caret-right'></i>
                                <a href="{{ route('free-ad-choose-location') }}" class="space-x-2"><span class="text-red-900 text-base font-bold underline">Post free ad</span></a><span class="text-gray-800 text-sm font-bold">(Mainly free)</span><br/>
                            </div>
                            <div class="space-x-2">
                                <i class='fa fa-caret-right'></i>
                                <a href="" class="space-x-2"><span class="text-red-900 text-base font-bold underline">Post local ad</span></a><span class="text-gray-800 text-sm font-bold">(Paid Premium And Sponsor ads)</span><br/>
                            </div>
                            <div class="space-x-2">
                                <i class='fa fa-caret-right'></i>
                                <a href="" class="space-x-2"><span class="text-red-900 text-base font-bold underline">Post in multiple cities</span></a><span class="text-gray-800 text-sm font-bold">(Paid Premium And Sponsor ads)</span><br/>
                            </div>
                        </div>

                    </div>
                </main>
            </div>
        </div>
    </div>


@endsection
