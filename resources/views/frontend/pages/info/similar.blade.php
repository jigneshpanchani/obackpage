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
                <span class="text-gray-800 text-2xl font-bold">Website similar to backpage</span><br>
                <div class="col-md-12"><br>
                <img src="image.png" class="backgd" title="image.png" alt="image.png">
                <br><br>
                <div class="text-gray-800 text-xl font-bold">What Sets obackpage Apart as a site similar to Backpage</div><br>
                <div class="concls text-sm font-bold">
                    <p>Backpage had been around for years associated had fully grown to become an simple advertising tool till it had been suddenly confiscate. A web site similar to Backpage was what businesses were searching for to stay up with the promotional activities.</p><br>
                    <p>While there have been several <a class="text-gray-700 underline" href="#">site similar to Backpage</a>, obackpage stood out among them giving services that might meet all the advertising wants of growing businesses conversant in Backpage.</p><br>
                    <p>Here square measure some points that place obackpage as a site similar to Backpage.</p><br>

                    <div class="text-gray-800 text-base font-bold">Seamless options</div><br>

                    <p>obackpage, a web site similar to Backpage, is constructed of a similar structure. It offers all a similar options as Backpage adding many advanced one in every of its own to boost your ad posting expertise.</p><br>

                    <div class="text-gray-800 text-base font-bold">Multiple categories &amp; Locations</div><br>

                    <p>Most different Backpage alternatives provide restricted class and site listing. this is often not the case with obackpage. obackpage features a large list of classes and locations that permits you to list your ad to achieve the targeted audience.</p><br>
                    
                    <div class="text-gray-800 text-base font-bold">Security</div><br>

                    <p>The site similar to Backpage additionally ensures information security by eliminating third-party sharing apart from shipping, selling and business wants.</p><br>
                    
                    <div class="text-gray-800 text-base font-bold">Safe Advertising atmosphere</div><br>

                    <p>This Backpage replacement is gaining quality because of the main target on making a secure advertising atmosphere free from legal problems. obackpage promotes legitimate ad postings through its strict structure of rules and rules.</p><br>
                    <p>Hopefully, that answered all of your queries concerning the exceptional web site just like Backpage. If you wish to remain prior the competition, confirm you utilize <a class="text-gray-700 underline" href="#">obackpage</a> to post advertisements.</p><br>
                </div>
                </div>
                </div>

                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
