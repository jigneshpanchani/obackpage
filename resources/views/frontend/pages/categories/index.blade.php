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
        <div class="flex" style="background-color: #f1f5f9">
            <div class="citySidebar duration-1000 toggelfilter transition-all flex w-48 bg-white px-0">
                <div class="flex flex-col w-full p-1">
                    <div class="p-6">
                        <a href="{{ route('post-ad') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                            <p class="text-xl font-bold text-white">Post ad</p>
                        </a>
                    </div>
                    <a href="" class="bg-gray-200 flex justify-center items-center p-2 rounded">
                        <span class="text-gray-800 text-sm font-bold underline">Home</span>
                    </a>
                    <div class="p-4 flex justify-center items-center">
                        <span class="text-gray-800 text-lg font-extrabold">Nearby Cities</span>
                    </div>
                    <ul class="overflow-y-auto w-full">
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">Go To Home</p>
                                </div>
                            </a>
                        </li>
                        @foreach($nearByCities as $nearByCity)
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('category', $nearByCity['id'] ) }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">{{  $nearByCity['city'] }}</p>
                                </div>
                            </a>
                        </li>
                        @endforeach
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
                        <span class="flex justify-end">
                            <h1><span class="text-white text-base font-bold">Backpage Dothan | Dothan Escorts | Escorts in Dothan, Alabama</span></h1>
                        </span>
                    </div>
                </nav>
                <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
                    <div class="flex grid grid-cols-4 space-x-4 m-4">
                        @php
                        $categories = array_chunk($category,(count($category) / 3));

                        @endphp
                        @foreach($categories as $category1)
                            <div class="">
                                @foreach($category1 as $category2)
                                       <div class="bg-blue-900 rounded">
                                            <span class="text-white text-lg px-2 font-bold leading-7">{{  $category2['category'] }}<br/></span>
                                        </div>
                                        @foreach($category2['subcategory'] as $subcategory)
                                        <div class="space-x-2 py-2">
                                            <i class='fa fa-caret-right'></i>
                                            <span class="text-gray-800 text-sm font-bold underline">{{  $subcategory['sub_category'] }}<br/></span>
                                        </div>
                                        @endforeach
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </main>
            </div>
        </div>
    </div>


@endsection
