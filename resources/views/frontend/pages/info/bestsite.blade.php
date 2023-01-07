@extends('frontend.layout.home')
@section('title', 'Sites like Backpage | Sites similar to Backpage - obackpage.com')
@section('description', "obackpage.com is a free classified site like Backpage that offers you the same platform as provided by Backpage to reach your target audience.")
@section('keywords', "Sites like backpage, sites similar to backpage")
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
                <span class="text-gray-800 text-2xl font-bold">Best sites like backpage</span><br>
                <div class="col-md-12"><br>
                <img src="image.JPG" class="backgd" title="image.JPG" alt="image.JPG">
                <br><br>
                <div class="text-gray-800 text-xl font-bold">Backpage to obackpage: FAQs</div><br>
                <div class="concls text-sm font-bold">
                    <p>When it involves growing your business, on-line <a class="text-gray-700 underline" href="#">classified sites like Backpage</a> will do wonders. however to seize the opportunities of thousands of business homeowners, Backpage close up its web site. This unexpected close up has created an enormous vacuum within the marketplace for the sites like Backpage which might link up the standards of the ex-giant of sales promotions.</p><br>

                    <p>While many of us have embraced obackpage as a real various of Backpage, several have scores of queries in their mind. Here ar most often asked questions on obackpage answered.</p><br>

                    <div class="text-gray-800 text-base font-bold">Is obackpage an acceptable various to Backpage?</div><br>

                    <p>Yes, obackpage is one in every of best various sites like Backpage. With identical style and layout, obackpage maintains identical look and feel of its forerunner. There ar many classes and locations rather like Backpage.</p><br>

                    <div class="text-gray-800 text-base font-bold">Is obackpage safe &amp; secure?</div><br>

                    <p>The major concern that individuals have concerning sites like Backpage is safety and security. The unexpected seizure of Backpage makes businesses wonder if the net classified web site they're trusting goes to face problems in future. obackpage ensures legitimate ad posting to keep up safety and security.</p><br>

                    <div class="text-gray-800 text-base font-bold">Will i purchase any competitive edge with obackpage?</div><br>

                    <p>Yes, obackpage covers a large range of locations with exceptional visibility. This ensures your ads reach the audience.</p><br>

                    <div class="text-gray-800 text-base font-bold">What sets obackpage except for different sites like Backpage?</div><br>

                    <p>obackpage, in contrast to its counterparts, includes a client-centric approach giving full support and help with ads. There ar several options that persuade be useful for your business.</p><br>

                    <p>Although there ar several on-line classified websites within the market, obackpage has emerged as a sheer winner with its approach and options.</p><br>

                    <p>To know a lot of concerning the page or post a commercial, visit North American country at <a class="text-gray-700 underline" href="#">obackpage.com</a></p>
                </div>
                </div>



                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
