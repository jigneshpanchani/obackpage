{{-- <script  href="{{ asset('js/jquery/jquery-2.2.3.min.js') }}"></script> --}}
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
<script>
    $(document).ready(function() {
    $("body").on("click", ".openSidebarBtn", function() {
        $('.toggelfilter').toggleClass('widthzero');
        $('.toggelfilter').toggleClass('px-0');
    });
});
</script>
