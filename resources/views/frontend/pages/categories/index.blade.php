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
                                <div class="bg-blue-900 rounded text-center">
                                    <span class="text-white text-lg px-2 font-bold leading-7">{{  $category2['category'] }}<br/></span>
                                </div>
                                @foreach($category2['subcategory'] as $subcategory)
                                <div class="space-x-2 py-2">
                                    <i class='fa fa-caret-right'></i>
                                    <a href="{{ route('view-post',  array('cityId' => $cityId, 'subcategoryId' => $subcategory['id'])) }}">
                                    <span class="text-gray-800 text-sm font-bold underline">{{  $subcategory['sub_category'] }}</span><br/></a>
                                </div>
                                @endforeach
                        @endforeach
                    </div>
                @endforeach
            </div>
        </main>
    </div>

@endsection
