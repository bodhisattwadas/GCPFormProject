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
   
    <!-- validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
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
                <div class="card">
                    <div class="card-header">
                        <h3>Form Type</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- three columns for form type -->
                            <div class="col-md-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="form_type_will" id="will" value="will">
                                    <label class="form-check-label" for="will">
                                        Will
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="form_type_marital_will" id="marital_will" value="marital_will">
                                    <label class="form-check-label" for="marital_will">
                                        Marital Will
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <!-- checkbox for health care directive -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="form_type[]" id="hcd" value="hcd"  disabled>
                            <label class="form-check-label" for="hcd">
                                Health Care Directive
                            </label>
                        </div>
                        <!-- checkbox for power of attorney -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="form_type[]" id="poa" value="poa"  disabled>
                            <label class="form-check-label" for="poa">
                                Power of Attorney
                            </label>
                        </div>
                            </div>
                         <!-- checkbox for revokable living trust -->   
                        <div class="col-md-3">
                        <!-- checkbox for revokable living trust -->
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="form_type[]" id="rlt" value="rlt"  disabled>
                                <label class="form-check-label" for="rlt">
                                    Revokable Living Trust
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="form_type[]" id="rltj" value="rltj"  disabled>
                                <label class="form-check-label" for="rltj">
                                    Revokable Living Trust Joint
                                </label>
                            </div>
                        
                            </div>
                            <div class="col-md-3">
                                <!-- checkbox for pour over will -->
                                <!-- disable checkbox -->
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="form_type[]" id="pow" value="pow" disabled>
                                    <label class="form-check-label" for="pow">
                                        Pour Over Will
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
                                <input type="text" name="client_name" id="client_name" placeholder="Enter your name" class="form-control" required>
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
                                

                                <label for="county">County</label>
                                <select class="form-control" id="county_name" name="county_name">
                                    
                                                <option value="Appling">Appling</option>
                                                <option value="Atkinson">Atkinson</option>
                                                <option value="Bacon">Bacon</option>
                                                <option value="Baker">Baker</option>
                                                <option value="Baldwin">Baldwin</option>
                                                <option value="Banks">Banks</option>
                                                <option value="Barrow">Barrow</option>
                                                <option value="Bartow">Bartow</option>
                                                <option value="Ben Hill">Ben Hill</option>
                                                <option value="Berrien">Berrien</option>
                                                <option value="Bibb">Bibb</option>
                                                <option value="Bleckley">Bleckley</option>
                                                <option value="Brantley">Brantley</option>
                                                <option value="Brooks">Brooks</option>
                                                <option value="Bryan">Bryan</option>
                                                <option value="Bulloch">Bulloch</option>
                                                <option value="Burke">Burke</option>
                                                <option value="Butts">Butts</option>
                                                <option value="Calhoun">Calhoun</option>
                                                <option value="Camden">Camden</option>
                                                <option value="Candler">Candler</option>
                                                <option value="Carroll">Carroll</option>
                                                <option value="Catoosa">Catoosa</option>
                                                <option value="Charlton">Charlton</option>
                                                <option value="Chatham">Chatham</option>
                                                <option value="Chattahoochee">Chattahoochee</option>
                                                <option value="Chattooga">Chattooga</option>
                                                <option value="Cherokee">Cherokee</option>
                                                <option value="Clarke">Clarke</option>
                                                <option value="Clay">Clay</option>
                                                <option value="Clayton">Clayton</option>
                                                <option value="Clinch">Clinch</option>
                                                <option value="Cobb">Cobb</option>
                                                <option value="Coffee">Coffee</option>
                                                <option value="Colquitt">Colquitt</option>
                                                <option value="Columbia">Columbia</option>
                                                <option value="Cook">Cook</option>
                                                <option value="Coweta">Coweta</option>
                                                <option value="Crawford">Crawford</option>
                                                <option value="Crisp">Crisp</option>
                                                <option value="Dade">Dade</option>
                                                <option value="Dawson">Dawson</option>
                                                <option value="DeKalb">DeKalb</option>
                                                <option value="Decatur">Decatur</option>
                                                <option value="Dodge">Dodge</option>
                                                <option value="Dooly">Dooly</option>
                                                <option value="Dougherty">Dougherty</option>
                                                <option value="Douglas">Douglas</option>
                                                <option value="Early">Early</option>
                                                <option value="Echols">Echols</option>
                                                <option value="Effingham">Effingham</option>
                                                <option value="Elbert">Elbert</option>
                                                <option value="Emanuel">Emanuel</option>
                                                <option value="Evans">Evans</option>
                                                <option value="Fannin">Fannin</option>
                                                <option value="Fayette">Fayette</option>
                                                <option value="Floyd">Floyd</option>
                                                <option value="Forsyth">Forsyth</option>
                                                <option value="Franklin">Franklin</option>
                                                <option value="Fulton">Fulton</option>
                                                <option value="Gilmer">Gilmer</option>
                                                <option value="Glascock">Glascock</option>
                                                <option value="Glynn">Glynn</option>
                                                <option value="Gordon">Gordon</option>
                                                <option value="Grady">Grady</option>
                                                <option value="Greene">Greene</option>
                                                <option value="Gwinnett">Gwinnett</option>
                                                <option value="Habersham">Habersham</option>
                                                <option value="Hall">Hall</option>
                                                <option value="Hancock">Hancock</option>
                                                <option value="Haralson">Haralson</option>
                                                <option value="Harris">Harris</option>
                                                <option value="Hart">Hart</option>
                                                <option value="Heard">Heard</option>
                                                <option value="Henry">Henry</option>
                                                <option value="Houston">Houston</option>
                                                <option value="Irwin">Irwin</option>
                                                <option value="Jackson">Jackson</option>
                                                <option value="Jasper">Jasper</option>
                                                <option value="Jeff Davis">Jeff Davis</option>
                                                <option value="Jefferson">Jefferson</option>
                                                <option value="Jenkins">Jenkins</option>
                                                <option value="Johnson">Johnson</option>
                                                <option value="Jones">Jones</option>
                                                <option value="Lamar">Lamar</option>
                                                <option value="Lanier">Lanier</option>
                                                <option value="Laurens">Laurens</option>
                                                <option value="Lee">Lee</option>
                                                <option value="Liberty">Liberty</option>
                                                <option value="Lincoln">Lincoln</option>
                                                <option value="Long">Long</option>
                                                <option value="Lowndes">Lowndes</option>
                                                <option value="Lumpkin">Lumpkin</option>
                                                <option value="McDuffie">McDuffie</option>
                                                <option value="McIntosh">McIntosh</option>
                                                <option value="Macon">Macon</option>
                                                <option value="Madison">Madison</option>
                                                <option value="Marion">Marion</option>
                                                <option value="Meriwether">Meriwether</option>
                                                <option value="Miller">Miller</option>
                                                <option value="Mitchell">Mitchell</option>
                                                <option value="Monroe">Monroe</option>
                                                <option value="Montgomery">Montgomery</option>
                                                <option value="Morgan">Morgan</option>
                                                <option value="Murray">Murray</option>
                                                <option value="Muscogee">Muscogee</option>
                                                <option value="Newton">Newton</option>
                                                <option value="Oconee">Oconee</option>
                                                <option value="Oglethorpe">Oglethorpe</option>
                                                <option value="Paulding">Paulding</option>
                                                <option value="Peach">Peach</option>
                                                <option value="Pickens">Pickens</option>
                                                <option value="Pierce">Pierce</option>
                                                <option value="Pike">Pike</option>
                                                <option value="Polk">Polk</option>
                                                <option value="Pulaski">Pulaski</option>
                                                <option value="Putnam">Putnam</option>
                                                <option value="Quitman">Quitman</option>
                                                <option value="Rabun">Rabun</option>
                                                <option value="Randolph">Randolph</option>
                                                <option value="Richmond">Richmond</option>
                                                <option value="Rockdale">Rockdale</option>
                                                <option value="Schley">Schley</option>
                                                <option value="Screven">Screven</option>
                                                <option value="Seminole">Seminole</option>
                                                <option value="Spalding">Spalding</option>
                                                <option value="Stephens">Stephens</option>
                                                <option value="Stewart">Stewart</option>
                                                <option value="Sumter">Sumter</option>
                                                <option value="Talbot">Talbot</option>
                                                <option value="Taliaferro">Taliaferro</option>
                                                <option value="Tattnall">Tattnall</option>
                                                <option value="Taylor">Taylor</option>
                                                <option value="Telfair">Telfair</option>
                                                <option value="Terrell">Terrell</option>
                                                <option value="Thomas">Thomas</option>
                                                <option value="Tift">Tift</option>
                                                <option value="Toombs">Toombs</option>
                                                <option value="Towns">Towns</option>
                                                <option value="Treutlen">Treutlen</option>
                                                <option value="Troup">Troup</option>
                                                <option value="Turner">Turner</option>
                                                <option value="Twiggs">Twiggs</option>
                                                <option value="Union">Union</option>
                                                <option value="Upson">Upson</option>
                                                <option value="Walker">Walker</option>
                                                <option value="Walton">Walton</option>
                                                <option value="Ware">Ware</option>
                                                <option value="Warren">Warren</option>
                                                <option value="Washington">Washington</option>
                                                <option value="Wayne">Wayne</option>
                                                <option value="Webster">Webster</option>
                                                <option value="Wheeler">Wheeler</option>
                                                <option value="White">White</option>
                                                <option value="Whitfield">Whitfield</option>
                                                <option value="Wilcox">Wilcox</option>
                                                <option value="Wilkes">Wilkes</option>
                                                <option value="Wilkinson">Wilkinson</option>
                                                <option value="Worth">Worth</option>
                                        </select>
                            
                            
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
                                <input type="text" name="co_client_name" id="co_client_name" placeholder="Enter full name" class="form-control" required>
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
                                    <input type="text" name="backup_name" id="backup_name" class="form-control" placeholder="Enter Name" required>
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
                                    <input type="text" name="second_backup_name" id="second_backup_name" class="form-control" placeholder="Enter Name" required>
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
                                <input type="text" name="witness_1" id="witness_1" class="form-control" placeholder="Enter Name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Witness 2</label>
                                <input type="text" name="witness_2" id="witness_2" class="form-control" placeholder="Enter Name" required>
                                </div>
                        </div>
                    </div>
                    </div>
                </div>
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
        //validation rules
        function validateForm(){
            $('#myForm').validate({
                rules:{
                    client_name: "required",
                    co_client_name: "required",
                    backup_name: "required",
                    second_backup_name: "required",
                    witness_1: "required",
                    witness_2: "required",
                    children: "required",
                },
                messages:{
                    client_name: "Please enter your name",
                    co_client_name: "Please enter your spouse name",
                    backup_name: "Please enter your backup name",
                    second_backup_name: "Please enter your second backup name",
                    witness_1: "Please enter your witness 1 name",
                    witness_2: "Please enter your witness 2 name",
                    children: "Please select number of children",
                }
                   
        });
        }
        function submitForm(){
            //validate form
            //validateForm();
            
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