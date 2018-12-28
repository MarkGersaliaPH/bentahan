@extends('layouts.auths')
@section('content') 

    
<div class="container" style="width:399px">
    
<div class="logo text-center">
    <img src="{{asset('img/logo-sm.png')}}">
</div> 
<br>     

<form  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }} 
 <br>
 
 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
    <label for="">Email Address:</label>
        <input id="email" type="email" class="form-control  input-lg" name="email" value="{{ old('email') }}" required autofocus>

         @if ($errors->has('email'))
             <span class="help-block">
                 <strong>{{ $errors->first('email') }}</strong>
             </span>
         @endif 
 </div>


<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="">Password:</label>
    <input id="password" type="password" class="form-control  input-lg" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif 
</div>

<div class="form-group">
    <button class="btn btn-primary btn-lg">
        Login
    </button>
</div>

</form>

</div> 

@endsection