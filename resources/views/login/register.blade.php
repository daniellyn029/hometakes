@extends('main.index')

@section('css')
<style>
    .req-field{
        color:red;
    }
    /* .regbtn{
        background-color: #1877f2;
        border: none;
        border-radius: 6px;
        font-size: 20px;
        line-height: 48px;
        padding: 0 16px;
        width: 332px;
        color:#FFF;
    }
    label {
        display: inline-block;
        margin: 5px 0px 5px 0px;
    } */

/* sign in FORM */
#logreg-forms{
    width:100%;
    margin:10vh auto;
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
    transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms form {
    width: 100%;
    max-width: 100%;
    padding: 15px;
    margin: auto;
}
#logreg-forms .form-control {
    position: relative;
    box-sizing: border-box;
    height: auto;
    padding: 10px;
    font-size: 16px;
}



#logreg-forms a{
    display: block;
    padding-top:10px;
    color:lightseagreen;
}

/* #logreg-form .lines{
    width:200px;
    border:1px solid red;
} */


/* #logreg-forms button[type="submit"]{ margin-top:10px; } */


/* Mobile */

@media screen and (max-width:500px){
    #logreg-forms{
        width:300px;
    }
    
    #logreg-forms  .social-login{
        width:200px;
        margin:0 auto;
        margin-bottom: 10px;
    }
    #logreg-forms  .social-btn{
        font-size: 1.3rem;
        font-weight: 100;
        color:white;
        width:200px;
        height: 56px;
    }
    
}
    .capt{
        text-transform: capitalize
    }
</style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div id="logreg-forms">
                <form class="form-signin">
                    <h1 class="h3 mb-3 font-weight-normal" style="text-align: left">Create your hometakes account</h1>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="uname">Username:<span class="req-field"> *</span></label>
                            <input id="uname" type="text" class="form-control" name="uname" value="" required autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="password">Password:<span class="req-field"> *</span></label>
                            <input id="password" type="password" class="form-control" name="password" value="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="confirm_password">Confirm Password:<span class="req-field"> *</span><span class="badge" id="message" style="color:black"></span></label>
                            <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="">
                        </div>
                        {{-- <div class="col-md-6">
                            <label for="confirm_password">Confirm Password:<span class="req-field"> *</span><span class="badge" id="message" style="color:black"></span></label>
                            <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="">
                        </div> --}}

                        <div class="col-md-6">
                            <label for="fname">Firstname:<span class="req-field"> *</span></label>
                            <input id="fname" type="text" class="form-control capt" name="fname" value="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Lastname:<span class="req-field"> *</span></label>
                            <input id="lname" type="text" class="form-control capt" name="lname" value="" required>
                        </div>

                        <div class="col-md-6">
                            <label for="credentials">Credentials:<span class="req-field"> *</span></label>
                            <input id="credentials" type="text" class="form-control capt" name="credentials" value="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="mls_id">MLS Agent ID:<span class="req-field"> *</span></label>
                            <input id="mls_id" type="text" class="form-control" name="mls_id" value="" required>
                        </div>
                        <div class="col-md-12">
                            <label for="mls_area">MLS Area:</label>
                            <select  class="form-control" name="" id="">
                                <option value="" disabled selected hidden>--- SELECT ---</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email:<span class="req-field"> *</span></label>
                            <input id="email" type="email" class="form-control" name="email" value="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="cp_no">Cellphone #:<span class="req-field"> *</span></label>
                            <input id="cp_no" type="text" class="form-control" name="cp_no" value="" required>
                        </div>

                        <div class="col-md-12">
                            <label for="cpcarrier">Agent Cellphone Carrier:</label>
                            <select class="form-control">
                                <option value="" disabled selected hidden>--- SELECT ---</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="asst_cp">Assistant Cellphone # (If any):</label>
                            <input id="asst_cp" type="text" class="form-control" name="asst_cp" value="">
                        </div>
                        <div class="col-md-6">
                            <label for="web_name">Website Name:<span class="req-field"> *</span></label>
                            <input id="web_name" type="text" class="form-control capt" name="web_name" value="" required>
                        </div>

                        <div class="col-md-6">
                            <label for="brok_comp">Brokerage Company:<span class="req-field"> *</span></label>
                            <input id="brok_comp" type="text" class="form-control capt" name="brok_comp" value="" required>
                        </div>
                        <div class="col-md-6">
                            <label for="bill_add">Billing Address:<span class="req-field"> *</span></label>
                            <input id="bill_add" type="text" class="form-control capt" name="bill_add" value="" required>
                        </div> 

                        <div class="col-md-6">
                            <label for="city">City:<span class="req-field"> *</span></label>
                            <input id="city" type="text" class="form-control capt" name="city" value="" required>
                        </div> 
                        <div class="col-md-6">
                            <label for="zipc">Zipcode:<span class="req-field"> *</span></label>
                            <input id="zipc" type="text" class="form-control" name="zipc" value="" required>
                        </div> 

                        <div class="col-md-12">
                            <label for="city">Select City:</label>
                            <select class="form-control">
                                <option value="" disabled selected hidden>--- SELECT ---</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="comp_logo">Company Logo (Minimum 400 pixel wide):<span class="req-field"> *</span></label>
                            <input type="file" class="form-control" id="comp_logo" name="comp_logo">
                        </div> 
                        <div class="col-md-6">
                            <label for="agent_pho">Agent Photo (Minimum 400 pixel wide):<span class="req-field"> *</span></label>
                            <input type="file" class="form-control" id="agent_pho" name="agent_pho">
                        </div> 

                        <div class="col-md-12">
                            <label for="city">Where did you here about us?:</label>
                            <select class="form-control">
                                <option value="" disabled selected hidden>--- SELECT ---</option>
                                <option>From the MLS</option>
                                <option>Agent or Broker referral</option>
                                <option>Web Search</option>
                                <option>Email Marketing</option>
                                <option>Sales Call Offer</option>
                            </select>
                        </div>
                    </div>
                    <hr>
            
                    <!-- <p>Don't have an account!</p>  -->
                    
                    <button class="btn btn-primary pull-right" type="button" id="btn-signup"><i class="fa fa-user-plus"></i> Sign up</button>
                    <a href="{{ asset('/login')}}" id="cancel_signup"><i class="fa fa-angle-left"></i> Back</a>
                </form>
            </div>

            {{-- <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="font-size:20px;">Registration Form</div>
                    <div class="panel-body">
                        <form class="form-horizontal" id="register_form" enctype="multipart/form-data" method="POST">
                            {{csrf_field()}}
                            <div class="form-group">
                            
                                <div class="col-md-12">
                                    <label for="uname">Username:<span class="req-field"> *</span></label>
                                    <input id="uname" type="text" class="form-control capt" name="uname" value="" required autofocus>
                                </div>
                                <div class="col-md-6">
                                    <label for="password">Password:<span class="req-field"> *</span></label>
                                    <input id="password" type="password" class="form-control" name="password" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="confirm_password">Confirm Password:<span class="req-field"> *</span><span class="badge" id="message" style="color:black"></span></label>
                                    <input id="confirm_password" type="password" class="form-control" name="confirm_password" value="">
                                </div>

                                <div class="col-md-6">
                                    <label for="fname">Firstname:<span class="req-field"> *</span></label>
                                    <input id="fname" type="text" class="form-control capt" name="fname" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="lname">Lastname:<span class="req-field"> *</span></label>
                                    <input id="lname" type="text" class="form-control capt" name="lname" value="" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="credentials">Credentials:<span class="req-field"> *</span></label>
                                    <input id="credentials" type="text" class="form-control capt" name="credentials" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="mls_id">MLS Agent ID:<span class="req-field"> *</span></label>
                                    <input id="mls_id" type="text" class="form-control" name="mls_id" value="" required>
                                </div>
                                <div class="col-md-12">
                                    <label for="mls_area">MLS Area:<span class="req-field"> *</span></label>
                                    <select class="form-control">
                                        <option>--- SELECT ---</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email:<span class="req-field"> *</span></label>
                                    <input id="email" type="email" class="form-control" name="email" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="cp_no">Cellphone #:<span class="req-field"> *</span></label>
                                    <input id="cp_no" type="text" class="form-control" name="cp_no" value="" required>
                                </div>

                                <div class="col-md-12">
                                    <label for="cpcarrier">Agent Cellphone Carrier:<span class="req-field"> *</span></label>
                                    <select class="form-control">
                                        <option>--- SELECT ---</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="asst_cp">Assistant Cellphone # (If any):</label>
                                    <input id="asst_cp" type="text" class="form-control" name="asst_cp" value="">
                                </div>
                                <div class="col-md-6">
                                    <label for="web_name">Website Name:<span class="req-field"> *</span></label>
                                    <input id="web_name" type="text" class="form-control capt" name="web_name" value="" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="brok_comp">Brokerage Company:<span class="req-field"> *</span></label>
                                    <input id="brok_comp" type="text" class="form-control capt" name="brok_comp" value="" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="bill_add">Billing Address:<span class="req-field"> *</span></label>
                                    <input id="bill_add" type="text" class="form-control capt" name="bill_add" value="" required>
                                </div> 

                                <div class="col-md-6">
                                    <label for="city">City:<span class="req-field"> *</span></label>
                                    <input id="city" type="text" class="form-control capt" name="city" value="" required>
                                </div> 
                                <div class="col-md-6">
                                    <label for="zipc">Zipcode:<span class="req-field"> *</span></label>
                                    <input id="zipc" type="text" class="form-control" name="zipc" value="" required>
                                </div> 

                                <div class="col-md-12">
                                    <label for="city">Select City:<span class="req-field"> *</span></label>
                                    <select class="form-control">
                                        <option>--- SELECT ---</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label for="comp_logo">Company Logo (Minimum 400 pixel wide):<span class="req-field"> *</span></label>
                                    <input type="file" class="form-control" id="comp_logo" name="comp_logo">
                                </div> 
                                <div class="col-md-6">
                                    <label for="agent_pho">Agent Photo (Minimum 400 pixel wide):<span class="req-field"> *</span></label>
                                    <input type="file" class="form-control" id="agent_pho" name="agent_pho">
                                </div> 

                                <div class="col-md-12">
                                    <label for="city">Where did you here about us?:<span class="req-field"> *</span></label>
                                    <select class="form-control">
                                        <option>From the MLS</option>
                                        <option>Agent or Broker referral</option>
                                        <option>Web Search</option>
                                        <option>Email Marketing</option>
                                        <option>Sales Call Offer</option>
                                    </select>
                                </div>
                                
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <br>
                                            <button type="button" class="btn regbtn" onclick="checkForm()">
                                                Register
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div> --}}
            
        </div>
        {{-- /.Row --}}
    </div>
@endsection

@section('script')
<script>
    var lb_conf = false;
    
    $('#password, #confirm_password').on('keyup', function () {
        if ($('#password').val() ==  '' && $('#confirm_password').val() == '') {
            $('#message').html('');
            lb_conf = false;
            return;
        }
        if ($('#password').val() == $('#confirm_password').val()) {
            $('#message').html('').removeClass('badge-danger'); //.css('color', 'green');
            lb_conf = true;
        } else {
            $('#message').html(' Not Matching').addClass('badge-danger'); //.css('color', 'red');
            lb_conf = false;
        }
    });

    function checkForm() {
        if(!lb_conf) { return; }
        document.getElementById('register_form').submit();
    }
</script>
@endsection