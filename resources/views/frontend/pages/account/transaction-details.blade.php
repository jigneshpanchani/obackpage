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
    <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2 h-screen" tabindex="0">
        <div class="flex flex-col h-screen">
            <div id="cookieCrumb" class="space-x-2 p-6">
                <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad  </span></a>
            </div>
            <div class="m-6 bg-white flex flex-col">
                <div class="flex items-center justify-between p-6">
                    <div class="border border-green-600 rounded p-2">
                        <span class="text-green-600 font-bold text-lg">Credits :</span><span class="text-green-600 font-bold text-lg">$ {{ Auth::user()->credits  }}</span>
                    </div>
                    <div class=""> 
                        <span class="w-60 text-gray-900 text-lg font-bold">{{ Auth::user()->email  }}</span>
                    </div>
                </div>
                <div class="flex items-center justify-between bg-blue-900 rounded p-4">
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
                <div class="p-6 table-responsive no-padding">
                    <table id="transactionData" class="table table-hover table-custom">
                        <thead>
                            <tr>
                                <th>Time</th>
                                <th>Code</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
