<script>
    var base_url = "{{ asset('/') }}";
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="{{ url('plugins/ckeditor/ckeditor.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>

{{-- fancybox --}}
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
   


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
      // Customization example
      Fancybox.bind('[data-fancybox="gallery"]', {
        infinite: false
      });
    </script>

<script>


$(document).ready(function() {
    $("body").on("click", ".openSidebarBtn", function() {
        $('.toggelfilter').toggleClass('widthzero');
        $('.toggelfilter').toggleClass('px-0');
    });
});

</script>
