<!DOCTYPE html>
<html lang="en">
    @include('frontend.include.header')
    <body>

        <div class="">
                <div class="flex bg-gray-100">       {{--style="background-color: #e3f1ffad" --}}
                @include('frontend.include.sidebar')

                @yield('content')

            </div>
        </div>

        @include('frontend.include.bodyfooter')

        @include('frontend.include.footer')
    </body>
</html>
