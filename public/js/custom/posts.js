let myEditor2;
let myEditor3;
var Posts = function () {

    var list = function () {

        ClassicEditor.create(document.querySelector('#ckeditor2'))
        .then(editor => {
            editor.ui.view.editable.element.style.height = '300px';
            myEditor2 = editor;
        })
        .catch(error => {
            console.error(error);
        });

        setTimeout(function() {
            $('#country-dropdown').trigger('change');
            $('#category-dropdown').trigger('change');
        }, 200);

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
                        }
                        city_checkbox_html += '<div class="space-x-2"><input type="checkbox" name="city_id1[]"  value="' + output[0].id + '"><label for="city_id" class="text-gray-700 text-base leading-7 font-semibold">' + output[0].city + ' </label></div>';
                    $("#city-dropdown").html(temp_html);
                    $("#city-checkbox").html(city_checkbox_html);
                    $('input[name="city_id1[]"]').get(0).checked = true;
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

        ClassicEditor.create(document.querySelector('#ckeditor3'))
        .then(editor => {
            editor.ui.view.editable.element.style.height = '300px';
            myEditor3 = editor;
        })
        .catch(error => {
            console.error(error);
        });
    
       
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
                    $('input[name="city_id1[]"]').get(0).checked = true;
                    
                    
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

        ClassicEditor.create(document.querySelector('#ckeditor4'))
        .then(editor => {
            editor.ui.view.editable.element.style.height = '300px';
            B.config.enterMode==3?'div':''
            myEditor4 = editor;
        })
        .catch(error => {
            console.error(error);
        });
       
        $("body").on("click", ".selectStateBox", function () { 
            $("#statecheckboxes").toggleClass("showMutipleDropDown");
        });

        $("body").on("click", ".selectCityBox", function () { 
            $("#citycheckboxes").toggleClass("showMutipleDropDown");
        });

        $("body").on("change", ".selectCountry", function () {
            var id = $('#country-dropdown').val();
            $.ajax({
                method: "POST",
                url:  base_url + "post-adds-ajax",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {'action': 'getCountryStateByContinent','id' : id},
                type: "json",
                success: function(data) {
                    var output = JSON.parse(data);
                    var temp_html = '';
                        for (var i = 0; i < output.length; i++) {
                               temp_html += '<div class="space-x-4"><label for="' + output[i].country_state + '" class="px-2 text-gray-700 text-base leading-7 font-semibold space-x-1"><input type="checkbox" name="country_state_id[]" class="selectstate" value="' + output[i].id + '" id="' + output[i].country_state + '"/><span>' + output[i].country_state + '</span></label> </div>';
                        }
                    $("#statecheckboxes").html(temp_html);
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
                    var city_checkbox_html = '';
                        for (var i = 0; i < output.length; i++) {
                            // temp_html += '<div class="space-x-4"><label for="' + output[i].city + '" class="px-2 text-gray-700 text-base leading-7 font-semibold space-x-2"><input type="checkbox" name="city" class="city" value="' + output[i].id + '" id="' + output[i].city + '" checked/><span>' + output[i].city + '</span></label> </div>';
                            city_checkbox_html += '<div class="space-x-2"><input type="checkbox" name="city_ids[]"  value="' + output[i].id + '" checked><label for="city_id" class="text-gray-700 text-base leading-7 font-semibold">' + output[i].city + ' </label></div>';
                        }
                    // $("#citycheckboxes").html(temp_html);
                    $("#city-checkbox").html(city_checkbox_html);

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

        // ckeditor4.editorConfig = function( ckeditor4 ) {
        //     ckeditor4.enterMode = CKEDITOR.ENTER_BR; // pressing the ENTER KEY input <br/>
        //     ckeditor4.shiftEnterMode = CKEDITOR.ENTER_P; //pressing the SHIFT + ENTER KEYS input <p>
        //     ckeditor4.autoParagraph = false; // stops automatic insertion of <p> on focus
        //      };

        var validateForm = function () {
            
            $("#addform").validate({
                // Specify validation rules
                rules: {
                    title: "required",
                    description: "required",
                    location: "required",
                    contact_email: {
                        required: true,
                         contact_email:true,
                        // regEmail:/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g,
                        contact_email:focus(),
                    },      
                    mobile_number: {
                        required: true,
                        digits: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                     age: {
                        required: true,
                        digits: true,
                        maxlength: 03,
                    },
                    continent_id:"required",
                },
                messages: {
                 title: {
                    required: "Please enter title",
                 },      
                 description: {
                    required: "Please enter description",
                 },   
                 location: {
                    required: "Please enter location",
                 },    
                 mobile_number: {
                    required: "Please enter phone number",
                    digits: "Please enter valid phone number",
                    minlength: "Phone number field accept only 10 digits",
                    maxlength: "Phone number field accept only 10 digits",
                 },     
                 contact_email: {
                    required: "Please enter email address",
                    contact_email: "Please enter a valid email address.",
                    // regEmail:"Please enter a valid email address",

                 },
                 age: {
                    required: "Please enter age",
                    digits: "Please enter valid  age",
                    maxlength: "age field accept only 2 digits",
                   },   
                   continent_id: {
                    required: "Please select Continent/country",
                    
                 }, 
                },
              
              });
            }
          
            $('input[name="is_premium_ad"]').click(function(){ 
                if ( $( is_premium_ad ).prop( "checked" ) ) {
                    $('#is_premium_ad').val(1);
                } else {
                    $('#is_premium_ad').val(0);
                }
            });


    return {
        init: function () {
            list();
            validateForm(); 

        },
        localPost: function () {
            localpost();
            validateForm();
           
           
        },
        multiplePost: function(){
            multiplePost();
            validateForm();
        },
        
    }
}();
