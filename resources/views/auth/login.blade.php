@extends('layouts.sub-page')
@section('content') 

<div class="container padding-y-sm" style="width: 500px">

<div class="card card-body border">

<form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
<article class="card-body">
    <a href="" class="float-right btn btn-outline-primary">Sign up</a>
    <h4 class="card-title mb-4 mt-1">Sign in</h4>
    <p>
        <a href="" class="btn btn-block btn-twitter"> <i class="fab fa-twitter"></i> &nbsp; Login via Twitter</a>
        <a href="" class="btn btn-block btn-facebook"> <i class="fab fa-facebook-f"></i> &nbsp; Login via facebook</a>
    </p>
    <br>
    <div class="form-group input-icon">
        <i class="fa fa-user"></i>
        <input name="email" class="form-control" placeholder="Email or login" value="{{ old('email') }}" required autofocus>
    </div> <!-- form-group// -->
    <div class="form-group input-icon">
        <i class="fa fa-lock"></i> 
        <input class="form-control" placeholder="******" type="password"  name="password" required>
    </div> <!-- form-group// -->                                      
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block"> Login  </button>
            </div> <!-- form-group// -->
        </div>
        <div class="col-md-6 text-right">
            <a class="small" href="#">Forgot password?</a>
        </div>                                            
    </div> <!-- .row// -->  

</article>
</form>
</div> <!-- card.// -->
</div> <!-- card.// -->
<br>
<section class="bg-light">
<div class="container padding-top padding-bottom">
    
<div class="row">
<div class="col-md-6">  
    <article class="box">
            <figure class="itemside">
                <div class="aside align-self-center">
                    <span class="icon-wrap icon-md round bg-warning">
                        <i class="fa fa-lightbulb white"></i>
                    </span>
                </div>
                <figcaption class="text-wrap">
                    <h5 class="title">Sync across all devices</h5>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labor </p>
                </figcaption>
            </figure> <!-- iconbox // -->
        </article> <!-- panel-lg.// -->
    </div><!-- col // -->
    <div class="col-md-6">
        <article class="box">
            <figure class="itemside">
                <div class="aside align-self-center">
                    <span class="icon-wrap icon-md round bg-danger">
                        <i class="fa fa-lock white"></i>
                    </span>
                </div>
                <figcaption class="text-wrap">
                <h5 class="title">Secured protocol</h5>
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt dolor laburab </p>
                </figcaption>
            </figure> <!-- iconbox // -->
        </article> <!-- panel-lg.// -->
    </div><!-- col // -->
</div> <!-- row.// -->

</div>
</section>
@endsection
