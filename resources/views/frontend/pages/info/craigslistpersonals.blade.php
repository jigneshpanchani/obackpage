@extends('frontend.layout.home')
@section('title', 'Craigslist Personals - obackpage.com')
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
                                <a href="{{ route('login') }}"><span class="text-sm text-gray-700 font-semibold  dark:text-gray-700 underline">Log in</span></a>
                              
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
                    <div class="flex justify-center p-4"><span class="text-gray-800 text-2xl font-bold">Craigslist Personals</span></div>
                    <div class="flex justify-between w-full items-center border-b-2 border-gray-400"></div><br>
                    <div class="concls text-sm font-bold">
                        <div class="font-bold text-xl">Why obackpage is considered as the best alternative to Craigslist Personals?</div>
                        <br>
                        <p>
                            Subsequent to the shutdown of the majority of widely used US labeled internet site Craigslist
                            Personals, obackpage launched to restore <a class="text-gray-700 underline" href="{{ route('craigslist-personals') }}">Craigslist Personals</a> classified internet site.
                            Within just days, the Craigslist Personals replacement web site obackpage became remarkably
                            popular through the duration of the Craigslist Personals group. Countless back page users
                            started to utilize this number-one back page replacement web site, obackpage classifieds to
                            post absolutely free advertising. <a class="text-gray-700 underline" href="{{ route('home') }}">obackpage</a> Classifieds attracted the Craigslist Personals
                            community back online by allowing them to post totally free classified advertisements again in
                            multiple categories & cities just enjoy the first Craigslist Personals website. Comparable to back
                            page classifieds, most folks can post and publish their own totally free classified advertisements
                            within a matter of seconds in this fresh back page alternative internet site: obackpage
                            classifieds. <a class="text-gray-700 underline" href="{{ route('home') }}">obackpage</a> classifieds gets each of the categories and subcategories which you're
                            visiting from the Craigslist Personals website. Thanks to getting a great deal of real and traffic
                            advertisement posters similar to Craigslist Personals web site, obackpage has launched itself as
                            the main <a class="text-gray-700 underline" href="{{ route('alternative-to-backpage') }}">Backpage Alternative Websites</a> from 2018-2020 and folks consider obackpage as
                            the newest back page replacement website where anyone may promote their services and
                            businesses free of charge.
                        </p>
                        <br>
                        <div class="font-bold text-xl">Why do people love to use Obackpage (as a Craigslist Personals alternative) classifieds?</div>
                        <br>
                        <p>
                            Individuals from all over the globe were utilizing the exact Craigslist Personals classified website
                            to article different sort of ads like real estate listing, job ads, land for buy/sale etc.. But the most
                            widely used sections of Craigslist Personals classifieds were both adult services and dating
                            agencies and also people were chiefly seeing <a class="text-gray-700 underline" href="{{ route('craigslist-personals') }}">Craigslist Personals</a> to locate adult dating or
                            services agencies related offers. Comparable to back page classifieds, most individuals are
                            largely utilizing <a class="font-bold">obackpage</a> classifieds to discover local dating companies or adult products
                            and services related advertising. Obackpage is allowing the back page customers to find different
                            sort of adult services adverts like female escorts advertisements, body rubs advertisements, male
                            escorts, transsexual advertising, strippers and strip clubs, mature jobs and a lot more. If you are
                            a different female escort seeking to promote your products and services on line then obackpage
                            will be your ideal place at which you will have most attention out of the back page users that are
                            making an effort to get a lovely feminine escort to meet their sexual desires. Even the escort
                            companies are also employing obackpage classifieds to listing their escort advertisements to
                            get clients for their escort providers. Body rubs shops find obackpage quite beneficial to get to
                            thousands of persons and possible customers for their body rubs outlets by submitting
                            advertisements in obackpage human body rubs area. Alternatively of publishing human body
                            rub services in local newspaper, obackpage can be a more economical and efficacious approach
                            to boost human body presses linked services at the neighborhood. Both separate body rub body
                            and providers beverage shopowners from all around the earth use this obackpage classifieds
                            and effectively promoting their businesses and services. It's always difficult to find excellent
                            strippers and strip clubs nearby however with <a class="font-bold">obackpage</a>, you are able to readily locate well
                            trained strippers towards you personally and strip nightclubs located nearby. Each strippers and
                            strip club owners have been advertising their own services in obackpage classifieds in a
                            regular basis. Perhaps not just feminine escorts are advertisements in obackpage, male escorts
                            are posting advertisements at the obackpage's male escorts department to discover potential
                            clients. Being a lady, you can now fulfill your sexual desire and attain total satisfaction by
                            choosing a mutually handsome male escorts service-provider by obackpage website. Except
                            these, all other kind of adult services related ads are being posted in a regular basis from the
                            authentic back page alternative site, <a class="text-gray-700 underline" href="{{ route('home') }}">obackpage</a> classifieds so that as a visitor of obackpage it is
                            possible to find any adult providers from your list of advertisements showing in obackpage
                            classifieds.
                        </p>
                    </div>
                </div>
                <br><div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>
            </div>
        </div>
    </div>

@endsection
