
var text0 = '';
var text1 = 'Upon my wife’s death, my Trustee shall distribute the remaining amount of this Trust Corpus to my then living children and my wife’s then living children, in equal shares, one share for then living child, subject to the Descendant’s Trust. If any child has predeceased this distribution, then that child’s share shall be distributed to that child’s descendants, per stirpes. Should a child predecease this distribution and leave no issue, then that child’s share shall be distributed to my then living children and my wife’s then living children, in equal shares, one share for then living child. If any child has predeceased this distribution, then that child’s share shall be distributed to that child’s descendants, per stirpes.';
var text2 = 'Upon my husband’s death, my Trustee shall distribute the remaining amount of this Trust Corpus to my then living children and my husband’s then living children, in equal shares, one share for then living child, subject to the Descendant’s Trust. If any child has predeceased this distribution, then that child’s share shall be distributed to that child’s descendants, per stirpes. Should a child predecease this distribution and leave no issue, then that child’s share shall be distributed to my then living children and my husband’s then living children, in equal shares, one share for then living child. If any child has predeceased this distribution, then that child’s share shall be distributed to that child’s descendants, per stirpes.';
var text3 = 'All the rest and residue of my property of every kind and description, and wherever located, including any lapsed, disclaimed or void legacy or devise (but expressly excluding any property over which I may have the power of disposition or appointment), I give, bequeath, and devise as follows: 35% of my Residue shall be distributed outright to JAMES ROMEDY, JR., if he is then living. If he is not then living then his share shall go to his children, in equal shares, per stirpes, subject to the Descendant’s Trust. 35% of my Residue shall be distributed to my stepdaughter BREANNA SWETLAND, if she is then living. If she is not then living then her share shall go to her daughter, subject to the Descendant’s Trust. 30% of my Residue shall be distributed in equal shares, per stirpes, to my grandchildren, as named herein. If any of the previously named beneficiaries, are not then living, then the residue shall distribute in equal shares to the Beneficiary’s issue, per stirpes, subject to the Descendant’s Trust';
var text4 = 'All the rest and residue of my property of every kind and description, and wherever located, including any lapsed, disclaimed or void legacy or devise (but expressly excluding any property over which I may have the power of disposition or appointment), I give, bequeath, and devise outright to my children. If not then living, then the residue shall be divided and distributed outright in equal shares to my children, per stirpes. If a child does not survive me, then I give, bequeath, and devise his or her share to the Descendant’s Trust, per stirpes, for each such predeceased child’s children, per stirpes, then living under the terms of the Descendant’s Trust, hereinafter described. ';
var text5 = ' Upon the second to die of the Grantors, we  ';

//onready add event listener to checkbox
$(document).ready(function(){
    $('.rlt_extra_text').hide();
    //add event listener to addition_information_select
    $('#additional_information_select').on('change', function(){
        console.log('hello');
        //get value of select
        var value = $(this).val();
        if(value == 'option1'){
            $('#additional_information').val(text1);
        }
        else if(value == 'option2'){
            $('#additional_information').val(text2);
        }
        else if(value == 'option3'){
            $('#additional_information').val(text3);
        }else if(value == 'option4'){
            $('#additional_information').val(text4);
        }else if(value == 'option5'){
            $('#additional_information').val(text5);
        }else{
            $('#additional_information').val(text0);
        }

    });

});

function _getExtraURLString(arr,tag){
    //if tag is not in arr
    if(!arr.includes(tag)){
        return '&form_type=none';
    }else{
        return '&form_type='+tag;
    }
}
function submitForm(){
    var checked_types = [];
    $.each($("input[name='checked_type[]']:checked"), function(){
        checked_types.push($(this).val());
    });
    var scriptID = 'AKfycbwVnm_xLXEES8RJJvfTGlJZNU7j6yzDjILdTh6wQfLW9OcoJQXkVvzAvOl6QniQbNs';
    var URL = "https://script.google.com/macros/s/"+scriptID+"/exec";
    $.ajax({
        url: URL,
        type: 'GET',
        data: $('#myForm').serialize()+_getExtraURLString(checked_types,'will'),
        beforeSend: function(){
            $('#loader').show();
            $('#mySubmitButton').hide();
        },
        success: function(data){
            console.log(data);
            $.ajax({
                url: URL,
                type: 'GET',
                data: $('#myForm').serialize()+_getExtraURLString(checked_types,'marital_will'),
                success: function(data){
                    console.log(data);
                    $.ajax({
                        url: URL,
                        type: 'GET',
                        data: $('#myForm').serialize()+_getExtraURLString(checked_types,'hcd'),
                        success: function(data){
                            console.log(data);
                            $.ajax({
                                url: URL,
                                type: 'GET',
                                data: $('#myForm').serialize()+_getExtraURLString(checked_types,'poa'),
                                success: function(data){
                                    console.log(data);
                                    $.ajax({
                                            url: URL,
                                            type: 'GET',
                                            data: $('#myForm').serialize()+_getExtraURLString(checked_types,'rlt'),
                                            success: function(data){
                                                console.log(data);
                                                $.ajax({
                                                    url: URL,
                                                    type: 'GET',
                                                    data: $('#myForm').serialize()+_getExtraURLString(checked_types,'rltj'),
                                                    success: function(data){
                                                        console.log(data);
                                                        $.ajax({
                                                            url: URL,
                                                            type: 'GET',
                                                            data: $('#myForm').serialize()+_getExtraURLString(checked_types,'pow'),
                                                            success: function(data){
                                                                console.log(data);
                                                                //enable submit button
                                                                // $('#mySubmitButton').show();
                                                                // $('#loader').hide();
                                                                $.ajax({
                                                                    url: URL,
                                                                    type: 'GET',
                                                                    data: $('#myForm').serialize()+'&form_type=portfolio',
                                                                    success: function(data){
                                                                        //enable submit button
                                                                        $('#mySubmitButton').show();
                                                                        $('#loader').hide();
                                                                        //reset form data
                                                                        $('#myForm').trigger("reset");
                                                                    }
                                                                });
                                                            }
                                                        });
                                                    }
                                                });
                                            }
                                        });
                                }
                            });
                        }
                    });
                }
            });
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

