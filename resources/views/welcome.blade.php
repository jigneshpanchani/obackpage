

        <div class="flex justify-start min-h-screen px-60">
            <div class="flex flex-col bg-gray-100 w-full p-4">
                <div class="flex justify-between w-full items-center">
                    <div id="items-center justify-start">
                        <span class="text-4xl italic font-sans font-bold leading-7 text-red-500">o</span><span class="text-4xl italic font-sans font-bold leading-7 text-gray-800">backpage</span>
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
                    <div id="items-center justify-start">
                        <span class="text-base font-semibold leading-7 text-gray-900">Choose a location:</span>
                    </div>
                    <div class="justify-end">
                        <a href="{{ url('/dashboard') }}"><span class="text-lg text-yellow-700 font-semibold dark:text-yellow-500 underline">Post Ad</span></a>
                    </div>
                </div>
                <div class="flex-1 flex justify-center w-full lg:justify-end mt-4">
                    <div class="w-full">
                        <div class="relative text-gray-500">
                        <div class="absolute inset-y-0 pl-3 flex items-center">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <span tabindex="-1" class="bg-white block rounded-md" style="">
                            <input id="findStudent" name="search" class="findStudent block w-full pl-10 pr-3 py-2 findStudent border border-transparent rounded-md leading-5  text-gray-400 focus:ring-0 focus:text-gray-900 sm:text-sm" placeholder="Search Cities" type="text" data-role="autocomplete" autocomplete="off" role="combobox" aria-expanded="false" aria-disabled="false" aria-readonly="false" aria-owns="findStudent_listbox" aria-autocomplete="list" aria-controls="findStudent_listbox" aria-busy="false">
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>


