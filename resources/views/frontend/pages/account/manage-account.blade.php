@extends('frontend.layout.default')
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
        <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
            <div class="flex flex-col">
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                </div>
                <div class="m-6 bg-white">
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
            <div class="modal-content">
                <div class="modal-header">
                    <button aria-label="Close" data-dismiss="modal" class="close  close_button" type="button">
                        <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title">Delete Recorde</h4>
                </div>
                <div class="modal-body">
                    <div class="box box-info">
                        <div class="box-body">
                            <p> You want to delete recorde. Are you sure?</p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-danger  close_button" type="button">No</button>
                    {{-- <input type='hidden' name='id' id='deleteformId' /> --}}
                    <button class="btn btn-success yes-sure deletepost" type="button">Yes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

   
@endsection
