<!DOCTYPE html>
<html lang="en">
    @include('frontend.include.header')
    <body>
        @include('frontend.include.bodyheader')

            @yield('content')

            @include('frontend.include.homebodyfooter')
        @include('frontend.include.footer')
    </body>
</html>
