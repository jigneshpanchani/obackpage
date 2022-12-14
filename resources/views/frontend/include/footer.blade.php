{{-- <script  href="{{ asset('js/jquery/jquery-2.2.3.min.js') }}"></script> --}}
<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
@if (!empty($js))
@foreach ($js as $value)
<script src="{{ url('js/custom/'.$value) }}" type="text/javascript"></script>
@endforeach
@endif
<script>
    jQuery(document).ready(function() {

    @if (!empty($funinit))
            @foreach ($funinit as $value)
                {{  $value }}
            @endforeach
    @endif
    });
</script>
<script>
    var base_url = "{{ asset('/') }}";
</script>
<script>
    $(document).ready(function() {
    $("body").on("click", ".openSidebarBtn", function() {
        $('.toggelfilter').toggleClass('widthzero');
        $('.toggelfilter').toggleClass('px-0');
    });
});
</script>
