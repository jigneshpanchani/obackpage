@extends('frontend.layout.home')
@section('title', 'Backpage Replacement - obackpage.com')
@section('description', "obackpage.com is the best replacement of backpage. if you are looking for backpage replacement then you can visit obackpage.com.")
@section('keywords', "backpage replacement,obackpage ,back page replacement")
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

                <div class="py-6">
                <span class="text-gray-800 text-2xl font-bold">Backpage replacement</span><br>
                <div class="col-md-12">
                <img src="page.JPG" class="backgd" title="page.JPG" alt="page.JPG">
                <br><br>
                <div class="concls text-sm font-bold">
                <p>
                <p>
                    Do you know about the backpage replacement? Yes, you are listening to the right thing, It’s highly
                    replaced by Obackpage! Now this is the biggest platform to make you satisfied like backpages. Obackpage
                    is the biggest <a class="text-gray-700 underline" href="{{ route('backpage-replacement') }}">Backpage Replacement</a> now! This is the best site <a class="text-gray-700 underline" href="{{ route('website-similar-to-backpage') }}">Similar to Backpage</a>. Are trying to
                    find the simplest backpage alternative websites? Well, you are not alone! Obackpage is here to make you
                    satisfied like Backpages. Once reigned supreme because the perfect online destination for classified or
                    personal ads, backpage had everything be it electronics, events, vacancy alerts, land , and more. But from
                    later, the location also became a hotbed for questionable adult contents. Obviously, the feds weren’t
                    thrilled! So after more allegations surfaced that were happening behind all the digital-seams, the govt
                    finally pulled the connect fall, getting the FBI to destroy the location permanently .
                </p><br>

                <p>But wait a while, does the age of backpages and like the websites are finally really over, and totally
                    done for?</p>
                <br>
                <div class="text-gray-800 text-base font-bold">Lets know about Backpage Replacement</div><br>

                <p>When Backpage.com totally shut down, then all the web user collectively went on the look for
                subsequent. Legally the classified ad platforms on the online. And therein spirit, here’s a better check
                out the highest 10 best and extraordinarily reliable <a class="text-gray-700 underline" href="{{ route('backpage-replacement') }}">Backpage Replacement</a> websites to
                obackpage that we expect provides the simplest experiences – but sans the deceit, gross crimes,
                and untrustworthiness. Before urging the list, please make sure to have a glance at the emerging
                backpage alternative websites as well.
                </p>
                <br>
                <div class="text-gray-800 text-base font-bold">What are the Best Backpage Replacement Sites?</div><br>
                <ol>

                <li>&emsp;1.&emsp;Where girls post now – <a class="text-gray-700 underline" href="{{ route('home') }}">obackpage.com</a></li><br>

                <li>&emsp;2.&emsp;Best adult directories with sexy entertainers – obackpage.com</li><br>

                <li>&emsp;3.&emsp;All the Social medias 100% friendly towards sex worker – obackpage.com</li><br>

                <li>&emsp;4.&emsp;Personal that attempt to be like Backpages – obackpage.com</li><br>

                <li>&emsp;5.&emsp;World-classic escort who take their career choice seriously – obackpage</li><br>

                <li>&emsp;6.&emsp;Best site for massage ‘experts’ – obackpage.com</li><br>

                <li>&emsp;7.&emsp;Plethora of escorts worldwide – obackpage.com</li>

                </ol>
                <br>
                <div class="text-gray-800 text-base font-bold">Which are the Top Backpage Replacement Sites now?</div><br>
                <ol>

                <li>&emsp;1.&emsp;obackpage.com</li><br>

                <li>&emsp;2.&emsp;backpage.com</li><br>

                <li>&emsp;3.&emsp;starbackpage.com</li><br>

                <li>&emsp;4.&emsp;backpage.com</li>

                </ol>
                <br>
                <div class="text-gray-800 text-base font-bold">Which is the Backpage Replacement to Getting Laid?</div><br>
                <p>
                    obackpage is that the #1 Backpage replacement thanks to a lower risk of security. No pimps. No
                    enforcement stings. However, the women want to attach for free of charges. <a class="text-gray-700 underline" href="{{ route('home') }}">obackpage</a> is nothing
                    like Backpage, though. You likely will not encounter free advertisement from the runaways or
                    showboating prostitutes. Some of the users might be offering trim on the primary date freed from
                    charge. Sounds good.
                </p><br>
                <p>
                    Since <a class="text-gray-700 underline" href="{{ route('home') }}">obackpage</a> may be a regular dating site, expect ordinary girls with typical profiles, unlike
                    Backpage, where they dress up in cute emojis and keyboard font ornaments but look nothing just like
                    the posting they portray.
                </p><br>
                <div class="text-gray-800 text-base font-bold">obackpage sports the following filters:</div><br>
                <ol>
                    <li>&emsp;1.&emsp;New Members</li><br>
                    <li>&emsp;2.&emsp;Members Nearby</li><br>
                    <li>&emsp;3.&emsp;VIP</li><br>
                    <li>&emsp;4.&emsp;Confirmed Photos</li><br>
                </ol>
                <br>
                <div class="text-gray-800 text-base font-bold">Features</div><br>
                <ol>
                    <li>&emsp;1.&emsp;Sex University</li><br>
                    <li>&emsp;2.&emsp;Users from every side of the world</li><br>
                    <li>&emsp;3.&emsp;Magazine, groups, and forums</li><br>
                    <li>&emsp;4.&emsp;Live webcam action</li><br>
                    <li>&emsp;5.&emsp;Traveling Man/Traveling Women options</li><br>
                </ol>
                <br>
                <div class="text-gray-800 text-base font-bold">Pros</div><br>
                <ol>
                    <li>&emsp;1.&emsp;Daters searching for intimate dealings</li><br>
                    <li>&emsp;2.&emsp;Super popular around the globe</li><br>
                    <li>&emsp;3.&emsp;Rural daters can find people too</li><br>
                    <li>&emsp;4.&emsp;Not overrun with prostitutes like Backpage</li><br>
                    <li>&emsp;5.&emsp;Will indeed meet some women and men</li><br>
                </ol>
                <p>
                    Have you been really married and trying to creep up with somebody who listens to you? The
                    userbase on Obackpage might offer which were.
                </p><br>
                <p>Back page got finished run with dust bonnie posing as those who wanted to rub two nickels together.
                    Obackpagethere has been jaw falling stunning females with some money. That the lads are elderly,
                    older, and also are not as sexy as the Johns around BP. Both functions have a superb deal of
                    admiration and also maintain good business.</p><br>
                <p>
                    A ideal characteristic and arrangement available on AM almost like back page and it's concealing
                    your identity. These wed guys and ladies can place mask blockers in excess of their faces over the
                    pics, therefore that their spouse doesn't accidentally find their secret trysts.
                </p><br>
                <p>
                    About Backpage, each of the sex employees want money upfront and, don't have any problems to
                    explore the pricing inside their own post, i.e.. This obvious solicitations effort is 1 motive that the site
                    got captured by the Usa government.
                </p>
                <br>
                <div class="text-gray-800 text-base font-bold">Features</div><br>
                <ol>
                    <li>&emsp;1.&emsp;Oldest married dating site created in 2001</li><br>
                    <li>&emsp;2.&emsp;Worldwide dating profiles</li><br>
                    <li>&emsp;3.&emsp;Send winks to hit on a prospect</li><br>
                </ol>
                <p>
                    The population has a number of their foremost draconian laws from prostitution, however, the bulk
                    of Earth is generally liberal. Each of the escorts are from just about every region in the world, except
                    the United States. I saw 1 in Kathmandu.
                </p><br>
                <p>On Backpage, perhaps not that the each provider had proper photographs in their page. But about
                    the Obackpage, every single poster has provocative snap-shots. Might It Be Sexy!
                </p><br>
                <p>
                    They aren't independent and just either but in addition bureau employees and an full contrast to
                    back page. For example, the profiles are somewhat broadly detail by detail, and so , the posters
                    charge high prices due to their services. But Backpage Shut down expenses the bags of marijuana
                    rates.
                </p><br>
                <p>Normal details such as ages, genders, heartbeat kind, and haircolor are all on the profiles. Yes or No
                    answers make an application for people who smoke. Additional information include nationality,
                    speech, and solutions. You may also find unhidden get hold of data exactly like calling number and
                    obtain instantly linked via the content icons that are direct</p>
                <br>
                <div class="text-gray-800 text-base font-bold">Why Obackpage is the best for Backpage Replacement?</div>
                <br>
                <p>From the beginning of the replacement, Obackpage is the king of Backpage. Here you can enjoy
                    yourself and can post anything which you did on Backpage. We are happy to announce that this
                    is the biggest opportunity for everyone. Any kind of you can use Obackpage smoothly and can
                    enjoy with your favorite person. This will be your biggest opportunity and really good like
                    2backpage. Let's use Obackpage and be more satisfied.</p>
                <br>
                <div class="text-gray-800 text-base font-bold">Why Should You Use an Obackpage?</div><br>
                <ol>
                    <li>&emsp;1.&emsp;User friendly</li><br>
                    <li>&emsp;2.&emsp;Interesting designs</li><br>
                    <li>&emsp;3.&emsp;Independent escorts</li><br>
                    <li>&emsp;4.&emsp;VIP girls</li><br>
                    <li>&emsp;5.&emsp;Verified and unverified photo</li><br>
                    <li>&emsp;6.&emsp;Can change the language mode</li><br>
                    <li>&emsp;7.&emsp;Filter to sift through user</li><br>
                    <li>&emsp;8.&emsp;Search box and primary filter</li>
                </ol>
                <br>
                <p>
                    Accomplishment is for most deserving individuals, and Obackpage is that the area to be if you are
                    part of the prime culture. Feminine women are working to come across manly guys that can lookout
                    of their small business. And loaded and powerful men are checking out superb girls who finish their
                    dignity.
                </p><br>
                <p>
                    Perhaps you have ever heard or seen of this sugar daddy or glucose baby phenomenon? It's
                    prominent on this site. Someone looking for a tryst pays $200 to take a college woman royal dinner
                    and spoil her. In general, the females on Obackpage.com are hotter than a Backpage, which makes
                    them desired and also price that the pursuit. More importantly, they truly are likely wash of STDs,
                    despite the userbase on Backpage
                </p><br>
                <p>
                    obackpage.com is about keeping things a secret. These independents business owners aren't
                    overlooking their shoulder fear of a rogue pimp like entertainer on back page. Lots of are high-class
                    ladies that know the nicer things in daily life, however a couple of these have bologna sandwich
                    bellies or stabbed bites inside their butts.
                </p><br>
                <p>The homepage shows abilities inside your town. The majority of them show that their facesand a
                    couple blur out, leaving a way of puzzle.</p>
                <br>
                <div class="text-gray-800 text-base font-bold">Detailed characteristic classifications:</div><br>
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
                    <li>&emsp;10.&emsp;Last activity</li>
                </ol>
                <br>
                <div class="text-gray-800 text-base font-bold">Services:</div><br>
                <ol>
                    <li>&emsp;1.&emsp;Incall</li><br>
                    <li>&emsp;2.&emsp;Outcall</li><br>
                    <li>&emsp;3.&emsp;Availability</li><br>
                    <li>&emsp;4.&emsp;Contact informations – Shows numbers, phone emails, website, Twitter handle.</li>
                </ol>
                </div>
                </div>
                </div>

                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
