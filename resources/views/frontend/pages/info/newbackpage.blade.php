@extends('frontend.layout.home')
@section('title', 'New Backpage - obackpage.com')
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
                    <div class="flex justify-center p-4"><span class="text-gray-800 text-2xl font-bold">New Backpage</span></div>
                    <div class="flex justify-between w-full items-center border-b-2 border-gray-400"></div><br>
                    <div class="concls text-sm font-bold">
                        <p>
                            What is New Backpage and why? Yes, this is the biggest question of you and your detailed answer is here. After the Backpage Shut Down, obackpage is the Biggest Backpage site. This is a New Backpage and people are using it as well.
                        </p>
                        <br>
                        <div class="font-bold text-xl">Which is the New Backpage site for Getting Laid?</div><br>
                        <p>
                            obackpage is that the #1 Backpage replacement thanks to a lower risk of security. No pimps. No enforcement stings. However, the women want to attach for free of charges. obackpage is nothing like Backpage, though. You likely will not encounter free advertisement from the runaways or showboating prostitutes. Some of the users might buffering trim on the primary date freed from charge. Sounds good.
                        </p>
                        <br>
                        <p>
                            Since obackpage may be a regular dating site, expect ordinary girls with typical profiles, unlike Backpage, where they dress up in cute emoj is and keyboard font ornaments but look nothing just like the posting they portray.
                        </p>
                        <br>
                        <div class="font-bold text-xl">Why Should People Use obackpage?</div><br>
                        <p>
                            <ol>
                            <li>&emsp;1.&emsp;User friendly</li><br>
                            <li>&emsp;2.&emsp;Interesting designs</li><br>
                            <li>&emsp;3.&emsp;Independent escorts</li><br>
                            <li>&emsp;4.&emsp;VIP girls</li><br>
                            <li>&emsp;5.&emsp;Verified and unverified photo</li><br>
                            <li>&emsp;6.&emsp;Can change the language mode</li><br>
                            <li>&emsp;7.&emsp;Filter to sift through user</li><br>
                            <li>&emsp;8.&emsp;Search box and primary filter</li><br>
                        </ol>
                        </p>
                        <br>
                        <p>
                            Accomplishment is for most deserving individuals,and obackpage is that the area to be if you are part of the prime culture. Feminine women are working to come across manly guys that can lookout of their small business. And loaded and powerful men are checking out superb girls who finish their dignity.
                        </p>
                        <br>
                        <p>
                            Perhaps you have ever heard or seen of this sugar daddy or glucose baby phenomenon? It'sprominent on this site. Someone looking for a tryst pays $200 to take a college woman royal dinner and spoil her. In general, the females on obackpage.com are hotter than a Backpage, which makes
                            them desired and also price that the pursuit. More importantly, they truly are likely wash of STDs,despite the user base on Backpage.
                        </p>
                        <br>
                        <p>
                            obackpage.com is about keeping things a secret. These independents business owners aren't overlooking their shoulder fear of a rogue pimp like entertainer on back page. Lots of are high-class ladies that know the nicer things in daily life, however a couple of these have bologna sandwich bellies or stabbed bites inside their butts.
                        </p>
                        <br>
                        <p>
                            The homepage shows abilities inside your town. The majority of them show that their faces and a couple blur out, leaving a way of puzzle.
                        </p>
                        <br>
                        <div class="font-bold text-xl">Detailed characteristic classifications:</div><br>
                        <ol>
                            <li>&emsp;1.&emsp;Location</li><br>
                            <li>&emsp;2.&emsp;Caters to</li><br>
                            <li>&emsp;3.&emsp;Age</li><br>
                            <li>&emsp;4.&emsp;Height</li><br>
                            <li>&emsp;5.&emsp;Eye color</li><br>
                            <li>&emsp;6.&emsp;Hair color</li><br>
                            <li>&emsp;7.&emsp;Body type</li><br>
                            <li>&emsp;8.&emsp;Gender</li><br>
                            <li>&emsp;9.&emsp;Ethnicity</li><br>
                            <li>&emsp;10.&emsp;Last activity</li><br>
                        </ol>
                        <br>
                        <div class="font-bold text-xl">Services:</div><br>
                        <ol>
                            <li>&emsp;1.&emsp;Incall</li><br>
                            <li>&emsp;2.&emsp;Outcall</li><br>
                            <li>&emsp;3.&emsp;Availability</li><br>
                            <li>&emsp;4.&emsp;Contact information – Shows numbers, phone emails,website, Twitter handle.</li><br>
                        </ol>
                        <br>
                        <div class="font-bold text-xl">Is it safe to use <a class="text-gray-700 underline" href="{{ route('home') }}">obackpage</a> classifieds & what are the down sides of obackpage classifieds?</div><br>
                        <p>
                            No escort supplier or gender worker would like to become arrested, especially once they feel the things they are doing is not erroneous, also obackpage agrees. Therefore, obackpage is committed to guard their clients, and will just publish information to authorities as it is believed legitimate gender trafficking and human slavery possibly is taking place anything involving heterosexual victims of sexual abuse. Strong exemptionsfrom several from the adult market have aided prove obackpage worth and trustworthiness.You do not have anything to worry about when working with obackpage in case you're not engaged with any illegal pursuits like sexual abuse, underage prostitution, sex trafficking,human captivity etc. obackpage is committed to secure its end users from stepping into trouble and due to that, obackpage encrypt most its end users' data insecure servers located in the Amsterdam, Netherlands. After you see obackpage or make a place in obackpage classified, you could be sure that your data
                            and communication documents are entirely encrypted so that no one can read or intercept it together anyway. Thanks to providing highest protection and safety to our clients, obackpage is trusted from the people around the planet while the ideal backpage alternative internet site considering that 2018.
                        </p>
                        <br>
                        <div class="font-bold text-xl">How can I get started with obackpage classifieds for free?</div><br>
                        <p>
                            As an advertisement poster, you will need to make a complimentary obackpage account using your current email address and then you have to verify your obackpage accounts. To verify your obackpage account, simply click the confirmation link provided by obackpage classified internet site. The moment you validate & verify your obackpage accounts, you are prepared to get started submitting your classified advertisement sat no cost within this backpage replacement website: obackpage classifieds. First select a metropolis where you want to market your services, then select a group and sub category of products and services you are providing.Now you have to write a good name and description from describing the companies that you are providing. Try to supply as much advice as possible about the solutions that you might be offering these as for instance the specific spot,price per hour, or contact number, current email address, call place etc.. Now hit on the publish button and your labeled advertisement will be submitted directly away in the obackpage labeled internet site.
                        </p>
                        <br>
                        <p>
                            Being a guest of back page replacement website obackpage classifieds, making a merchant account is not required. Whatever you need to do is always to decide on an area where you are looking for the services that you are searching for then opt for a category and sub category. You will be subsequently exhibited that a set of advertisements posted on your community area regarding the services you are on the lookout for.These adverts on obackpage classifieds move through routine supper so that you don't see any fake or spam advertisements, only real providers are allowed to market within this backpage other website, obackpage classifieds. Now,locate the very best deal which suits you and contact with the supplier by calling at the telephone number awarded from the advertising web page or simply send an e mail to the ad poster. The majority of the obackpage people will probably reply to your query within a few minutes if not hours of course if the pricing and also additional details seems reasonable for your requirements then you can go ahead and render the services you have been searching for.
                        </p>
                    </div>
                </div>
                <br><div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>
            </div>
        </div>
    </div>

@endsection
