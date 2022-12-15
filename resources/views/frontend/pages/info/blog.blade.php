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
                <div class="col-md-12">
                <div class="concls text-sm font-bold">
                <br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">Alternative to Craigslist Personals</a></div>
                <br>
                <p>
                    Obackpage is the biggest <a class="text-gray-700 underline" href="#">Alternative to Craigslist Personals</a> now! Are trying to find the simplest
                    Craigslist alternative websites? Well, you are not alone! Obackpage is here to make you satisfied like
                    Craigslist Personals. <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">Backpage Alternatives</a></div>
                <br>
                <p>
                    Do you even know about the <a class="text-gray-700 underline" href="#">Backpage Alternatives?</a> Let’s know about the Backpage Alternative,
                    Alternative to Backpage and Backpage Replacement as well. Obackpage is the biggest Backpage
                    Replacement now I have ever seen! Ask me how? This is your biggest question and your answer is here. <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">Craigslist Personals</a></div><br>
                <p>
                    Subsequent to the shutdown of the majority of widely used US labeled internet site Craigslist
                    Personals, obackpage launched to restore <a class="text-gray-700 underline" href="#">Craigslist Personals</a> classified internet site.
                    Within just days, the Craigslist Personals replacement web site Obackpage became remarkably
                    popular through the duration of the Craigslist Personals group. <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">Similar to Backpage</a></div><br>
                <p>
                    obackpage is the best site Similar to Backpage. Are trying to find the simplest backpage alternative
                    websites? Well, you are not alone! obackpage is here to make you satisfied like Backpages. Once reigned
                    supreme because the perfect online destination for classified or personal ads, backpage had everything be
                    it electronics, events, vacancy alerts, land , and <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">New Backpage</a></div><br>
                <p>
                       What is New Backpage and why? Yes, this is the biggest question of you and your detailed answer is here. After the Backpage Shut Down, obackpage is the Biggest Backpage site. This is aNew Backpage and people are using it as well <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">Sites Like Craigslist</a></div><br>
                <p>
                    <strong>Craigslist</strong> proved to be a popular free classified advertising submitting web site in the United States. It launched in 2004 wherever people ended up publishing different type of adverts like real estate, buy/sell/trade marketing products and services, tasks, adult providers, escort advertising etc. <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">Top Alternative to Backpage</a></div><br>
                <p>
                    Do you know about the last Backpage Replacement? obackpage is the biggest Backpage Replacement now! Are you trying to find the simplest backpage alternative websites? Well, you are not alone! obackpage is here to make you satisfied like Backpages. <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">New Backpage Replacement</a></div><br>
                <p>
                    Are you ever known with the backpage replacement? Exactly! you are listening to the right thing, It’s highly replaced by obackpage! Now this is the biggest platform to make you satisfied like backpages. obackpage is the biggest Backpage Replacement now! <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                <br><br>
                <div class="text-gray-800 text-2xl font-bold"><a href="#">The Best Escort Sites to Help You Find the Perfect Companion</a></div><br>
                <p>
                    Are you looking to find the best escort sites? If so, you've come to the right place! Here are some things to keep in mind as you begin your search for a site that will meet all of your needs and wants. The most important thing to consider when searching for escorts on the internet is whether or not it's safe and reputable. <a class="text-gray-700 underline" href="#">More...</a>
                </p>
                </div>
                </div>
                </div>



                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
