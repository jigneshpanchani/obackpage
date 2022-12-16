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
            <form name="addform" id="addform" method="post" action="{{url('free-ad-post')}}" enctype="multipart/form-data">
                @csrf
                <div id="cookieCrumb" class="space-x-2 p-6">
                    <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a>
                </div>
                <div class="px-6 space-y-6">
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Choose locations</span>
                    </div>
                    <div class="flex grid grid-cols-3 gap-10 px-6">
                        <div class="form-group">
                            <span for="country" class="text-gray-800 text-base font-bold">Continent/Country</span>
                            <select class="form-control selectCountry" id="country-dropdown">
                                @foreach ($continents as $continent)
                                <option value="{{$continent['id']}}" class="text-gray-700 text-base leading-7 font-semibold">
                                {{$continent['continent']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group selectstate">
                            <span for="state" class="text-gray-800 text-base font-bold">Country/State</span>
                            <select class="form-control state" id="state-dropdown">
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="city" class="text-gray-800 text-base font-bold">City</span>
                            <select class="form-control" id="city-dropdown">
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Choose Category</span>
                    </div>
                    <div class="flex grid grid-cols-2 gap-10 px-6">
                        <div class="form-group">
                            <span for="country" class="text-gray-800 text-base font-bold">Category</span>
                            <select class="form-control selectCategory" id="category-dropdown">
                                @foreach ($categories as $category)
                                <option value="{{$category['id']}}" class="text-gray-700 text-base leading-7 font-semibold">
                                {{$category['category']}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <span for="city" class="text-gray-800 text-base font-bold">Sub-Category</span>
                            <select class="form-control" id="sub-category-dropdown">
                            </select>
                        </div>
                    </div>
                    <div class="">
                        <span class="text-red-900 text-xl font-bold">Post Details</span>
                    </div>
                    <div class="space-y-6 px-6 pb-6 w-2/3">
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Title:</span>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Description:</span>
                            <textarea id="description h-40"  name="description" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Age:</span>
                            <input type="text" id="age" name="age" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Location:</span>
                            <input type="text" id="location" name="location" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Contact Email:</span>
                            <input type="text" id="contact_email" name="contact_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">Contact Mobile Number:</span>
                            <input type="text" id="mobile_number" name="mobile_number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Add Image:</label>
                            <input method="POST" type="file" id="files" name="file[]" accept=".jpg, .jpeg, .png" multiple>
                            <div id='displayUploadedImg' class="flex grid grid-cols-4 gap-10 py-6">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="text-gray-800 text-base font-bold">City:</span>
                            <input type="checkbox" id="city_id" name="city_id"  value="1">
                            <span class="text-gray-800 text-base font-bold" for="city_id">Auburn </span>
                        </div>
                        <div class="form-group">
                        <input type="checkbox" id="is_premium_ad" name="is_premium_ad"  value="">
                            <span class="text-gray-700 text-base leading-7 font-semibold">By Placing this ad I agree to the <a href="url">terms of use</a> and <a href="url">privacy policy</a></span>
                        </div>
                        <div class="g-recaptcha" id="feedback-recaptcha"
                                data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}">
                        </div>
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
