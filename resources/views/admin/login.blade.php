@extends('layouts.auths')
@section('content') 

    
<div class="container" style="width:399px">
    
<div class="logo text-center">
    <h1>Lara<span class="text-danger">CART</span></h1>
</div> 
<br>    
<div class="content-container">  

<form  method="POST" action="{{ route('login') }}">
        {{ csrf_field() }} 
 <br>
 
 <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}"> 
    <label for="">Email Address:</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

         @if ($errors->has('email'))
             <span class="help-block">
                 <strong>{{ $errors->first('email') }}</strong>
             </span>
         @endif 
 </div>


<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="">Password:</label>
    <input id="password" type="password" class="form-control" name="password" required>
        @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif 
</div>

<div class="form-group">
    <button class="btn btn-primary">
        Login
    </button>
</div>

</form>

</div>
</div>

@endsection