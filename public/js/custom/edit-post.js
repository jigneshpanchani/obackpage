var PostsEdit = function () {

    var edit = function () {

        setTimeout(function() {
            $('#country-dropdown').trigger('change');
            $('#category-dropdown').trigger('change');
        }, 200);

        
        $("body").on("change", ".selectCountry", function () {
            var id = $('#country-dropdown').val();
            $.ajax({
                method: "POST",
                url:  base_url + "post-adds-ajax",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'action': 'getCountryStateByContinent', 'id': id},
                type: "json",
                success: function(data) {
                    var output = JSON.parse(data);
                    var temp_html = '';
                        for (var i = 0; i < output.length; i++) {
                            temp_html += '<option value="' + output[i].id + '" class="text-gray-700 text-base leading-7 font-semibold">' + output[i].country_state + '</option>';
                        }
                    $("#state-dropdown").html(temp_html);
                    setTimeout(function() {
                        $('#state-dropdown').trigger('change');
                    }, 200);
                }
            });
        });

        $("body").on("change", ".selectstate", function () {
            var id = $('#state-dropdown').val();
            $.ajax({
                method: "POST",
                url:  base_url + "post-adds-ajax",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'action': 'getCityByCountryState', 'id': id},
                type: "json",
                success: function(data) {
                    var output = JSON.parse(data);
                    var temp_html = '';
                        for (var i = 0; i < output.length; i++) {
                            temp_html += '<option value="' + output[i].id + '" class="text-gray-700 text-base leading-7 font-semibold">' + output[i].city + '</option>';
                        }
                    $("#city-dropdown").html(temp_html);
                }
            });
        });

        $("body").on("change", ".selectCategory", function () {
            var id = $('#category-dropdown').val();
            $.ajax({
                method: "POST",
                url:  base_url + "post-adds-ajax",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'action': 'getSubCategory', 'id': id},
                type: "json",
                success: function(data) {
                    var output = JSON.parse(data);
                    var temp_html = '';
                        for (var i = 0; i < output.length; i++) {
                            temp_html += '<option value="' + output[i].id + '" class="text-gray-700 text-base leading-7 font-semibold">' + output[i].sub_category + '</option>';
                        }
                    $("#sub-category-dropdown").html(temp_html);
                }
            });
        });

        if (window.File && window.FileList && window.FileReader) {
            var filesInput = document.getElementById("files");
            filesInput.addEventListener("change", function(event) {
              var files = event.target.files; //FileList object
              var output = document.getElementById("displayUploadedImg");
              for (var i = 0; i < files.length; i++) {
                var file = files[i];
                //Only pics
                if (!file.type.match('image'))
                  continue;
                var picReader = new FileReader();
                picReader.addEventListener("load", function(event) {
                  var picFile = event.target;
                  var div = document.createElement("div");
                  div.innerHTML = "<img class='thumbnail' src='" + picFile.result + "'" +
                    "title='" + picFile.name + "'/>";
                  output.insertBefore(div, null);
                });
                //Read the image
                picReader.readAsDataURL(file);
              }
            });
          } else {
            console.log("Your browser does not support File API");
          }
           
    }

    
   
    return {
        init: function () {
            edit();
        },
    }
}();