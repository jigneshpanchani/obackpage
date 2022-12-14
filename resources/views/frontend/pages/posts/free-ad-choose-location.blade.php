@extends('frontend.layout.default')
@section('content')
    <style>
    .widthzero {
        width: 0px;
        /* display: none; */
    }
    .fa-bars{
        font-size: 32px;
        color: #fff;
    }
    .fa-caret-right{
        font-size: 14px;
        color: rgb(82, 79, 79);
    }
    .fa-chevron-right {
        font-size: 14px;
        color: rgb(82, 79, 79);
    }
    .citySidebar ul{
        padding: 0px;
        margin: 0px;
    }
    .citySidebar li {
        margin: 0;
        border-bottom: 1px solid black;
    }
    </style>

    <div class="">
        <div class="flex h-screen" style="background-color: #f1f5f9">
            <div class="citySidebar duration-1000 toggelfilter transition-all flex w-48 bg-white px-0">
                <div class="flex flex-col w-full p-1">
                    <div class="p-6">
                        <a href="{{ route('post-ad') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                            <p class="text-xl font-bold text-white">Post ad</p>
                        </a>
                    </div>
                    <ul class="overflow-y-auto w-full">
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">Home</p>
                                </div>
                            </a>
                        </li>
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">My Account</p>
                                </div>
                            </a>
                        </li>
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">Buy Credits</p>
                                </div>
                            </a>
                        </li>
                        <li class="aside-menu bg-gray-200 p-2">
                            <a href="{{ route('home') }}">
                                <div class="flex justify-center items-center">
                                    <p class="text-gray-800 text-sm font-bold">Logout</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
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
                            <a href="#"><span class="text-gray-800 text-sm font-bold">Home</span></a><i class='fa fa-chevron-right'></i><a href="#"><span class="text-gray-800 text-sm font-bold">Choose locations</span></a>
                        </div>
                        <div id="heading" class="px-6">
                            <span class="text-gray-900 text-2xl font-extrabold">Choose locations</span>
                        </div>
                        <div class="space-y-2 p-6">
                            <form>
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <select class="form-control selectCountry" id="country-dropdown">
                                    <option value="">Select Country</option>
                                    @foreach ($continents as $continent)
                                    <option value="{{$continent['id']}}">
                                    {{$continent['continent']}}
                                    </option>
                                    @endforeach
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="state">State</label>
                                    <select class="form-control" id="state-dropdown">
                                    </select>
                                    </div>
                                    <div class="form-group">
                                    <label for="city">City</label>
                                    <select class="form-control" id="city-dropdown">
                                    </select>
                                </div>
                            </form>
                        </div>
                        {{-- post form  --}}
                            <head>
                                <meta name="csrf-token" content="{{ csrf_token() }}">
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
                            </head>
                            <body>
                                <div class="container mt-4">
                                        @if(session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                    <div class="card">
                                    <div class="card-header text-center font-weight-bold"> Write ad Post</div>
                                    <div class="card-body">
                                        <form name="addform" id="addform" method="post" action="{{url('free-ad-choose-location')}}">
                                        @csrf
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Title:</label>
                                            <input type="text" id="title" name="title" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                            <label for="exampleInputEmail1">Description:</label>
                                            <textarea id="description"  name="description" class="form-control" required=""></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Age:</label>
                                                <input type="text" id="age" name="age" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Location:</label>
                                                <input type="text" id="location" name="location" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Contact Email:</label>
                                                <input type="text" id="contact_email" name="contact_email" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Contact mobaile Number:</label>
                                                <input type="text" id="mobile_number" name="mobile_number" class="form-control" required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Add Image:</label>
                                                <input type="file" id="post_id" name="post_id">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">City:</label>
                                                <input type="checkbox" id="city_id" name="city_id"  value="1">
                                                <label for="city_id">Auburn </label>
                                            </div>
                                            <div class="form-group">
                                            <input type="checkbox" id="is_premium_ad" name="is_premium_ad"  value="">
                                                <label for="is_premium_ad">By Placing this ad I agree to the <a href="url">terms of use</a> and <a href="url">privacy policy</a> </label>
                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                    </div>
                                </div>  
                            </body>


                    </div>
                </main>
            </div>
        </div>
    </div>


@endsection
