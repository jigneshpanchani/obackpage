@extends('frontend.layout.home')
@section('content')


    <div class="">
        <div class="flex px-60">
            <div class="flex flex-col bg-gray-100  w-full p-4">
                <div class="flex justify-between w-full items-center">
                    <div id="items-center justify-start">
                        <span class="text-4xl italic font-sans font-bold leading-7 text-red-700">o</span><span class="text-4xl italic font-sans font-bold leading-7 text-gray-800">backpage</span>
                    </div>
                    <div class="justify-end">
                        @if (Route::has('login'))
                            @auth
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <a href="{{ route('manage-ads') }}"><span class="text-sm text-gray-700 font-semibold dark:text-gray-700 underline">My Account</span></a>
                                    <button type="submit" class="ml-4 text-sm text-gray-700 font-semibold dark:text-gray-700 underline">Logout</button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"><span class="text-sm text-gray-700 font-semibold  dark:text-gray-700 underline">Log in</span></a>
                                <a href="{{ route('login') }}"><span class="ml-4 text-sm text-gray-700 font-semibold dark:text-gray-700 underline">Register</span></a>
                            @endauth
                        @endif
                    </div>
                </div>
                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900">
                    <div id="items-center justify-start">
                        <span class="text-base font-semibold leading-7 text-gray-900">Choose a location:</span>
                    </div>
                    @if (Route::has('login'))
                        @auth
                            <div class="justify-end">
                                <a href="{{ route('post-ad') }}" class="">
                                    <p class="text-lg text-red-700 font-bold dark:text-red-700 underline">Post ad</p>
                                </a>
                            </div>
                        @else
                            <div class="justify-end">
                                <a href="{{ route('login') }}" class="">
                                    <p class="text-lg text-red-700 font-bold dark:text-red-700 underline">Post ad</p>
                                </a>
                            </div>
                        @endauth
                    @endif
                </div>
                <div class="flex justify-center w-full lg:justify-end mt-4">
                    <div class="w-full">
                        <div class="relative text-gray-500">
                        <div class="absolute inset-y-0 pl-3 flex items-center">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        {{-- <span tabindex="-1" class="bg-white block rounded-md" style="">
                            <input id="search" name="search" class="findStudent block w-full pl-10 pr-3 py-2 findStudent border border-transparent rounded-md leading-5  text-gray-400 focus:ring-0 focus:text-gray-900 sm:text-sm" placeholder="Search Cities" type="text" data-role="autocomplete" autocomplete="off" role="combobox" aria-expanded="false" aria-disabled="false" aria-readonly="false" aria-owns="findStudent_listbox" aria-autocomplete="list" aria-controls="findStudent_listbox" aria-busy="false">
                        </span> --}}
                        <span tabindex="-1" class="bg-white block rounded-md" style="">
                            <input id="search-box" name="search" class="findCity block w-full pl-10 pr-3 py-2 findCity border border-transparent rounded-md leading-5  text-gray-400 focus:ring-0 focus:text-gray-900 sm:text-sm" placeholder="Search Cities" type="search" data-role="autocomplete" autocomplete="off" role="combobox" aria-expanded="false" aria-disabled="false" aria-readonly="false" aria-owns="findCity_listbox" aria-autocomplete="list" aria-controls="findCity_listbox" aria-busy="false">
                            <div id="suggesstion-box" class="text-gray-700 text-base"></div>
                            {{-- @foreach($city as $city)
                               <a href="{{ route('category', $city['id'] ) }}"></a>
                            @endforeach --}}
                        </span>
                        </div>
                    </div>
                </div>
                @php
                    $i = 0;
                @endphp
                <div class="flex grid grid-cols-2 space-x-4 mt-4">
                    @foreach($continents as $country)
                        @if($i == 0)
                            <div class="">
                                <div class="bg-blue-900 rounded p-1 text-center">
                                    <span class="text-white text-xl px-2 font-bold leading-7">{{  $country['continent'] }}<br/></span>
                                </div>
                                <div class="flex grid grid-cols-3 p-2">
                                    @php
                                    $stateData = array_chunk($country['state'],(count($country['state']) / 3));
                                    @endphp
                                    @foreach($stateData as $states)
                                        <div class="">
                                            @foreach($states as $state)
                                                <span class="text-red-700 text-base font-bold">{{  $state['country_state'] }}<br/></span>
                                                @foreach($state['city'] as $city)
                                                <div class="px-2">
                                                    <a href="{{ route('category', $city['id'] ) }}"><span class="text-gray-700 text-sm font-semibold underline">{{  $city['city'] }}</span><br/></a>
                                                </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @else
                            @if($i == 1)<div class="space-y-2">@endif
                                <div class="bg-blue-900 rounded p-1 text-center">
                                    <span class="text-white text-xl px-2 font-bold leading-7">{{  $country['continent'] }}<br/></span>
                                </div>
                                <div class="flex grid grid-cols-3 p-2">
                                    @php
                                    $stateData = array_chunk($country['state'], (count($country['state']) / 2.5));

                                    @endphp
                                    @foreach($stateData as $states)
                                        <div class="">
                                            @foreach($states as $state)
                                                <span class="text-red-700 text-base font-bold">{{  $state['country_state'] }}<br/></span>
                                                @foreach($state['city'] as $city)
                                                    <div class="px-2">
                                                        <a href="{{ route('category', $city['id'] ) }}"><span class="text-gray-700 text-sm font-semibold underline">{{  $city['city'] }}</span><br/></a>
                                                    </div>
                                                @endforeach
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                                @if($i == count($continents)) </div> @endif
                        @endif
                        @php $i++; @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="concls text-sm bg-gray-200 w-full py-2 px-10 font-semibold">
        {{-- <div class="concls text-sm"> --}}
            <div class="font-bold text-base py-2">Are you a service provider trying to find the best classified site?</div>
            <p>If you're a worldwide service provider and in sorting out one among the most <a class="font-bold">Free Classified Sites</a> within the world, you're at the proper place. For growing your business and taking it to a full new level, put up for sale on the <a class="font-bold">obackpage</a>. this fashion you'll be able to connect together with your target market and simply get business on-line.</p>
            <p>obackpage is one among the foremost sought-after <a class="font-bold">free local classified sites</a>. Our key objective helps the entrepreneurs to come back up-to-date with the web patrons and sellers. we tend to welcome advertisements from our customers on any subject like personal ads, electronics, cars, clothing, piece of furniture etc. you'll be able to submit your advertisements completely free on our web site when you produce associate degree account. obackpage can assist you in promoting your complete in an efficient approach</p>
            <p>The goal of obackpage is to please our users with our skilled services. we have a tendency to worth our relationship with our users. Our purpose is to satisfy the advertising necessities of our users by providing them with all the <a class="font-bold text-red-700 underline" href="#">Craigslist Personals</a> solutions in one place.
                obackpage permits several service suppliers and business house owners to attach, with the utilization of sensible technology and experience. provide on-line visibility to your work with obackpage. Emerge as an outsized business by building the trust of shoppers. Grow your profile in order that your shoppers will perceive you higher. Reach real customers curious about your services.
                In today’s world, each business is competitive  laborious to achieve the highest. Why must you keep behind? Reach several prospective customers across the world on obackpage. we have a tendency to area unit one in all the <a class="font-bold">Top free classified sites</a> in Asia, Australia and Europe wherever business house owners will post advertisements for his or her product freed from price. you'll be able to list your services during a big selection of service classes like article of furniture, healthcare, interior designers, packers & movers, etc.
                You can check in on obackpage and start exploring. Handle your business effectively – offer your details, publish photos, contact details, and far additional. you'll be able to connect with potential customers United Nations agency would like your services at this best classified web site. Reach them quickly to grow your business at a quicker rate.</p>
            <p>First of all, produce your account on the obackpage for reaching intent on the potential customers. Once your profile is made you'll be able to simply bear your ‘business page’ and thereby simply update photos, business data, contact details, services offered map location etc. At our <a class="font-bold text-red-700 underline" href="#">Craigslist Personals</a> alternative within the world, it will be potential for you to attach with the verified customers UN agency will quickly respond and thereby facilitate within the quick growth of your business.</p>
            <br>
            <div class="font-bold text-base py-2">Why select obackpage?</div>
            <ol>
                <li>
                    <div class="font-bold text-grey-700 py-2">&emsp;1.&emsp;Best place in brand awareness</div>
                    <div class="px-10"><p>obackpage is among <a class="font-bold">best classified sites</a> within the world for raising awareness and making complete recognition among the shoppers by making the business image. With the assistance of obackpage, facilitate your complete in reaching the ‘target audience’ easier and quicker compared to different standard advertisements.</p></div>
                </li>
                <li>
                    <div class="font-bold text-grey-700 py-2">&emsp;2.&emsp;Easy to find potential customers</div>
                    <div class="px-10"><p>obackpage offers you one ideal platform for reaching intent on many shoppers on-line. we tend to assist in displaying your platform during a great way. several service suppliers have already been exploitation our <a class="font-bold">free classified site</a> for growing and managing their business.</p></div>
                </li>
                <li>
                    <div class="font-bold text-grey-700 py-2">&emsp;3.&emsp;Collect more leads</div>
                    <div class="px-10"><p>Getting individuals to understand concerning your business may be worn out the most effective means through classified advertisements on obackpage. we have a tendency to assist you to succeed in your potential customers. you'll be able to generate leads for your business by <a class="font-bold">posting free classified ads</a> here.</p></div>
                </li>
                <li>
                    <div class="font-bold text-grey-700 py-2">&emsp;4.&emsp;More reach</div>
                    <div class="px-10"><p>obackpage provides you with the most effective platform to succeed in resolute innumerable on-line customers. we tend to facilitate to show your business in an efficient manner. many service suppliers have seen large growth in their business with the assistance of <a class="font-bold">free classified site</a>.</p></div>
                </li>
                <li>
                    <div class="font-bold text-grey-700 py-2">&emsp;5.&emsp;Grow-up your business</div>
                    <div class="px-10"><p><a class="font-bold">Free classified ads</a> sites area unit a good thanks to take the business to succeeding level and a crucial a part of the digital selling strategy of the many businesses. It ends up in quality leads and provides a lift in programme rankings.</p></div>
                </li>
            </ol>
            <div class="font-bold text-base py-2">What will we tend to do for you?</div>
            <P>obackpage allows you to publish classified advertisements for marketing or shopping for any product or services. you wish to register yourself on our web site post that you'll publish your ads. obackpage provides completely different forms of sales promotions to pick out from which provides U.S.A. an additional edge over alternative <a class="font-bold">free classified sites</a>. you'll post your ad at zero price and refine them per the placement and class of your selection. obackpage displays your ads to users United Nations agency ar trying to find your product and services.</P>
            <div class="font-bold text-base py-2">Pros of Associating with obackpage</div>
            <ul style="margin-left: 25px">
                <li>&emsp;•&emsp;Credible, specific and authentic advertisements</li>
                <li>&emsp;•&emsp;untroubled procedure to post free sales promotions</li>
                <li>&emsp;•&emsp;Seamless functionalities for aiding users</li>
                <li>&emsp;•&emsp;Commendable client support team round the clock</li>
                <li>&emsp;•&emsp;C User-oriented interface for a profitable expertise</li>
            </ul><br>
            <div class="font-bold text-base py-2">Why do you have to trust obackpage?</div>
            <ul style="margin-left: 25px">
                <li>&emsp;•&emsp;It possesses a rank among the highest one hundred Directory Sites within the USA.</li>
                <li>&emsp;•&emsp;The efficient approach of posting ads on obackpage saves you heaps of your time and cash within the long-term.</li>
                <li>&emsp;•&emsp;We tend to verify each ad that folks post on our web site to visualize its legitimacy.</li>
            </ul><br>
            <div class="font-bold text-base py-2">obackpage – An Effective Solution</div>
            <p>obackpage may be a client-oriented <a class="font-bold">alternative to backpage</a> about to offer AN all-in-one platform for the users to post free ads. There ar such a lot of <a class="font-bold">sites like backpage</a> however obackpage emerges because the better of all as a result of what we provide to our users. sign on to post your ad on obackpage and reach your customers quickly.</p>
            <br>
            <div class="font-bold text-base py-2">Backpage alternative sites</div>
            <p>obackpage.com is that the replacement for backpage wherever you'll post free classified advertisements to push your businesses or services on the net. Thousands of normal users ar mistreatment the particular #1 <a class="font-bold text-red-700 underline" href="#">backpage replacement</a> web site, obackpage classifieds to post free classified advertisements. As associate degree alternative to backpage, obackpage feels and seems specifically just like the original backpage.com.</p>
            <p>The <a class="font-bold">backpage classified alternative</a> web site obackpage brought the backpage community back on-line by permitting them to post free classified advertisements. you're currently able to post free classified advertisements in multiple classes & cities, a bit like the first backpage!</p>
            <p>Backpage was the foremost widespread free newspaper ad posting web site within the US, the same as Craigslist. sadly, United States close up backpage classified web site within the early 2019 for SESTA/FOSTA legislation & allegation of sex trafficking advertisements in its <a class="font-bold">adult classified section</a>. when the ending of most well-liked US classified web site backpage.com, obackpage classified launched to interchange backpage as a classified web site. among days, the <a class="font-bold text-red-700 underline" href="#">backpage alternative website</a> obackpage became very hip among the backpage newspaper advertisement users.</p>
            <p>Thousands of free classified advertisements ar being denote on obackpage classified everyday as a <a class="font-bold">backpage personals classified website</a>. regardless of what you're trying to find, you may realize many classified advertisements denote in your town, in obackpage ads. All you've got to try to to is to pick your location category/sub-category to search out the most effective deals offered by obackpage classified advertisers.</p>
            <p>If you've got been sorting out associate degree <a class="font-bold">alternative to backpage</a>, you've got found the <a class="font-bold">best backpage alternative</a> and <a class="font-bold">craigslist personals alternative website</a>, obackpage classified. begin a free obackpage account nowadays and begin posting your classified advertisements on the most effective backpage various web site, obackpage!</p>
        {{-- </div> --}}
    </div>

    <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

@endsection
