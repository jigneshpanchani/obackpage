var Posts = function () {

    var list = function () {

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

    var localpost = function(){

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
                    var city_checkbox_html = '';
                        for (var i = 0; i < output.length; i++) {
                            temp_html += '<option value="' + output[i].id + '" class="text-gray-700 text-base leading-7 font-semibold">' + output[i].city + '</option>';
                            city_checkbox_html += '<div class="space-x-2"><input type="checkbox" name="city_id1[]"  value="' + output[i].id + '"><label for="city_id" class="text-gray-700 text-base leading-7 font-semibold">' + output[i].city + ' </label></div>';
                        }
                    $("#city-dropdown").html(temp_html);
                    $("#city-checkbox").html(city_checkbox_html);
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

    var multiplePost = function(){

        var expanded = false;

        $("body").on("click", ".selectCountryBox", function () { 
            var countrycheckboxes = document.getElementById("countrycheckboxes");
            if (!expanded) {
            countrycheckboxes.style.display = "none";
            expanded = true;
            } else {
            countrycheckboxes.style.display = "block";
            expanded = false;
            }
        });

        $("body").on("click", ".selectStateBox", function () { 
            var statecheckboxes = document.getElementById("statecheckboxes");
            if (!expanded) {
            statecheckboxes.style.display = "none";
            expanded = true;
            } else {
            statecheckboxes.style.display = "block";
            expanded = false;
            }
        });

        $("body").on("click", ".selectCityBox", function () { 
            // alert();
            var citycheckboxes = document.getElementById("citycheckboxes");
            if (!expanded) {
            citycheckboxes.style.display = "none";
            expanded = true;
            } else {
            citycheckboxes.style.display = "block";
            expanded = false;
            }
            alert();
            var selectCityBox = true();
            function selectCityBox() {
                var checkboxes = 
                    document.getElementsByName('citycheckboxes');
      
                var result = "";
      
                for (var i = 0; i < checkboxes.length; i++) {
                    if (checkboxes[i].checked) {
                        result += checkboxes[i].value 
                            + " " + " citycheckboxes, ";
                    }
                }
                document.write("<p> You have selected : "
                        + result + "</p>");
            }
            alert();
            return false;
        });
        
        setTimeout(function() {
            // $('#country-dropdown').trigger('click');
            $('#category-dropdown').trigger('click');
        }, 200);

        $("body").on("click", ".continent_chkbox", function () {
            var i = 0;
            let arr = [];
            $('.continent_chkbox:checked').each(function () {
                arr.push($(this).val());
            });
        
            console.log(arr);
            // return false;
            $.ajax({
                method: "POST",
                url:  base_url + "post-adds-ajax",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'action': 'getCountryStateMultiple','id' : arr},
                type: "json",
                success: function(data) {
                    var output = JSON.parse(data);
                    var temp_html = '';
                        for (var i = 0; i < output.length; i++) {
                            // temp_html += '<option value="' + output[i].id + '" class="text-gray-700 text-base leading-7 font-semibold">' + output[i].country_state + '</option>';
                               temp_html += '<div class="space-x-4"><label for="' + output[i].country_state + '" class="px-2 text-gray-700 text-base leading-7 font-semibold space-x-1"><input type="checkbox" name="selectstate[]" class="selectstate" value="' + output[i].id + '" id="' + output[i].country_state + '"/><span>' + output[i].country_state + '</span></label> </div>';
                        }
                    $("#statecheckboxes").html(temp_html);
                    setTimeout(function() {
                        $('#state-dropdown').trigger('click');
                    }, 200);
                }
            });
        });

        $("body").on("click", ".selectstate", function () {
            var i = 0;
            var arr = [];
            $('.selectstate:checked').each(function () {
                arr.push($(this).val());
            }); 
        
            $.ajax({
                method: "POST",
                url:  base_url + "post-adds-ajax",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'action': 'getCityMultiple', 'id': arr},
                type: "json",
                success: function(data) {
                    var output = JSON.parse(data);
                    var temp_html = '';
                        for (var i = 0; i < output.length; i++) {
                            temp_html += '<div class="space-x-4"><label for="' + output[i].city + '" class="px-2 text-gray-700 text-base leading-7 font-semibold space-x-2"><input type="checkbox" name="city" class="city" value="' + output[i].id + '" id="' + output[i].city + '"/><span>' + output[i].city + '</span></label> </div>';
                        }
                    $("#citycheckboxes").html(temp_html);
                    setTimeout(function() {
                        $('#city-dropdown').trigger('click');
                    }, 200);
                }
            });
        });

        $("body").on("click", ".selectCategory", function () {
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
            list();
        },
        localPost: function () {
            localpost();
        },
        multiplePost: function(){
            multiplePost();
        },
    }
}();
