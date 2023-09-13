<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Form</title>
    <!-- bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- jquery.min.js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <!-- bootsrap CDN -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   
   
    <style>
        .container{
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .card-header{
            background-color: #007bff;
            color: #fff;
        }
        .card-header h3{
            margin-bottom: 0;
            font-size: 20px;
            text-transform: uppercase;
        }
        /** increase checkbox size*/
        .form-check-input{
            width: 20px;
            height: 20px;
        }
        /** increase checkbox label size*/
        .form-check-label{
            font-size: 20px;
            margin-left: 5px;
        }
        </style>
</head>
<body>
    <!-- center form name header -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-uppercase">Client Form</h1>
            </div>
        </div>
    </div>
    <div class="container">
            <form id="myForm">
                @csrf
                <!-- hide current date time field-->
                {{-- <input type="hidden" name="current_date_time" value="{{date('Y-m-d H:i:s')}}"> --}}
                <!-- select option for form type -->
                @include('form-type')        
                <!-- Client and spouse details-->
                @include('client-info')
                <!-- Client and spouse details end -->
                <!-- Children Information -->
                @include('children-info')
                <!-- Children Information end -->
                <!-- Assets Information and executor information-->
                @include('assets-info')
                <!-- Assets Information and executor information end-->
                <!-- Misc information and life insurance-->
                @include('misc-info')
                <!-- Misc information and life insurance end-->
                <!-- Backup information-->
                @include('backup-info')
                <!-- Backup information end-->
                <!-- Witness information-->
                @include('witness-info')
                <!-- Witness information end-->
                <!-- Submit button-->
                <div class="row mt-2">
                    <div class="col-md-4"><button type="button" class="btn btn-info btn-block" onclick="submitForm()">Submit</button></div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4"></div>
                </div>
                <!-- Submit button end-->

                
            </form>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <p id="modalBody"></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                  </div>
                </div>
              </div>
    </div>
    
    <script>
        function submitForm(){
            //get form data
            var formData = $('#myForm').serialize();
            console.log(formData);
            //console.log(formData);
            //ajax call
            var scriptID = 'AKfycbyKxB9mq0QhpgfHq8zPlE-P6iNOd2pFAVWSHkhwyWuJLW-qnbH0dW8j2GdEk8Wj8WCr';
            $.ajax({
                url: "https://script.google.com/macros/s/"+scriptID+"/exec",
                type: "GET",
                data: formData,
                crossDomain: true,
                success: function(response){
                    console.log(response);
                }
            });
        }
        $(
            function(){
                $('#children').on('change', function(){
                    var children = $(this).val();
                    var html = '';
                    for(var i=0; i<children; i++){
                        //random background color of row
                        //select color from array of 10 colors
                        var colors = [
                                        "#FFDAB9", // Peach Puff
                                        "#E0FFFF", // Light Cyan
                                        "#FFE4B5", // Moccasin
                                        "#FFB6C1", // Light Pink
                                        "#FFF0F5", // Lavender Blush
                                        "#FAEBD7", // Antique White
                                        "#FFE4E1", // Misty Rose
                                        "#E6E6FA", // Lavender
                                        "#F0FFF0", // Honeydew
                                        "#FFFACD"  // Lemon Chiffon
                                        ]
                                        ;
                         var color = colors[Math.floor(Math.random() * colors.length)];
                        html += '<div class="row mt-2" style="background-color: '+color+'">';
                        //html += '<div class="row mt-2 bg-info">';
                        // generate field for child name , address , dob and phone number
                        html += '<div class="form-group col-md-3"><label for="children">Child '+(i+1)+' Name</label><input type="text" class="form-control" id="name_child'+(i+1)+'" name="name_child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Name" required></div>';
                        html += '<div class="form-group col-md-3"><label for="children">Child '+(i+1)+' Address</label><input type="text" class="form-control" id="address_child'+(i+1)+'" name="address_child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Address"></div>';
                        html += '<div class="form-group col-md-3"><label for="children">Child '+(i+1)+' Date of Birth</label><input type="date" class="form-control" id="dob_child'+(i+1)+'" name="dob_child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Date of Birth" required></div>';
                        html += '<div class="form-group col-md-3"><label for="children">Child '+(i+1)+' Phone Number</label><input type="text" class="form-control" id="phone_child'+(i+1)+'" name="phone_child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Phone Number"></div>';
                        html += '</div>';
                         //html += '<div class="form-group"><label for="children">Child '+(i+1)+' Name</label><input type="text" class="form-control" id="child'+(i+1)+'" name="child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Name"></div>';
                    }
                    $('#childrenInformation').html(html);
                });
            }
        )
    </script>
</body>
</html>