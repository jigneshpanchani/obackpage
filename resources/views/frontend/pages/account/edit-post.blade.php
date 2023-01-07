@extends('frontend.layout.default')
@section('title', 'Edit Post Form - obackpage')
@section('description', "obackpage is site similar to backpage and the alternative of backpage. People love us as the best backpage replacement or sites similar to backpage.")
@section('keywords', "obackpage, back page, sites similar to backpage, alternative to backpage, sites like backpage and craigslist personals, backpage replacement, backpage substitute, obackpage")
@section('content')

    <div class="flex flex-col z-10 flex-1 w-full">
        <nav class="navbar">
            <div class="flex bg-blue-900 w-full justify-between w-full items-center p-2">
                <div class="flex flex-row items-center justify-start space-x-4">
                    <i class="fa fa-bars openSidebarBtn cursor-pointer" aria-hidden="true"></i>
                    <a href="{{ route('home') }}">
                        <img style="width: 158px; height: 40px; padding-top: 2px;" alt="obackpage" title="obackpage" class="logow" src="https://obackpage.com/assets/frontend/img/logo_white.png">
                    </a>
                </div>
            </div>
        </nav>
        <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
            <div class="flex flex-col">
            <form name="editPostForm" id="editPostForm" method="post" action="{{url('edit-free-ad-post-data', $postId)}}" enctype="multipart/form-data">

                @foreach($posts as $data)
                @csrf
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="{{route('home')}}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i>
                    <a href="{{route('manage-ads')}}"><span class="text-gray-800 text-sm font-bold">My Account</span></a><i class='fa fa-chevron-right'></i>
                    <a href=""><span class="text-gray-800 text-sm font-bold">Edit Post</span></a>
                </div>
                <div class="p-6 space-y-6 bg-white m-6 rounded">

                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Choose locations</span>
                    </div>
                    <div class="flex grid md:grid-cols-3 gap-5 md:gap-10 px-6">
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Continent/Country:</span>
                            <input value=" {{$data['country_name']}}" id="continent_id" name="country_name"  class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Country/State:</span>
                            <input value=" {{$data['state']}}" id="country_state_id" name="state"  class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">City:</span>
                            <input value=" {{$data['city_name']}}" id="city_id" name="city_name"  class="form-control" readonly>
                        </div>
                    </div>
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Choose Category</span>
                    </div>
                    <div class="flex grid md:grid-cols-2 gap-5 md:gap-10 px-6">
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Category:</span>
                            <input value=" {{$data['category']}}" id="category_id" name="category"  class="form-control" readonly>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Sub Category:</span>
                            <input value=" {{$data['sub_category']}}" id="sub_category_id" name="sub_category"  class="form-control" readonly>
                        </div>
                    </div>
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Edit Post Details</span>
                    </div>
                    <div class="space-y-6 px-6 w-full md:w-2/3">

                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Title:</span>
                            <input type="text" value=" {{$data['title']}}" id="title" name="title"  class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Description:</span>
                            <textarea  id = 'ckeditor1'  value=""  name="description" class="form-control">{{ $data['description']}}</textarea>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Age:</span>
                            <input type="text" id="age" value="{{$data['age']}}" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Location:</span>
                            <input type="text" id="location" value="{{$data['location']}}" name="location" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Contact Email:</span>
                            <input type="text" id="contact_email" value="{{$data['contact_email']}}" name="contact_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Contact Mobile Number:</span>
                            <input type="text" id="mobile_number" value="{{$data['mobile_number']}}" name="mobile_number" class="form-control">
                        </div>
                        <div class="form-group space-x-2">
                            <span class="text-gray-800 text-base font-bold">Add Images:</span>
                            <input method="POST" type="file" id="files" name="file[]" accept=".jpg, .jpeg, .png" multiple>
                            <div id='displayUploadedImg' class="flex grid grid-cols-4 gap-10 py-6">
                            </div>

                            <div class="flex grid grid-cols-4 gap-10 py-6">
                                @foreach($postAttechment as $postAttechments)
                                <img src="{{ asset($postAttechments['file_path'])}}" alt="searchIcon" />

                            @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">City:</span>
                            <div class="flex grid grid-cols-4 gap-2" name="city-checkbox" id="city-checkbox">
                            </div>
                        </div>
                        <div class="form-group">
                        <input type="checkbox" id="is_premium_ad" name="is_premium_ad"  value="">
                            <span class="text-gray-700 text-base leading-7 font-semibold">By Placing this ad I agree to the <a href="url">terms of use</a> and <a href="url">privacy policy</a></span>
                        </div>
                        <div class="g-recaptcha" id="feedback-recaptcha"
                                data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                        </div>
                        @endforeach
                        <button type="submit" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                            <p class="text-xl font-bold text-white">Submit</p>
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </main>
    </div>

@endsection
