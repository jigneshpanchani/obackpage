<!DOCTYPE html>
<html lang="en">
    @include('frontend.include.header')
    <body>

        <div class="">
            <div class="flex" style="background-color: #f1f5f9">
                @include('frontend.include.sidebar')

                @yield('content')

            </div>
        </div>

        @include('frontend.include.bodyfooter')

        @include('frontend.include.footer')
    </body>
</html>
