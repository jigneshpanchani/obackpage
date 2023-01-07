@extends('frontend.layout.default')
@section('title', 'Backpage'. ' '. $cityname[0]['city'].'|'. $cityname[0]['city'].' '.'Escorts'. '|'. $cityname[0]['state'].' '.'obackpage')
@section('description', 'For '. $cityname[0]['city'].' Escorts obackpage is the best alternative to backpage. After backpage, obackpage is the most popular classified site for '. $cityname[0]['city'].' Escorts. Like backpage it is free directory site for '. $cityname[0]['city'].' Escorts or Escorts in '. $cityname[0]['city'].'.if you are looking for cityxguide '. $cityname[0]['city'].' escorts or adultsearch '. $cityname[0]['city'].' escorts or adult search '. $cityname[0]['city'].' escorts then obackpage is the best site to visit')
@section('keywords', 'Backpage '. $cityname[0]['city'].', '. $cityname[0]['city'].' backpage, free classified site '. $cityname[0]['city'].',Beautiful Escorts in '. $cityname[0]['city'].','. $cityname[0]['city'].' Escort,independent escort '. $cityname[0]['city'].',free classified sites in '. $cityname[0]['city'].', free directory site '. $cityname[0]['city'].', best classified site '. $cityname[0]['city'].', Escorts in '. $cityname[0]['city'].', best directory site '. $cityname[0]['city'].'')


@section('content')


    <div class="flex flex-col z-10 flex-1">
        <nav class="navbar">
            <div class="flex bg-blue-900 w-full justify-between w-full items-center p-2">
                <div class="flex flex-row items-center justify-start space-x-4">
                    <i class="fa fa-bars openSidebarBtn cursor-pointer" aria-hidden="true"></i>
                    <a href="{{route('home')}}">
                        <img style="width: 158px; height: 40px; padding-top: 2px;" alt="obackpage" title="obackpage" class="logow" src="https://obackpage.com/assets/frontend/img/logo_white.png">
                    </a>
                </div>
            </div>
        </nav>
        <main class="flex-1 relative overflow-y-auto focus:outline-none mt-2" tabindex="0">
            <div class="flex grid  sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 space-x-4 m-4">
                @php
                $categories = array_chunk($category,(count($category) / 3));
                @endphp
                @foreach($categories as $category1)
                    <div class="">
                        @foreach($category1 as $category2)
                                <div class="bg-blue-900 rounded text-center">
                                    <span class="text-white text-lg px-2 font-bold leading-7">{{  $category2['category'] }}<br/></span>
                                </div>
                                @foreach($category2['subcategory'] as $subcategory)

                                <div class="space-x-2 py-2">
                                    <i class='fa fa-caret-right'></i>
                                    @if($subcategory['category_id'] == '1'  || $subcategory['category_id'] == '5')
                                        <a href="{{ route('disclamier',  array('cityId' => $cityId, 'subcategoryId' => $subcategory['slug']))}}">
                                    @else
                                        <a href="{{ route('view-post',  array('cityId' => $cityId, 'subcategoryId' => $subcategory['slug'])) }}">
                                    @endif
                                    <span class="text-gray-800 text-sm font-bold underline">{{  $subcategory['sub_category'] }}</span><br/></a>
                                </div>
                                @endforeach
                        @endforeach
                    </div>
                @endforeach
            </div>
        </main>
    </div>
    </div>

    {{-- <div class="box"> --}}
        <div class="importantnote">
        <div class="concls text-sm bg-gray-200 w-full py-2 px-10 font-semibold">
            <div>
                <br/>
                <div class="text-base py-2">Are you on the hunt for&nbsp;<a class="font-bold">free classified sites in <span>{{$cityname[0]['city']}}</span> Escorts?</a></div>
                <p>Are you trying forward to promoting your business on the <a class="font-bold">best classified sites</a>  within the world? Well, in this case, you're within the right place. we might perpetually offer you with the foremost cheap nevertheless effective choices to induce your ads announce on high free classified sites in with none hassles. All you've got to try and do is keep your religion in United States of America and allow us to guide you thru the whole procedure of making certain your business growth.</p>
                <p>With the newest developments within the digital selling trade, new and reformed SEO tools ar developing day by day. As a business owner, you'd get the chance to unfold awareness concerning your whole and gather new leads by obtaining your commercials announce in <a class="font-bold">free directory sites</a>.</p>
                <p>obackpage works laborious to attach numerous organizations and totally different service partners to use their platform as a promotional dynamic. With the assistance of obackpage, that could be a <a class="font-bold">backpage replacement site</a>, you'd acquire the freedom to counterpoint your business profile and attract the purchasers. this can be exclusively as a result of the purchasers tend to believe the short and crisp commercials and click on on them to understand a lot of concerning the whole and product. during this approach, your web site would receive higher traffic and the next ranking on the assorted search engines.</p>
                <p><div class="text-base font-bold py-2">Witness the expansion of Your Business with obackpage</div></p>
                <p>As the digital selling trade is growing at an amazing pace, you'd realize it tough to survive within the trade with correct promotions. If the purchasers don't get to understand concerning your whole and your featured product, your sales chart can for certain portray an enormous dip. therefore just in case you're disquieted concerning the dearth of internet sites the same as backpage sites in , you need to undergo obackpage. we've got brought out the simplest opportunities for all the business homeowners to induce their commercials featured on our media platform.</p>
                <p><div class="font-bold text-base py-2">Benefits of Shaking Hands with obackpage ?</div></p>
                <p>There is no purpose in finance it slow and cash into one thing that doesn't bear the helpful fruit. so as to form certain that your partnership with obackpage would bring out the simplest of your whole promotions, you need to perceive the positive highlights of identical.</p>
                <p>Your whole awareness is our prime focus. it's terribly tough to find the simplest <a class="font-bold">free classified sites</a> in and so, we offer our customers with the simplest promotional facilities within the market. in spite of what you're promoting, we might ensure that your commercials get announce in an easy manner.</p>
                <p>obackpage is such a platform wherever you'd get the appearance of reaching resolute a large range of on-line customers. it's our job to assist you in displaying your business in associate degree economical manner and obtain you potential leads within the trade. Already there's a myriad of service suppliers WHO ar effectively growing their business and client base with our obackpage platform</p>
                <p>The <a class="font-bold">new free classified sites</a> in is taken into account to be an incredible thanks to take the organization to an entire new level. In fact, such promotional platforms ar best-known to be an efficient digital selling strategy for a excessiveness of companies. The result's even higher than the opposite SEO tools within the market</p>
                <p>the most plan of advertising is to let individuals fathom your business. obackpage will it for you and your organization. we have a tendency to manage to post the commercials in such the simplest way that it hits the correct nerve of the potential customers out there.</p>
                <p><div class="font-bold text-base py-2">Find the correct side for Your Business</div></p>
                <p>The layout of obackpage is kind of totally different than the opposite <a class="font-bold text-red-700 underline" href="#">alternatives to backpage</a> sites in . it's primarily a reliable and trustworthy promotional platform wherever you'd realize variety of choices to decide on from. There ar numerous classes which might build your posting procedures easier and sander with none hassles. therefore so as to induce an easy advertising platform for your business, ensure that you simply inspect the sites the same as <a class="font-bold">free classified sites</a>.To be clear on this context, all the business dealings ar below the legal norms and utterly moral within the trade.</p>
                <p><div class="font-bold text-base py-2">Customer Satisfaction Is What we glance Out For</div></p>
                <p>We assure our customers with the foremost trus table services with all the legal paper works as a <a class="font-bold">backpage replacement sites</a>. obackpage would perpetually be there to assist you thru the legal ways that of advertising your business within the market. The wide selection of choices and classes would offer you with heaps of scope for higher promotions and advert of your organization. After all, there would be a easy and economical interface at the side of a straightforward work method for the business homeowners to handle their commercials. Therefore, here you'd get associate degree adequate platform to induce the classified announce. though there's a excessiveness of web sites that manage to post commercials for numerous corporations, obackpage comes resolute be a transparent winner within the trade. the most reason is that the quality service still as higher interface at the side of correct dynamics. ensure you expertise the dynamic  state of affairs of the digital selling trade with the appearance of obackpage and its promotional content. At the tip of the day, it's our job to make sure that you simply receive the utmost range of leads within the market with none issue. All you've got to try and do is inspect the web site of obackpage and select your classes effectively for the simplest results.</p>
            </div>
        </div>
        </div>

    <div class="flex justify-between w-full items-center mt-4 border-b-2 border-gray-900"></div>

@endsection
