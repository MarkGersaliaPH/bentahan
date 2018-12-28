@extends('layouts.sub-page-auth')

@section('content')

<div class="container hidden" style="width: 500px">

<img src="{{asset('img/bentahan-2.png')}}" class="img-fluid" alt="">  

    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> &nbsp; Login via Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> &nbsp; Login via facebook</a>
    </p>
    <p class="divider-text">
        <span>OR</span>
    </p>

                    <form class="" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? 'has-error has-danger' : '' }}">
                            <label for="name" class="control-label">Name</label>

                            <div class="">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="control-label">E-Mail Address</label>

                            <div class="">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="control-label">Password</label>

                            <div class="">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="control-label">Confirm Password</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form> 
</div>


<div class="container" style="width: 500px;display: none;">

<img src="{{asset('img/bentahan-2.png')}}" class="img-fluid" alt="">
<div class="">
<article class="card-body">

    <h4 class="card-title mt-3 text-center">Create Account</h4>
    <p class="text-center">Get started with your free account</p>
    <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> &nbsp; Login via Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> &nbsp; Login via facebook</a>
    </p>
    <p class="divider-text">
        <span>OR</span>
    </p>
    
    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
        {{ csrf_field() }}


    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-user"></i> </span>
            </div>
            <input id="name" type="text" class="form-control" placeholder="Enter full name" name="name" value="{{ old('name') }}" required autofocus>

            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
         </div>


    <div class="form-group input-group" id="email-group">
            <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
            </div>
            <input id="email" type="email" placeholder="Enter email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

            @if ($errors->has('email'))
             <div class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
            </div>
            @endif
         </div> 
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" id="password" required name="password" placeholder="Create password" type="password">
    </div> <!-- form-group// -->
    <div class="form-group input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
        </div>
        <input class="form-control" id="confirm" required placeholder="Repeat password" type="password">
    </div> <!-- form-group// -->     

            <div class="form-group">
    <small id="passwordHelp" class="form-text text-danger"></small>
    </div>                                 
    <div class="form-group">
        <button type="submit" id="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="{{route('login')}}">Log In</a> </p>                                                                 
</form>
</article>
</div> <!-- card.// -->

<br>
<script type="text/javascript">
$(document).ready(function(){
    var form = $("form")

    $('input[type="email"]').blur(function(){
        $.getJSON('check_email/' + $(this).val() , function(response){
            
                event.preventDefault()
                event.stopPropagation()
                if (response == 1) {
                $('#emailHelp').addClass('text-danger');
                $('#emailHelp').removeClass('text-muted');
                $('#emailHelp').html('The email is already taken please try again');
                
                $('#submit').prop('disabled',true);

            }else{
                $('#emailHelp').html('');
            }
        });
    });
 
    });

 
bootstrapValidate('#confirm', 'matches:#password:Your passwords should match');
bootstrapValidate('#password', 'min:6:Enter at least 6 characters!');
bootstrapValidate('#email', 'email:Enter a valid E-Mail!')
bootstrapValidate(['#name','#email','#password','#confirm'], 'required:This field is required!')
 
</script>

<script type="text/javascript">
    
$("#submit").click(function() {

    //Fetch form to apply custom Bootstrap validation
    var form = $("form")
    if (form[0].checkValidity() === false) {
      event.preventDefault()
      event.stopPropagation()
    }
    form.addClass('was-validated')
});

</script>
@endsection
