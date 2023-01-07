@php
    $currRoute = Route::current()->getName();
@endphp


@if ($currRoute == 'category' || $currRoute == 'view-post' || $currRoute == 'disclamier')
    <div class="widthzero citySidebar duration-1000 toggelfilter transition-all flex w-48 bg-white px-0">
        <div class="flex flex-col w-full p-1">

           <div>
              @if (Route::has('login'))
                @auth
                    <div class="p-6">
                        <a href="{{ route('post-ad') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                            <p class="text-xl font-bold text-white">Post ad</p>
                        </a>
                    </div>
                @else
                    <div class="p-6">
                        <a href="{{ route('login') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                            <p class="text-xl font-bold text-white">Post ad</p>
                        </a>
                    </div>
                @endauth
            @endif
            <a href="{{ route('home')}}" class="bg-gray-100 flex justify-center items-center p-2 rounded">
                <span class="text-gray-800 text-sm font-bold underline">Home</span>
            </a>
            <div class="p-4 flex justify-center items-center">
                <span class="text-gray-800 text-lg font-extrabold">Nearby Cities</span>
            </div>
            <ul class="overflow-y-auto w-full">
                <li class="aside-menu bg-gray-100 p-2">
                    <a href="{{ route('home') }}">
                        <div class="flex justify-center items-center">
                            <p class="text-gray-800 text-sm font-bold">Go To Home</p>
                        </div>
                    </a>
                </li>
                @foreach($nearByCities as $nearByCity)
                <li class="aside-menu bg-gray-100 p-2">
                    <a href="{{ route('category', $nearByCity['id'] ) }}">
                        <div class="flex justify-center items-center">
                            <p class="text-gray-800 text-sm font-bold">{{  $nearByCity['city'] }}</p>
                        </div>
                    </a>
                </li>
                @endforeach
            </ul>
           </div>
        </div>
    </div>
    <div class="widthzero sidebar-background">
    </div>
@elseif($currRoute == 'posts-details')

<div class="widthzero citySidebar duration-1000 toggelfilter transition-all flex w-48 bg-white px-0">
    <div class="flex flex-col w-full p-1">
      <div>
          @if (Route::has('login'))
            @auth
                <div class="p-6">
                    <a href="{{ route('post-ad') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                        <p class="text-xl font-bold text-white">Post ad</p>
                    </a>
                </div>
            @else
                <div class="p-6">
                    <a href="{{ route('login') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                        <p class="text-xl font-bold text-white">Post ad</p>
                    </a>
                </div>
            @endauth
        @endif
        <a href="{{ route('home')}}" class="bg-gray-100 flex justify-center items-center p-2 rounded">
            <span class="text-gray-800 text-sm font-bold underline">Home</span>
        </a>
    </div>
    </div>
</div>
<div class="widthzero sidebar-background">
</div>


@else

<div class="widthzero citySidebar duration-1000 toggelfilter transition-all flex w-48 bg-white px-0">
    <div class="flex flex-col w-full p-1">

        <ul class="overflow-y-auto w-full">
             @if (Route::has('login'))
            @auth
                <div class="p-6">
                    <a href="{{ route('post-ad') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                        <p class="text-xl font-bold text-white">Post ad</p>
                    </a>
                </div>
            @else
                <div class="p-6">
                    <a href="{{ route('login') }}" class="bg-blue-900 flex justify-center items-center p-2 rounded">
                        <p class="text-xl font-bold text-white">Post ad</p>
                    </a>
                </div>
            @endauth
             @endif

            <li class="aside-menu bg-g0 p-2">
                <a href="{{ route('home') }}">
                    <div class="flex justify-center items-center">
                        <p class="text-gray-800 text-sm font-bold">Home</p>
                    </div>
                </a>
            </li>
            <li class="aside-menu bg-g0 p-2">
                <a href="{{ route('manage-ads') }}">
                    <div class="flex justify-center items-center">
                        <p class="text-gray-800 text-sm font-bold">My Account</p>
                    </div>
                </a>
            </li>
            <li class="aside-menu bg-g0 p-2">
                <a href="{{ route('add-credit') }}">
                    <div class="flex justify-center items-center">
                        <p class="text-gray-800 text-sm font-bold">Buy Credits</p>
                    </div>
                </a>
            </li>
            <li class="aside-menu bg-g0 p-2">
                <form method="POST" class="flex justify-center items-center" action="{{ route('logout') }}" x-data>
                    @csrf
                    <button type="submit" class="">
                        <span class="text-gray-800 text-sm font-bold">Logout</span>
                    </button>
                </form>
            </li>
        </ul>
    </div>
</div>
<div class="widthzero sidebar-background">
</div>

@endif
