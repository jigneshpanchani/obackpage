@extends('frontend.layout.default')
@section('title', 'Ad Credit - obackpage')
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
            <div class="flex flex-col h-screen">
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="{{ route('home') }}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                </div>
                <div class="space-y-6">
                    <div class="m-6 bg-white flex flex-col">
                        <div class="flex flex-col sm:flex-row items-center justify-between p-6">
                            <div class="border border-green-600 rounded p-2">
                                <span class="text-green-600 font-bold text-lg">Credits :</span><span class="text-green-600 font-bold text-lg"> ${{ Auth::user()->credits  }}</span>
                            </div>
                            <div class="">
                                <span class="w-60 text-gray-900 text-lg font-bold">{{ Auth::user()->email  }}</span>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row  items-center justify-between bg-blue-900 rounded p-4">
                            <div class="border border-blue-900 rounded space-x-6">
                                <a href="{{route('manage-ads')}}">
                                <span class="bg-blue-900 text-white font-bold">My Account</span>
                                </a>
                                <a href="{{route('transaction')}}">
                                    <span class="bg-blue-900 text-white font-bold">Transaction</span>
                                </a>
                            </div>
                            <div class="">
                                <a href="{{route('add-credit')}}">
                                    <span class="bg-blue-900 text-white font-bold">Buy Credits</span>
                                </a>
                            </div>
                        </div>
                        <div class="border-2 border-gray-200 p-6 bg-white space-y-4">
                            <div class="infobox"><span class="text-indigo-700 text-base font-bold"> || INSTANT CREDIT DEPOSIT || </span>
                                <br class="text-gray-900"> Add credits in your obackpage account to post top page ( Premium/Sponsor ) your ads, After one ads promotion, Remaining credits/balance will be still available in your account for future ads promotions!
                            </div>
                            <div class="flex space-x-4 items-center justify-center">
                                <form name="addform" id="addform" class="w-full sm:w-1/2" method="post" action="{{url('add-credit')}}" enctype="multipart/form-data">
                                    @csrf
                                <div class="border-2 border-gray-200 p-6 bg-white space-y-6">
                                    <div class="border-1 border-gray-200 p-2 bg-gray-200">
                                        <div class="panel-heading">Instant Bitcoin Add</div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="font-bold">Amount</label>
                                    </div>
                                    <div class="panel-body space-y-5">
                                        <div class="flex flex-col">
                                            <input type="number" class="form-control" name="credit_amount" placeholder="Input USD amount">
                                        </div>
                                        <div class="flex justify-center">
                                            <button type="submit" class="bg-green-500 flex justify-center items-center p-2 rounded">
                                                <span class="text-xl font-bold text-white">Add Bitcoin</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
