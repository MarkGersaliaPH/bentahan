<div class="heading"> 
    <div class="upper-head">
        <div class="container">
            <strong class="text-muted">Welcome to LaraCart</strong>
            <ul class="list-inline pull-right" style="margin:0"> 
                    <li>
                        <a href="">
                                <i class="fas fa-shipping-fast"></i> 
                                Check out
                        </a> 
                    </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-2"> 
            <div class="logo" onclick="window.location.href='/'">
                <h1>BENTAHAN<span class="text-danger">.PH</span></h1>
            </div>     
        </div>
        <div class="col-sm-6">  
                <form method="GET"  action="/product/search/">
                    {{-- {{csrf_field()}} --}}

                    <div class="input-group">
                        <input type="text" class="form-control search" required value="{{ $query or '' }}" name="query" placeholder="What are you looking for?">
                         <div class="input-group-btn">
                          <button class="btn btn-dark" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </div> 
                    </div>
                </form>
        </div>
        <div class="col-sm-4 ">
            <ul class="list-inline heading-list" style="float: right !important">
               @if (Auth::guest())
                            <li>
                                <a href="" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#loginModal">
                                <h3>
                                 Login <i class="fa fa-user"></i>
                                </h3>
                           </a>
                            </li>
                            {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
                            <li><a href="{{ route('register') }}">
                            
                                <h3>
                                 Register <i class="fa fa-user"></i>
                                </h3>
                            </a></li>
                        @else

                        <li>
                            <a href="">
                                <h3>
                                    Welcome,
                                    {{Auth::user()->name}}
                                </h3>
                            </a>
                        </li>

                @endif

                             <li> 
                                <h3 class="text-danger">
                                 Cart <i class="fa fa-shopping-cart"></i>
                                </h3>
                            </li>
            </ul>
            
        </div>
            
   {{--      <div class="col-sm-1">
            <span class="btn btn-link   btn-block">
                <i class="fa fa-shopping-cart "></i>
                Cart
            </span> 
        </div>
            <div class="col-sm-2">
                <a href="/products/sell" class="btn btn-danger  btn-block"> 
                    Sell with us
                </a> 
            </div>
        </div> --}}
        </div>
    </div>
</div>
<nav class="navbar navbar-inverse">
        <div class="container padding-0">
            <div class="row">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span> 
            </button> 
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">  
                @foreach($categories as $category) 
                <li><a href="#">{{$category->category}}</a></li> 
                @endforeach
            </ul> 
          </div>
        </div></div>
      </nav>    