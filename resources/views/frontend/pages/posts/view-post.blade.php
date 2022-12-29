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
                <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="#"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
            </div>
            <div class="px-6 space-6">
                @foreach($nearByCities as $city)
                    <a href="{{ route('view-post',  array('cityId' => $city['id'], 'subcategoryId' => $subId)) }}"><span class="text-red-800 text-base font-semibold">{{  $city['city'] }}</span></a> |
                @endforeach
            </div>
            <div class="p-6 space-y-6 m-6 rounded">
                <div class="">
                    <a href="#"><span class="text-green-700 text-base font-bold">Top</span></a> |
                </div>
                @foreach ($posts as $date=>$postList)
                <div class="space-y-2">
                    <div class="bg-gradient-to-r from-blue-900  rounded">
                        <span class="text-white text-base font-semibold leading-7 pl-2 date">{{ $date }}</span>
                    </div>
                    @foreach ($postList as $post)
                    <div class="px-4">
                        <a href="{{ route('posts-details',  array('cityId' => $city['id'], 'subcategoryId' => $subId, 'postId' => $post['id'])) }}">
                            <span class="text-red-800 text-base font-semibold">{{ $post['title'] }}</span>
                            <span class="text-gray-800 text-base font-bold">-{{ $post['age'] }}  ({{ $post['location'] }})</span></a>
                    </div>
                    @endforeach
                </div>
                @endforeach

            </div>
        </div>
    </main>
</div>

@endsection
