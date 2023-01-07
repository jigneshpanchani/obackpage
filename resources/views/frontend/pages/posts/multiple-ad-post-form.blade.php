@extends('frontend.layout.default')
@section('title', 'Ad Post Form - obackpage')
@section('description', "obackpage is site similar to backpage and the alternative of backpage. People love us as the best backpage replacement or sites similar to backpage.")
@section('keywords', "obackpage, back page, sites similar to backpage, alternative to backpage, sites like backpage and craigslist personals, backpage replacement, backpage substitute, obackpage")
@section('content')

<style>
.dropdown-check-list {
  display: inline-block;
}
.overSelect {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}

.showMutipleDropDown{
    display: block !important;
}
/* //double */

.selectStateBox {
  position: relative;
}

.selectStateBox select {
  width: 100%;
  font-weight: bold;
}

#statecheckboxes {
  display: none;
  border: 1px #dadada solid;
}

#statecheckboxes label {
  display: block;
}

#statecheckboxes label:hover {
  background-color: #1e90ff;
}

/* city */
.selectCityBox {
  position: relative;
}

.selectCityBox select {
  width: 100%;
  font-weight: bold;
}

#citycheckboxes {
  display: none;
  border: 1px #dadada solid;
}

#citycheckboxes label {
  display: block;
}

#citycheckboxes label:hover {
  background-color: #1e90ff;
}
</style>

<div class="flex flex-col z-10 flex-1 w-full">
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
        <form name="addform" id="addform" method="post" action="{{url('multiple-ad-post')}}" enctype="multipart/form-data">
            @csrf
            <div id="cookieCrumb" class="space-x-2 p-6">
                <a href="{{ route('home') }}"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i>
                <a href="{{ route('post-ad') }}"><span class="text-gray-800 text-sm font-bold">Post Ad</span></a><i class='fa fa-chevron-right'></i>
                <a href=""><span class="text-gray-800 text-sm font-bold">Multiple Ad</span></a>
            </div>
            <div id="heading" class="px-6">
                <span class="text-gray-900 text-2xl font-extrabold">Multiple Ad</span>
            </div>
            <div class="p-6 space-y-6 bg-white m-6 rounded">
                <div class="">
                    <span class="text-red-900 text-xl font-bold">Choose locations</span>
                </div>
                <div class="flex grid md:grid-cols-2 gap-5 md:gap-10 px-6">
                    <div class="form-group">
                        <span for="country" class="text-gray-800 text-base font-bold">Continent/Country</span>
                        <select class="form-control selectCountry" name="continent_id" id="country-dropdown">
                            @foreach ($continents as $continent)
                            <option value="{{$continent['id']}}" class="text-gray-700 text-base leading-7 font-semibold">
                            {{$continent['continent']}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group selectstate">
                        <span for="state" class="text-gray-800 text-base font-bold">Country/State</span>
                        <div class="selectStateBox">
                            <select class="form-control" name="" id="state-dropdown">
                                <option class="text-gray-700 text-base leading-7 font-semibold">Select Country/State</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div id="statecheckboxes" class="absolute hidden bg-white text-base w-2/5 overflow-y-auto max-h-60">
                        </div>
                    </div>
                    {{-- <div class="form-group">
                        <span for="state" class="text-gray-800 text-base font-bold">City</span>
                        <div class="selectCityBox">
                            <select class="form-control" name="city_id" id="city-dropdown">
                                <option class="text-gray-700 text-base leading-7 font-semibold">Select city</option>
                            </select>
                            <div class="overSelect"></div>
                        </div>
                        <div id="citycheckboxes" class="bg-white text-base w-2/2 overflow-y-auto max-h-60">
                        </div>
                    </div> --}}
                </div>
                <div class="form-group px-6">
                    <span class="text-gray-800 text-base font-bold">City : $</span><span class="text-gray-800 text-base font-bold"  id="totla__amount"></span>
                        <input type="hidden" name="totla__amount_value" id="totla__amount_value" />
                        <div class="flex grid  sm:grid-cols-2  md:grid-cols-3 lg:grid-cols-5 gap-2" id="city-checkbox">

                    </div>
                </div>
                <div class="">
                    <span class="text-red-900 text-xl font-bold">Choose Category</span>
                </div>
                <div class="flex grid md:grid-cols-2 gap-5 md:gap-10 px-6">
                    <div class="form-group">
                        <span for="country" class="text-gray-800 text-base font-bold">Category</span>
                        <select class="form-control selectCategory" name="category_id" id="category-dropdown">
                            @foreach ($categories as $category)
                            <option value="{{$category['id']}}" class="text-gray-700 text-base leading-7 font-semibold">
                            {{$category['category']}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <span for="city" class="text-gray-800 text-base font-bold">Sub-Category</span>
                        <select class="form-control" name="sub_category_id" id="sub-category-dropdown">
                        </select>
                    </div>
                </div>
                <div class="">
                    <span class="text-red-900 text-xl font-bold">Post Details</span>
                </div>
                <div class="space-y-6 px-6 w-full md:w-2/3">
                    <div class="form-group">
                        <span class="text-gray-800 text-base font-bold">Title:</span>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                        <span class="text-gray-800 text-base font-bold">Description:</span>
                        <textarea id="ckeditor4"  name="description" class="form-control"></textarea>
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
                    <div class="form-group space-x-2">
                        <span class="text-gray-800 text-base font-bold">Add Images:</span>
                        <input method="POST" type="file" id="files" name="file[]" accept=".jpg, .jpeg, .png" multiple>
                        <div id='displayUploadedImg' class="flex grid grid-cols-4 gap-10 py-6">
                        </div>
                    </div>
                </div>
                <div class="">
                    <span class="text-red-900 text-xl font-bold">Premium Ads Future</span>
                </div>
                <div class="space-y-6 px-6 pb-6">
                    <div class="form-group">
                        <span class="text-gray-800 text-lg font-bold">Premium Ads :</span>
                        <div class="space-x-2">
                            <input type="checkbox" id="is_premium_ad" name="is_premium_ad"  value="">
                            <span class="text-gray-800 text-base leading-7 font-semibold"> Make this ad Premium for ( Premium ad will be shown on top of all Ads. ) $4 </span>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="text-gray-800 text-lg font-bold">Sponsor Ads :</span>
                        <div class="space-x-2 flex flex-col">
                            <span class="text-gray-800 text-sm leading-6 font-semibold"> Your ad will appear highlighted (Top and Bottom).</span>
                            <span class="text-gray-800 text-base leading-7 font-semibold"> Number of weeks: 1 week ($2)</span>
                        </div>
                    </div>
                    <div class="form-group space-x-2">
                        <input type="checkbox" id="" name=""  value="">
                        <span class="text-gray-800 text-base leading-7 font-semibold">By Placing this ad I agree to the <a href="url">terms of use</a> and <a href="url">privacy policy</a></span>
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
