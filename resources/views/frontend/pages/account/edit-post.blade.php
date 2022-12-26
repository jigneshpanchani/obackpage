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
            <form name="editPostForm" id="editPostForm" method="post" action="{{url('edit-free-ad-post-data', $postId)}}" enctype="multipart/form-data">

                @foreach($posts as $data)
                @csrf
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                </div>
                <div class="p-6 space-y-6 bg-white m-6 rounded">
                  
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Choose locations</span>
                    </div>
                    <div class="flex grid grid-cols-3 gap-10 px-6">
                        <div class="form-group">
                            <span for="country" class="text-gray-800 text-base font-bold">Continent/Country</span>
                            <select class="form-control  selectCountry"   value="{{(empty($data['continent_id']) ? null : $data['continent_id'])}}"  name="continent_id" id="country-dropdown" selected : {{$data['continent_id']}} >
                                @foreach ($continents as $continent)
                                <option value="{{$continent['id']}} " class="text-gray-700 text-base leading-7 font-semibold"  >
                                {{$continent['continent']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group selectstate">
                            <span for="state" class="text-gray-800 text-base font-bold">Country/State</span>
                            <select class="form-control state" value="{{$data['country_state_id']}}" name="country_state_id" id="state-dropdown" >
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="city" class="text-gray-800 text-base font-bold">City</span>
                            <select class="form-control" value="{{$data['city_id']}}" name="city_id" id="city-dropdown"  >
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Choose Category</span>
                    </div>
                    <div class="flex grid grid-cols-2 gap-10 px-6">
                        <div class="form-group">
                            <span for="country" class="text-gray-800 text-base font-bold">Category</span>
                            <select class="form-control selectCategory"  value="{{(empty($data['category_id']) ? null : $data['category_id'])}}" name="category_id"  id="category-dropdown">
                                @foreach ($categories as $category)
                                <option value=" {{$category['id']}}"  {{$category['category']}} class="text-gray-700 text-base leading-7 font-semibold" >
                                {{$category['category']}}
                                </option>
                                @endforeach
                            </select>
                            
                        </div>
                        <div class="form-group">
                            <span for="city" class="text-gray-800 text-base font-bold">Sub-Category</span>
                            <select class="form-control" value="{{$data['sub_category']}}"  name="sub_category_id" id="sub-category-dropdown" >
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Post Details</span>
                    </div>
                    <div class="space-y-6 px-6 pb-6 w-2/3">
                     
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
                            @foreach($postAttechment as $postAttechments)
                            <div class="flex">
                                <img src="{{ asset($postAttechments['file_path'])}}" alt="searchIcon" />
                            </div>
                            @endforeach
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
