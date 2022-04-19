@extends('main.index')

@section('css')
<style>
.req-field{
    color:red;
}
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
.mar1{
    margin-bottom:1%;
}
.btn:hover {
    opacity: 1;
}
#insta {
    background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
    -webkit-background-clip: text;
    /* Also define standard property for compatibility */
        background-clip: text;
    -webkit-text-fill-color: transparent;
    
    font-size: 2em; /* change this to change the size*/
  
}

/* .disimg{
   
  max-width:180px;
padding:10px;
}  */
</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        
        <div id="logreg-forms">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: left"> Update Account Information</h1>
            <form class="form-edit" enctype="multipart/form-data" method="POST">
                {{csrf_field()}}
                {{-- <h1 class="h3 mb-3 font-weight-normal" style="text-align: left"> Update Account Information</h1> --}}
                <div class="row">
                    <div class="col-md-6">
                        <label for="uname">Username:<span class="req-field"> *</span></label>
                        <input id="uname" type="text" class="form-control" name="uname" value="{{$users->username}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="password">Password:<span class="req-field"> *</span></label>
                        <input id="password" type="password" class="form-control" name="password" value="{{$users->pwd}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="fname">Firstname:<span class="req-field"> *</span></label>
                        <input id="fname" type="text" class="form-control" value="{{$users->fname}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Lastname:<span class="req-field"> *</span></label>
                        <input id="lname" type="text" class="form-control" value="{{$users->lname}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="credentials">Credentials:<span class="req-field"> *</span></label>
                        <input id="credentials" type="text" class="form-control" value="{{$users->credentials}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="mls_id">MLS Agent ID:<span class="req-field"> *</span></label>
                        <input id="mls_id" type="text" class="form-control" value="{{$users->mls_agent_id}}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="mls_area">MLS Area:</label>
                        <select class="form-control">
                            <option>{{$users->mls_area}}</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email:<span class="req-field"> *</span></label>
                        <input id="email" type="email" class="form-control" value="{{$users->email}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="cp_no">Cellphone #:<span class="req-field"> *</span></label>
                        <input id="cp_no" type="text" class="form-control" value="{{$users->phone}}" required>
                    </div>
                    <div class="col-md-12">
                        <label for="cpcarrier">Agent Cellphone Carrier 1:</label>
                        <select class="form-control">
                            <option>{{$users->phone1_carrier}}</option>
                        </select>
                    </div>
                      <div class="col-md-12">
                        <label for="cpcarrier">Agent Cellphone Carrier 2:</label>
                        <select class="form-control">
                            <option>{{$users->phone2_carrier}}</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="asst_cp">Assistant Cellphone # (If any):</label>
                        <input id="asst_cp" type="text" class="form-control" value="{{$users->assist_phone}}">
                    </div>
                    <div class="col-md-6">
                        <label for="web_name">Website Name:<span class="req-field"> *</span></label>
                        <input id="web_name" type="text" class="form-control" value="{{$users->website}}" required>
                    </div>
                    <div class="col-md-6">
                        <label for="brok_comp">Brokerage Company:<span class="req-field"> *</span></label>
                        <input id="company" type="text" class="form-control" value="{{$users->company}}" required>
                    </div>
                    {{-- billin address --}}
                    <div class="col-md-6">
                        <label for="office_add">Office Address:<span class="req-field"> *</span></label>
                        <input id="office_add" type="text" class="form-control" value="{{$users->address}}" required>
                    </div> 
                    <div class="col-md-6">
                        <label for="city">City:<span class="req-field"> *</span></label>
                        <input id="city" type="text" class="form-control" value="{{$users->city}}" required>
                    </div> 
                    <div class="col-md-6">
                        <label for="zipc">Zipcode:<span class="req-field"> *</span></label>
                        <input id="zipc" type="text" class="form-control" value="{{$users->zip}}" required>
                    </div> 
                    <div class="col-md-12">
                        <label for="city">State:</label>
                        <select class="form-control">
                            <option>{{$users->state}}</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="hbaths">Agent Profile:</label>
                        <textarea rows="4" cols="50" name="agent_prof" class="form-control" placeholder="Not Required">{{$users->agent_profile}} </textarea>
                    </div>
                    <div class="col-md-6 mar1">
                        <label for="comp_logo">Company Logo:<span class="req-field"> *</span></label>
                        <input type="file" class="form-control" id="comp_logo" value="{{$users->logo}}">
                        {{-- <input type="file" class="form-control" id="comp_logo" onchange="readURL(this);" value="{{$users->logo}}">
                        <img id="blah" class="disimg" src="http://placehold.it/180" alt="your image" /> --}}
                    </div> 
                    <div class="col-md-6 mar1">
                        <label for="agent_pho">Agent Photo:<span class="req-field"> *</span></label>
                        <input type="file" class="form-control" id="agent_pho" value="{{$users->headshot}}">
                        {{-- <input type="file" class="form-control" id="comp_logo" name="comp_logo" onchange="readURL1(this);">
                        <img id="blah1" class="disimg" src="http://placehold.it/180" alt="your image" /> --}}
                    </div> 
                    <div class="col-md-1 text-right">
                        <label for="fb" ><i class="fa fa-facebook-square fa-2x" style="color:#3b5998;"></i></label>
                    </div>
                    <div class="col-md-11 mar1">
                        <input id="facebook" type="text" class="form-control" value="{{$users->facebookpage}}">
                    </div>
                    <div class="col-md-1 col-xs-1 mar1 text-right">
                        <label for="twitter" ><i class="fa fa-twitter-square fa-2x" style="color:#1da1f2;"></i></label>
                    </div>
                    <div class="col-md-11 col-xs-11 mar1">
                        <input id="twitter" type="text" class="form-control" value="{{$users->twitterpage}}">
                    </div>
                    <div class="col-md-1 mar1 text-right">
                        <label for="google" ><i class="fa fa-google-plus-square fa-2x" style="color:#dd4b39;"></i></label>
                    </div>
                    <div class="col-md-11">
                        <input id="google" type="text" class="form-control" value="{{$users->googlepluspage}}">
                    </div>
                    <div class="col-md-1 mar1 text-right">
                        <label for="instagram" ><i class="fa fa-instagram" id="insta"></i></label>
                    </div>
                    <div class="col-md-11">
                        <input id="instagram" type="text" class="form-control" value="{{$users->instagrampage}}">
                    </div>
                    <div class="col-md-1 mar1 text-right">
                        <label for="pinterest" ><i class="fa fa-pinterest-square fa-2x" style="color:#bd081c"></i></label>
                    </div>
                    <div class="col-md-11">
                        <input id="pinterest" type="text" class="form-control" value="{{$users->pinterestpage}}">
                    </div>
                    <div class="col-md-1 mar1 text-right">
                        <label for="youtube" ><i class="fa fa-youtube-play fa-2x" style="color:red;"></i></label>
                    </div>
                    <div class="col-md-11">
                        <input id="youtube" type="text" class="form-control" value="{{$users->youtubepage}}">
                    </div>
                    {{-- <div class="col-md-6">
                        <input type='file' onchange="readURL(this);" />
                        <br>
                        <img id="blah" class="disimg" src="http://placehold.it/180" alt="your image" />
                    </div> --}}
                </div>
                <hr>
                <button class="btn btn-primary pull-right mar1" type="button" id="btn-update" onclick="UpdateChanges({{$users->id}})"><i class="fa fa-user-plus"></i> Update Profile</button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
//Update Changes for Videographers
function UpdateChanges(id) {
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var credentials = $('#credentials').val();
    var mls_id = $('#mls_id').val();
    var email = $('#email').val();
    var cp_no = $('#cp_no').val();
    var asst_cp = $('#asst_cp').val();
    var web_name = $('#web_name').val();
    var company = $('#company').val();
    var office_add = $('#office_add').val();
    var city = $('#city').val();
    var zip = $('#zipc').val();
    var agent_prof = $('textarea[name="agent_prof"]').val();
    var comp_logo = $('#comp_logo').val();
    var agent_pho = $('#agent_pho').val();
    var facebook = $('#facebook').val();
    var twitter = $('#twitter').val();
    var google = $('#google').val();
    var instagram = $('#instagram').val();
    var pinterest = $('#pinterest').val();
    var youtube = $('#youtube').val();
    

    var data = {
        id: id,
        fname: fname,
        lname: lname,
        credentials: credentials,
        mls_id: mls_id,
        email: email,
        cp_no: cp_no,
        asst_cp: asst_cp,
        web_name: web_name,
        company: company,
        office_add: office_add,
        city: city,
        zip: zip,
        agent_prof: agent_prof,
        comp_logo: comp_logo,
        agent_pho: agent_pho,
        facebook: facebook,
        twitter: twitter,
        google: google,
        instagram: instagram,
        pinterest: pinterest,
        youtube: youtube
        
    }
    console.log(data);
    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{ URL::to('/edit_user_update') }}",
        method: 'POST',
        data: data,
        success: function(response){
            // console.log(response);
            
            location.reload();
        }

    });
}
</script>

{{-- 
      function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }

        function readURL1(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah1')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
     --}}
@endsection
