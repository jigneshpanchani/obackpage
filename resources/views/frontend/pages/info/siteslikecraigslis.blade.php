@extends('frontend.layout.home')
@section('title', 'Sites Like Craigslist - obackpage.com')
@section('description', "obackpage.com is the best replacement of backpage. If you have any queries related to this site then visit contact us page and contact to our customer support team.")
@section('keywords', "contct us,obackpage")
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

                <div class="col-md-12">
                    <div class="flex justify-center p-4"><span class="text-gray-800 text-2xl font-bold">Sites Like Craigslist</span></div>
                    <div class="flex justify-between w-full items-center border-b-2 border-gray-400"></div><br>
                    <div class="concls text-sm font-bold">
                        <div class="font-bold text-xl">What are the Best sites like craigslist?</div>
                        <br>
                        <p>
                            Craigslist proved to be a popular free classified advertising submitting web site in the United States. It launched in 2004 wherever people ended up publishing different type of adverts like real estate, buy/sell/trade marketing products and services, tasks, adult providers, escort advertising etc.. At the close of 2011, Craigslist internet site became the 2nd largest free classified advertising putting up web site from the united states of america. The simple ad conveying process along with user friendly interface manufactured this web site therefore much popular among the end users from all over the globe especially from the United States ofAmerica, Canada, Australia and uk.
                        </p>
                        <br>
                        <p>
                            Regrettably, US federal government closed down Craigslist web site from early 2018 for SESTA/FOSTA legislation & allegation of sex trafficking advertisements within its own mature department. Owing to the, the end users of back page web site were no longer able to place their totally free classified ads on this popular classified internet site. To continue advertising to promoting their services and businesses on the web, Craigslist customers were forced to look for different sites. In all honesty, you will find a lot of Craigslist other sites due to the fact 2018 wherever users can place their own completely free classified advertisements. One of each one these backpage alternative sites or similar to Craigslist internet sites, just few Craigslist replacement sites on the market that are actually bringing success to the advertisement posters.To list a couple websites such as Craigslist categorize dor other to Craigslist web site would be: Craigslist, GumTree, obackpage Classifieds, Geebo, eBackpage, OLX, One Craigslist, classified-ads, Bedpage Classifieds, Oddle, Craigslist, Tryst, iBackpage, Eros, New Backpage etc..The majority of those Craigslist other web sites permit one to place your classified advertisements for free from various categories and subcategories but due to the usa legislation,just a few Craigslist replacement web sites continue to be offering mature part! Adult dating and services agencies were the very widely used element of back page classifieds and people were mainly using Craigslist for its mature services department along with dating services department. As a way to function as the ideal backpage alternative web sites in 2018-2020, it has to need to have adult dating & services services department similar to Craigslist classifieds.In the event you explore somewhat inside the web,you'll discover the authentic <a class="text-gray-700 underline" href="{{ route('backpage-replacement') }}">backpage replacement</a> and the very best back page alternative internet site due to the fact 2018 may be your obackpage classifieds due to its user-friendly interface and basic advertisement uploading procedure like craigslist.com. obackpage free classified website appears and appears exactly like the craigslist.com classified website and the practice of posting finding & advertisements localized offers will be as same as the back page classified internet site. Contrary to other like Craigslist sites, <a class="font-bold">obackpage</a> includes a very wholesome adult services section along with dating services section and each these factors are making <a class="font-bold">obackpage</a> classified the optimal/optimally Craigslist other website due to the fact 2018.
                        </p>
                    </div>
                </div>
                <br><div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>
            </div>
        </div>
    </div>

@endsection
