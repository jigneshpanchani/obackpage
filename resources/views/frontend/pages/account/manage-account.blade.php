@extends('frontend.layout.default')
@section('title', 'Ads List - obackpage')
@section('description', "obackpage is site similar to backpage and the alternative of backpage. People love us as the best backpage replacement or sites similar to backpage.")
@section('keywords', "backpage, back page, sites similar to backpage, alternative to backpage, sites like backpage and craigslist personals, backpage replacement, backpage substitute, obackpage")
@section('content')

<style>
    .show-modal{
        display: block !important;
        opacity: 1 !important;
        position: fixed;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1050;
        background: rgba(0,0,0,.3);
    }
    .show-modal-position{
        width: 600px;
        margin: 30px auto;
        position: relative;
        box-sizing: border-box;
    }
    .modal-content {
    position: relative;
    background-color: #fff;
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    border: 1px solid #999;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: 6px;
    outline: 0;
    -webkit-box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
    box-shadow: 0 3px 9px rgb(0 0 0 / 50%);
    }
    .modal-header {
    border-bottom-color: #f4f4f4;
  
    
}
</style>
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
                    <a href="{{ route('home') }}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                </div>
                <div class="m-6 bg-white flex flex-col">
                    <div class="flex items-center justify-between p-6">
                        <div class="border border-green-600 rounded p-2">
                            <span class="text-green-600 font-bold text-lg">Credits :</span><span class="text-green-600 font-bold text-lg"> ${{ Auth::user()->credits  }}</span>
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
                        <table id="postData" class="table table-hover table-custom">
                            <thead>
                                <tr><th>Date</th>
                                    <th>Title</th>
                                    <th>City</th>
                                    <th>Category</th>
                                    <th>Primium</th>
                                    <th>Sponsor</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="modal fade" id="deleteModal" role="dialog" style="display: none;">
        <div class="modal-dialog">
                <div class="flex justify-end">
                    <button aria-label="Close" data-dismiss="modal" class="close close_button">
                    </button>
                </div>
                <div class="flex justify-start p-4">
                    <p>Are you sure you want to delete this ad ?</p><br>
                </div>
                <div class="flex justify-end space-x-2 p-2">
                    <button class="btn btn-danger close_button bg-red-500 text-white font-bold py-2 px-4 rounded">Cancel</button>
                    <button class="btn btn-success yes-sure deletepost bg-green-500 text-white font-bold py-2 px-4 rounded">Confirm</button>
                </div>
        </div><!-- /.modal-dialog -->
    </div>

@endsection
