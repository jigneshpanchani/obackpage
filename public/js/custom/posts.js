var Posts = function () {

    var list = function () {



        $("body").on("change", ".selectCountry", function () {
            var id = $(this).val();
            $.ajax({
                type: "POST",
                url: base_url + "post-ad-ajaxAction",
                data: {'action': 'getCountryState', 'id': id},
                dataType: "json",
                success: function (data) {
                    // var output = JSON.parse(data);
                    // var address = "";
                    // var temp_html = '<option value="">Select Store</option>';
                    //     console.log(output);
                    //     for (var i = 0; i < output.length; i++) {
                    //         temp_html += '<option value="' + output[i].id + '">' + output[i].sellername + '</option>';
                    //         address += "<h1>"+output[i].sellername+"</h1><p><strong>Address</strong>:"+ output[i].selleraddress +"</p><p><strong>Phone:</strong> "+ output[i].sellerphoneno +"</p><br/>";
                    //     }
                    // $(".store").html(temp_html);
                    // $(".news_data").html(address);
                }
            });
        });

    }
    return {
        init: function () {
            list();
        },
    }
}();
