@extends('main.index')

@section('css')
<style>
    .loginbtn{
        /* background-color: #1877f2;
        border: none;
        border-radius: 6px;
        font-size: 20px;
        line-height: 48px;
        padding: 0 16px; */
        /* width: 332px; */
        width: 100%;
        font-size: 20px;
        /* color:#FFF; */
    }

/* sign in FORM */
#logreg-forms{
    width:412px;
    margin:10vh auto;
    background-color:#f3f3f3;
    box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}
#logreg-forms form {
    width: 100%;
    max-width: 410px;
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


#logreg-forms button[type="submit"]{ margin-top:10px; }

.form-signup .social-login{
    width:210px !important;
    margin: 0 auto;
}

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
    
}
.erclr{
    color:#FF0000;
}

</style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div id="logreg-forms">
            <form class="form-signin" method="POST">
                {{csrf_field()}}
                <center >
                    <img src="images/logo.png" class="" alt="alt text" style=" width: 200px;">
                </center>
                <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
                {{-- <div class="social-login">
                    https://bootsnipp.com/snippets/GavAo
                    <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
                    <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
                </div>
                <p style="text-align:center"> OR  </p> --}}
                @if($errors->any())
                    <p class="text-center erclr"> {{ $errors->first() }}</p>
                @endif
                
                <input type="text" id="username" class="form-control"  name="username" placeholder="Username" autocomplete="on" autofocus="" required>
                <input type="password" id="password_input" class="form-control" name="password" placeholder="Password" required>
                <input type="checkbox" onclick="showpass()"> Show Password 
                
                <button class="btn btn-success btn-block" type="submit"><i class="fa fa-sign-in"></i> Sign in</button>
                <u> 
                    <a href="#" id="forgot_pswd">Forgot password? </a> 
                </u> 
                <span> OR call us at 561-623-9433</span>
                <hr>
                <!-- <p>Don't have an account!</p>  -->
                <a href="{{ asset('/register') }}">
                    <button class="btn btn-primary btn-block" type="button" id="btn-signup"><i class="fa fa-user-plus"></i> Sign up New Account</button>
                </a>
            </form>
        
                
        </div>
       

    </div>



</div>




@endsection

