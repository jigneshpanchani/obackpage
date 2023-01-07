$(document).ready(function() {
	$("#search-box").keyup(function() {
        if($(this).val() != ''){
            $.ajax({
                method: "POST",
                url:  base_url + "autocomplete-ajax",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'action': 'getCity','keyword': $(this).val()},
                beforeSend: function() {
                    $("#search-box").css("background", "#FFF url(LoaderIcon.gif) no-repeat 165px");
                },
                success: function(data) {
                    var output = JSON.parse(data);
                    $('#suggesstion-box').fadeIn();  
                    $('#suggesstion-box').html(output);    
                }
            });  
        }
	});
});
