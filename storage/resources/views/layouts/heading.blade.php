<div class="heading"> 
    <div class="upper-head">
        <div class="container">
            <strong class="text-muted">Welcome to LaraCart</strong>
            <ul class="list-inline pull-right" style="margin:0"> 
                        @if (Auth::guest())
                            <li><a href="" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#loginModal">Login</a></li>
                            {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        <i class="fa fa-user-circle"></i>  {{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/home" style="color:#222">My profile</a>
                                    </li>
                                    <li>
                                        <a  style="color:#222" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif  
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
        <div class="col-sm-3"> 
            <div class="logo" onclick="window.location.href='/'">
                <h1>Lara<span class="text-danger">CART <i class="fa fa-shopping-cart"></i></span></h1>
            </div>     
        </div>
        <div class="col-sm-6">  
                <form method="GET" action="/product/search/">
                    {{-- {{csrf_field()}} --}}
                        <input type="text" class="form-control" value="{{ $query or '' }}" name="query" placeholder="What are you looking for?"> 
                </form>
        </div>
            
        <div class="col-sm-1">
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
        </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-default">
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