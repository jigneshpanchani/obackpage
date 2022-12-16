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
        <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
            <div class="flex flex-col">
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                </div>
                <div class="px-6 space-y-6">
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Post Details</span>
                    </div>
                    <div class="space-y-6 px-6 pb-6 w-2/3">
                        <div class="g-recaptcha" id="feedback-recaptcha"
                             data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                        </div> 
                        <button type="submit" class="bg-blue-600 flex justify-center items-center p-1 rounded">
                            <p class="text-xl font-bold text-white">Place Ad Now</p>
                        </button>
                        @foreach($posts as $data)
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Title : <br> {{$data['title']}} </span>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Description : <br> {{$data['description']}}</span>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Contact Email : <br> {{$data['contact_email']}}</span>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Contact mobaile Number : <br> {{$data['mobile_number']}}</span>
                        </div>
                        {{-- <div class="form-group">
                            <label for="exampleInputEmail1"> Image:"{{$data['title']}}"</label>
                            <input method="POST" type="file" id="chooseFile" name="file" accept=".jpg, .jpeg, .png" multiple>
                        </div> --}}
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold"> Category : <br>{{$data['sub_category']}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
    </div>

@endsection
