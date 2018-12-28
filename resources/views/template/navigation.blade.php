<div class="promo" style="background: url({{asset('img/promo.png')}});height: 70px;background-position: center center;"></div>
<nav class="navbar navbar-top navbar-expand-lg navbar-light bg border-bottom">
<div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTop" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse bg" id="navbarTop">
    <ul class="navbar-nav mr-auto">
		<li class="nav-item active border-right border-left">
			<a class="nav-link" href="#"> <i class="fa fa-phone"></i> Call us: 020 2366 455 </a>
		</li>
		<li class="nav-item dropdown">
			<a class="nav-link" href="#"> <i class="fa fa-envelope"></i> suppport@benthan.ph </a>
		</li>
    </ul>
    <ul class="navbar-nav">
		<li class=" border-right"><a href="#" class="nav-link"> My Account </a></li>
		<li class=" border-right"><a href="#" class="nav-link"> Wishlist </a></li>
		<li><a href="#" class="nav-link"> Checkout </a></li>
	</ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
</div> <!-- container //  -->
</nav>


<section class="header-main border-bottom">
	<div class="container">
<div class="row align-items-center">
	<div class="col-lg-5-24 col-sm-5 col-4"> 
			<a href="/"><img class="img-fluid" src="{{asset('img/bentahan-2.png')}}"></a>  
	</div>
	<div class="col-lg-13-24 col-sm-12 order-3 order-lg-2">
		<form action="{{route('item.search')}}">
			<div class="input-group w-100">
			    <input type="text" name="query" value="{{$query or ''}}" class="form-control" style="width:60%;" placeholder="Search">
			    
			    <div class="input-group-append">
			      <button class="btn btn-default" type="submit">
			        <i class="fa fa-search"></i>
			      </button>
			    </div>
		    </div>
		</form> <!-- search-wrap .end// -->
	</div> <!-- col.// -->
	<div class="col-lg-6-24 col-sm-7 col-8  order-2  order-lg-3">
		<div class="d-flex justify-content-end">
			<div class="widget-header">

                 @if (Auth::guest()) 
					<small class="title text-muted">Welcome guest!</small>
					<div> <a href="{{route('login')}}">Sign in</a> <span class="dark-transp"> | </span>
					<a href="{{route('register')}}"> Register</a></div>
                 @else

					<small class="title text-muted">Welcome</small> 
					<div> <a href="{{route('my_account')}}" class="text-dark">{{Auth::user()->name}}</a> </div>
                 @endif
			</div>
			<a href="{{route('cart')}}" class="widget-header border-left pl-3 ml-3">
				<div class="icontext">
					<div class="icon-wrap icon-sm round border text-dark"><i class="fa fa-shopping-cart"></i></div>
				</div>
				<span class="badge badge-pill badge-warning notify" id="headingCart"></span>
			</a>
		</div> <!-- widgets-wrap.// -->
	</div> <!-- col.// -->
</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark   fixed-top" style="top: -2000px;opacity: .9" id="nav-scroll">
	<div class="container">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
  </div>
</nav>