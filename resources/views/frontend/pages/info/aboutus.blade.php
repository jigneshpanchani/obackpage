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
                    <span class="text-gray-800 text-2xl font-bold">About Us</span>
                <div class="col-md-12">
                    <br>
                <div class="concls text-sm font-bold">
                <p>
                    Obackpage is the biggest <a href="#" class="text-gray-700 underline">Backpage Replacement</a> now! Are trying to find the simplest backpage
                    alternative websites? Well, you are not alone! Obackpage is here to make you satisfied like Backpages.
                    Once reigned supreme because the perfect online destination for classified or personal ads, backpage had
                    everything be it electronics, events, vacancy alerts, land , and more. But from later, the location also
                    became a hotbed for questionable adult contents. Obviously, the feds weren’t thrilled! So after more
                    allegations surfaced that were happening behind all the digital-seams, the govt finally pulled the connect
                    fall, getting the FBI to destroy the location permanently .We offer records in an exact huge assortment of
                    lessons and automotive, buy/sell/trade, local neighborhood, transport, tasks , native places, artist,
                    property, rentals, and also solutions. Whether you are a business owner troubled to increase your reach or
                    a real estate attempting onerous to produce it large together with your investment, you are going to find
                    the US the foremost reliable settlement. The journey, which was launched as only backpage replacement,
                    has currently evolved to some pioneering force behind the dynamic arena of categorized record. We tend
                    to continually try for excellence and place continuous efforts to enhance our services.
                <br>
                <br>
                    It's the satisfaction of our clients that retains the US planned inside our journey also assists the US accomplish brilliance and
                    excellence. Our listing services are free and that we place units committed to delivering one of the most
                    effective possible knowledge you largely will not have with the backpage through indistinguishable
                    aesthetic and functional encounters. But, we tend to be not anxious in any reasonably illegitimate
                    ad-listing actions and build it sure to give real life and real value-driven companies for your requirements
                    by maintaining strict high quality standards. Customer delight is our last purpose and each and every of
                    our approaches contributes heavily to that. We are predisposed to simply take nice satisfaction in group
                    actions and revolutionary add-on possibilities for our customers, which facilitate US respect for their
                    reliance US and price our connection furthermore. We are apt to feel that innovation and transparency
                    discipline what builds the US many different from others.
                </p>
                </div>
                </div>
                </div>

                <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

            </div>
        </div>
    </div>

@endsection
