<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client Form</title>
    <link rel="stylesheet" href="{{ asset('resources/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('resources/assets/css/style.css') }}">
    <script src="{{ asset('resources/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('resources/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('resources/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('resources/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('resources/assets/js/script.js') }}"></script>
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
    <!-- gif loader -->
    
    <div class="container">
        
            <form id="myForm">
                @csrf
                <!-- select option for form type -->
                @include('form_type') 
                <!-- Client and spouse details-->
                @include('client_spouse_details')              
                <!-- Client and spouse details end -->
                <!-- Children Information -->
                @include('children_info')               
                <!-- Children Information end -->
                <!-- Assets Information and executor information-->
                @include('assets_info_executor_info')                
                <!-- Assets Information and executor information end-->
                <!-- Misc information and life insurance-->
                @include('misc_info')               
                <!-- Misc information and life insurance end-->
                <!-- Backup information-->
                @include('backup_info')
                <!-- Backup information end-->
                <!-- Witness information-->
                @include('witness_info')
                <!-- Witness information end-->
                <!-- Additional information-->
                @include('additional_info')
               <!-- Additional information end-->
                <!-- Residue Information -->
                @include('residue_info')
                <!-- Residue Information end-->

                
                <!-- Submit button-->
                <div class="row mt-2">
                    <div class="col-md-4"><button type="button" class="btn btn-info btn-block" onclick="submitForm()" id="mySubmitButton">Submit</button></div>
                    <div class="col-md-4">
                        <div class="loader" id="loader" style="display: none;">
                            <img src="{{ asset('resources/assets/images/loading.gif') }}" alt="loading">
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                </div>
                <!-- Submit button end-->
            </form>
    </div>
  
</body>
</html>