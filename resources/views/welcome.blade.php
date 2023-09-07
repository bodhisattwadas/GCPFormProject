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
    
     <!-- jquery js cdn -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
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
            <form action="{{route('form.submit')}}" method="post">
                @csrf
                
                <!-- select option for form type -->
                            <div class="card">
                                <div class="card-header">
                                    <h3>Form Type</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <!-- three columns for form type -->
                                        <div class="col-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="form_type[]" id="will" value="will">
                                                <label class="form-check-label" for="will">
                                                    Will
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="form_type[]" id="maritalwill" value="maritalwill">
                                                <label class="form-check-label" for="maritalwill">
                                                    Marital Will
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- checkbox for health care directive -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="form_type[]" id="hcd" value="hcd">
                                        <label class="form-check-label" for="hcd">
                                            Health Care Directive
                                        </label>
                                    </div>
                                    <!-- checkbox for power of attorney -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="form_type[]" id="poa" value="poa">
                                        <label class="form-check-label" for="poa">
                                            Power of Attorney
                                        </label>
                                    </div>
                                        </div>
                                        <div class="col-md-4">
                                            <!-- checkbox for pour over will -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="form_type[]" id="pow" value="pow">
                                        <label class="form-check-label" for="pow">
                                            Pour Over Will
                                        </label>
                                    </div>
                                    <!-- checkbox for revokable living trust -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="form_type[]" id="rlt" value="rlt">
                                        <label class="form-check-label" for="rlt">
                                            Revokable Living Trust
                                        </label>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                <!-- Client and spouse details-->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>A. Client Information</h3>
                            </div>
                            <div class="card-body">
                            <!-- add gender radio button -->
                            <div class="form-group">
                                <!-- Gender Radio Box -->
                                <label for="gender">Gender</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="male" value="male" checked>
                                        <label class="form-check-label" for="male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                        <label class="form-check-label" for="female">
                                            Female
                                        </label>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Full Name:</label>
                                <input type="text" name="name" id="name" placeholder="Enter your name" class="form-control">
                            </div>
                            <!-- add address field -->
                            <div class="form-group">
                                <label for="address">Address:</label>
                                <input type="text" name="address" id="address" placeholder="Enter your address" class="form-control">
                            </div>
                            <!-- add contact number field -->
                            <div class="form-group">
                                <label for="contact">Contact Number:</label>
                                <input type="text" name="contact" id="contact" placeholder="Enter your contact number" class="form-control">
                            </div>
                            <!-- add birthday field -->
                            <div class="form-group">
                                <label for="birthday">Birthday:</label>
                                <input type="date" name="birthday" id="birthday" placeholder="Enter your birthday" class="form-control">
                            </div>
                            <!-- add SSN-->
                            <div class="form-group">
                                <label for="ssn">SSN:</label>
                                <input type="text" name="ssn" id="ssn" placeholder="Enter your SSN" class="form-control">
                            </div>
                            <!-- add email field -->
                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="text" name="email" id="email" placeholder="Enter your email" class="form-control">
                            </div>
                           
                            <div class="form-group">
                                @include('county')
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                <h3>Co-client Information [Spouse of Client]</h3>
                            </div>
                            <div class="card-body">
                            <!-- add co-client name field -->
                            <div class="form-group">
                                <label for="co_client_name">Co-client Name:</label>
                                <input type="text" name="co_client_name" id="co_client_name" placeholder="Enter full name" class="form-control">
                            </div>
                            <!-- add co-client address field -->
                            <div class="form-group">
                                <label for="co_client_address">Co-client Address:</label>
                                <input type="text" name="co_client_address" id="co_client_address" placeholder="Enter address" class="form-control">
                            </div>
                            <!-- add co-client contact number field -->
                            <div class="form-group">
                                <label for="co_client_contact">Co-client Contact Number:</label>
                                <input type="text" name="co_client_contact" id="co_client_contact" placeholder="Enter contact number" class="form-control">
                                </div>
                            <!-- add co-client birthday field -->
                            <div class="form-group">
                                <label for="co_client_birthday">Co-client Birthday:</label>
                                <input type="date" name="co_client_birthday" id="co_client_birthday" placeholder="Enter birthday" class="form-control">
                                </div>
                            <!-- add co-client SSN field -->
                            <div class="form-group">
                                <label for="co_client_ssn">Co-client SSN:</label>
                                <input type="text" name="co_client_ssn" id="co_client_ssn" placeholder="Enter SSN" class="form-control">
                                </div>
                            <!-- add co-client email field -->
                            <div class="form-group">
                                <label for="co_client_email">Co-client Email:</label>
                                <input type="text" name="co_client_email" id="co_client_email" placeholder="Enter email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Client and spouse details end -->
                <!-- Children Information -->
                <div class="row mt-2">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"><h3>B. Children Information</h3></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="children">Number of Children</label>
                                    <select class="form-control" id="children" name="children" onselect="addChildrenInformation">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                    </select>
                                </div>
                                <div id="childrenInformation"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                <!-- Children Information end -->
                <!-- Assets Information and executor information-->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><h3>C. Real estate (if applicable)</h3></div>
                            <div class="card-body">
                                <!-- address 1-->
                                <div class="form-group">
                                    <label for="address1">Address 1</label>
                                    <input type="text" name="address1" id="address1" class="form-control" placeholder="Address 1">
                                </div>
                                <!-- address 2-->
                                <div class="form-group">
                                    <label for="address2">Address 2</label>
                                    <input type="text" name="address2" id="address2" class="form-control" placeholder="Address 2">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><h3>Executor</h3></div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="executor">Who is your Executor ?</label>
                                    <input type="text" name="executor" id="executor" class="form-control" placeholder="Enter the name of Executor">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Assets Information and executor information end-->
                <!-- Misc information and life insurance-->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><h3>D. Misc information</h3></div>
                            <div class="card-body">
                                <!-- yes no select-->
                                <label for="ira_yes_no">IRA/401K/403B  ?</label>
                                <select name="ira_yes_no" id="ira_yes_no" class="form-control">
                                    <option value="yes" checked>Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><h3>E. Life Insurance</h3></div>
                            <div class="card-body">
                                <!-- yes no select-->
                                <label for="lic_yes_no">Life insurance  ?</label>
                                <select name="lic_yes_no" id="lic_yes_no" class="form-control">
                                    <option value="yes" checked>Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Misc information and life insurance end-->
                <!-- Backup information-->
                <div class="row mt-2">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><h3>Backup</h3></div>
                            <div class="card-body">
                                <!-- name , address , phone number of backup-->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="backup_name" id="backup_name" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="backup_address" id="backup_address" class="form-control" placeholder="Enter Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="backup_phone" id="backup_phone" class="form-control" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header"><h3>Second Backup</h3></div>
                            <div class="card-body">
                                <!-- name address phone number of second backup-->
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="second_backup_name" id="second_backup_name" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <textarea name="second_backup_address" id="second_backup_address" class="form-control" placeholder="Enter Address"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="phone">Phone Number</label>
                                    <input type="text" name="second_backup_phone" id="second_backup_phone" class="form-control" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Backup information end-->
                <!-- Witness information-->
                <div class="row mt-2">
                    <div class="col-md-6">
                    <div class="card">
                        <div class="card-header"><h3>Witness</h3></div>
                        <div class="card-body">
                            <!-- name of witness1 and witness 2-->
                            <div class="form-group">
                                <label for="name">Witness 1</label>
                                <input type="text" name="witness1_name" id="witness1_name" class="form-control" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="name">Witness 2</label>
                                <input type="text" name="witness2_name" id="witness2_name" class="form-control" placeholder="Enter Name">
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Witness information end-->
                <!-- Submit button-->
                <div class="row mt-2">
                    <div class="col-md-4"><button type="submit" class="btn btn-info btn-block" disabled>Submit</button></div>
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
        //onsubmit show all details in bootstrap modal
         $(document).ready(function(){
            $('form').on('submit', function(e){
                e.preventDefault();
                //get all form data
                var data = $(this).serialize();
                //show bootstrap modal
                $('#exampleModal').modal('show');
                //show form data in modal body

                $('#modalBody').html(data);
            });
        });
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
                        html += '<div class="form-group col-md-3"><label for="children">Child '+(i+1)+' Name</label><input type="text" class="form-control" id="name_child'+(i+1)+'" name="name_child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Name"></div>';
                        html += '<div class="form-group col-md-3"><label for="children">Child '+(i+1)+' Address</label><input type="text" class="form-control" id="address_child'+(i+1)+'" name="address_child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Address"></div>';
                        html += '<div class="form-group col-md-3"><label for="children">Child '+(i+1)+' Date of Birth</label><input type="date" class="form-control" id="dob_child'+(i+1)+'" name="dob_child'+(i+1)+'" placeholder="Enter Child '+(i+1)+' Date of Birth"></div>';
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