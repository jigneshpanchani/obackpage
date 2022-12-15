@extends('frontend.layout.home')
@section('content')

    <div class="">
        <div class="flex px-60">
            <div class="flex flex-col w-full p-4">
                <div class="flex justify-between w-full items-center">
                    <div id="items-center justify-start">
                        <span class="text-4xl italic font-sans font-bold leading-7 text-red-700">o</span><span class="text-4xl italic font-sans font-bold leading-7 text-gray-800">backpage</span>
                    </div>
                    <div class="justify-end">
                        @if (Route::has('login'))
                            @auth
                                <a href="{{ url('/dashboard') }}"><span class="text-sm text-gray-700 font-semibold dark:text-gray-700 underline">Dashboard</span></a>
                            @else
                                <a href="{{ route('login') }}"><span class="text-sm text-gray-700 font-semibold  dark:text-gray-700 underline">Log in</span></a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"><span class="ml-4 text-sm text-gray-700 font-semibold dark:text-gray-700 underline">Register</span></a>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900">
                    <div id="items-center justify-start"></div>
                    <div class="justify-end">
                        <a href="{{ url('/dashboard') }}"><span class="text-lg text-red-700 font-bold dark:text-red-700 underline">Post Ad</span></a>
                    </div>
                </div>

                <div class="py-6">
                    <span class="text-gray-800 text-2xl font-bold">Contact Us</span>
                <div class="col-md-12"><br>
                <div class="concls text-sm font-bold">

                    <br>
                    <p>We're Always Happy to Hear From You. let us know what we can do for you! obackpage customer support is available free of charge. 24/7/365 Support Means We're Always Available To Help !!!</p><br>
                    <div class="font-bold">Live Chat</div><br>
                        <p>Our live representatives are available 24/7 to assist you with any and all questions you may have.</p><br>

                        <div class="font-bold">Contact Us</div><br>
                        <b>OBACKPAGE CLASSIFIEDS PVT LTD</b>
                        <div class="full-width-xs col-xs-5 col-sm-12 col-md-5"><span class="blue-bold ph-type"><b>Email - obackpage@yahoo.com</b></span></div>
                    </div>
                </div>
                </div>

                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
