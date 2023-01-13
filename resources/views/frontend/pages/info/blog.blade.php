@extends('frontend.layout.home')
@section('title', 'Blog - obackpage.com')
@section('description', "obackpage blog")
@section('keywords', "obackpage blog, obackpage")
@section('content')

    <div class="">
        <div class="flex px-0 xl:px-60">
            <div class="flex flex-col w-full p-4">
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
                                <a href="{{ route('login') }}"><span class="text-sm text-gray-700 font-semibold  dark:text-gray-700 underline">Login / Signup</span></a>
                             
                            @endauth
                        @endif
                    </div>
                </div>
                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900">
                    <div id="items-center justify-start"></div>
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
                <div class="py-6">
                <div class="col-md-12">
                <div class="concls text-sm font-bold">
                <br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('alternative-to-craigslist-personals') }}">Alternative to Craigslist Personals</a></div>
                <br>
                <p>
                    Obackpage is the biggest <a class="text-gray-700 underline" href="{{ route('alternative-to-craigslist-personals') }}">Alternative to Craigslist Personals</a> now! Are trying to find the simplest
                    Craigslist alternative websites? Well, you are not alone! Obackpage is here to make you satisfied like
                    Craigslist Personals. <a class="text-gray-700 underline" href="{{ route('alternative-to-craigslist-personals') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('backpage-alternatives') }}">Backpage Alternatives</a></div>
                <br>
                <p>
                    Do you even know about the <a class="text-gray-700 underline" href="{{ route('backpage-alternatives') }}">Backpage Alternatives?</a> Let’s know about the Backpage Alternative,
                    Alternative to Backpage and Backpage Replacement as well. Obackpage is the biggest Backpage
                    Replacement now I have ever seen! Ask me how? This is your biggest question and your answer is here. <a class="text-gray-700 underline" href="{{ route('backpage-alternatives') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('craigslist-personals') }}">Craigslist Personals</a></div><br>
                <p>
                    Subsequent to the shutdown of the majority of widely used US labeled internet site Craigslist
                    Personals, obackpage launched to restore <a class="text-gray-700 underline" href="{{ route('craigslist-personals') }}">Craigslist Personals</a> classified internet site.
                    Within just days, the Craigslist Personals replacement web site Obackpage became remarkably
                    popular through the duration of the Craigslist Personals group. <a class="text-gray-700 underline" href="{{ route('craigslist-personals') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('similar-to-backpage') }}">Similar to Backpage</a></div><br>
                <p>
                    obackpage is the best site <a class="text-gray-700 underline" href="{{ route('similar-to-backpage') }}">Similar to Backpage</a>. Are trying to find the simplest backpage alternative
                    websites? Well, you are not alone! obackpage is here to make you satisfied like Backpages. Once reigned
                    supreme because the perfect online destination for classified or personal ads, backpage had everything be
                    it electronics, events, vacancy alerts, land , and <a class="text-gray-700 underline" href="{{ route('similar-to-backpage') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('new-backpage') }}">New Backpage</a></div><br>
                <p>
                    What is <a class="text-gray-700 underline" href="{{ route('new-backpage') }}">New Backpage</a> and why? Yes, this is the biggest question of you and your detailed answer is here. After the Backpage Shut Down, obackpage is the Biggest Backpage site. This is aNew Backpage and people are using it as well <a class="text-gray-700 underline" href="{{ route('new-backpage') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('sites-like-craigslis') }}">Sites Like Craigslist</a></div><br>
                <p>
                    <a class="text-gray-700 underline" href="{{ route('sites-like-craigslis') }}">Craigslist</a> proved to be a popular free classified advertising submitting web site in the United States. It launched in 2004 wherever people ended up publishing different type of adverts like real estate, buy/sell/trade marketing products and services, tasks, adult providers, escort advertising etc. <a class="text-gray-700 underline" href="{{ route('sites-like-craigslis') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('top-alternative-to-backpage') }}">Top Alternative to Backpage</a></div><br>
                <p>
                    Do you know about the last Backpage Replacement? obackpage is the biggest Backpage Replacement now! Are you trying to find the simplest backpage alternative websites? Well, you are not alone! obackpage is here to make you satisfied like Backpages. <a class="text-gray-700 underline" href="{{ route('top-alternative-to-backpage') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('new-backpage-replacement') }}">New Backpage Replacement</a></div><br>
                <p>
                    Are you ever known with the <a class="text-gray-700 underline" href="{{ route('new-backpage-replacement') }}">backpage replacement</a>? Exactly! you are listening to the right thing, It’s highly replaced by obackpage! Now this is the biggest platform to make you satisfied like backpages. obackpage is the biggest Backpage Replacement now! <a class="text-gray-700 underline" href="{{ route('new-backpage-replacement') }}">More...</a>
                </p>
                <br><br>
                <div class="text-gray-700 text-2xl font-bold underline"><a href="{{ route('the-best-escort-sites-to-help-you-find-the-perfect-companion') }}">The Best Escort Sites to Help You Find the Perfect Companion</a></div><br>
                <p>
                    Are you looking to find the best escort sites? If so, you've come to the right place! Here are some things to keep in mind as you begin your search for a site that will meet all of your needs and wants. The most important thing to consider when searching for escorts on the internet is whether or not it's safe and reputable. <a class="text-gray-700 underline" href="{{ route('the-best-escort-sites-to-help-you-find-the-perfect-companion') }}">More...</a>
                </p>
                </div>
                </div>
                </div>



                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
