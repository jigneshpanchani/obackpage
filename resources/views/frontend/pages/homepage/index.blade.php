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
                        <span tabindex="-1" class="bg-white block rounded-md" style="">
                            <input id="search" name="search" class="findStudent block w-full pl-10 pr-3 py-2 findStudent border border-transparent rounded-md leading-5  text-gray-400 focus:ring-0 focus:text-gray-900 sm:text-sm" placeholder="Search Cities" type="text" data-role="autocomplete" autocomplete="off" role="combobox" aria-expanded="false" aria-disabled="false" aria-readonly="false" aria-owns="findStudent_listbox" aria-autocomplete="list" aria-controls="findStudent_listbox" aria-busy="false">
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

<script type="text/javascript">
    var route = "{{ url('home') }}";
    $('#search').typeahead({
        source:  function (term, process) {
        return $.get(route, { term: term }, function (data) {
                return process(data);
            });
        }
    });
</script>

@endsection
