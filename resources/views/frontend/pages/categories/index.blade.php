@extends('frontend.layout.default')
@section('title', 'Backpage'. ' '. $cityname[0]['city'].'|'. $cityname[0]['city'].' '.'Escorts'. '|'. $cityname[0]['state'].' '.'obackpage')
@section('description', 'For '. $cityname[0]['city'].' Escorts obackpage is the best alternative to backpage. After backpage, obackpage is the most popular classified site for '. $cityname[0]['city'].' Escorts. Like backpage it is free directory site for '. $cityname[0]['city'].' Escorts or Escorts in '. $cityname[0]['city'].'.if you are looking for cityxguide '. $cityname[0]['city'].' escorts or adultsearch '. $cityname[0]['city'].' escorts or adult search '. $cityname[0]['city'].' escorts then obackpage is the best site to visit')
@section('keywords', 'Backpage '. $cityname[0]['city'].', '. $cityname[0]['city'].' backpage, free classified site '. $cityname[0]['city'].',Beautiful Escorts in '. $cityname[0]['city'].','. $cityname[0]['city'].' Escort,independent escort '. $cityname[0]['city'].',free classified sites in '. $cityname[0]['city'].', free directory site '. $cityname[0]['city'].', best classified site '. $cityname[0]['city'].', Escorts in '. $cityname[0]['city'].', best directory site '. $cityname[0]['city'].'')


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
                                    @if($subcategory['category_id'] == '1'  || $subcategory['category_id'] == '5')
                                        <a href="{{ route('disclamier',  array('cityId' => $cityId, 'subcategoryId' => $subcategory['id']))}}">
                                    @else
                                        <a href="{{ route('view-post',  array('cityId' => $cityId, 'subcategoryId' => $subcategory['id'])) }}">
                                    @endif
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
