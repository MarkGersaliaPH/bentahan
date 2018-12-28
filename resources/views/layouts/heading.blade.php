  
  <div class="upper-head">
        <div class="container">
          <ul class="list-inline" style="margin:0">
            <li>
              <a href="">
                <i class="far fa-envelope"></i> support@bentahan.ph
              </a>
            </li>  
            <li>
              <a href="">
                <i class="fas fa-mobile-alt"></i> support@bentahan.ph
              </a>
            </li>
            <li>
              <i class="fab fa-facebook-f"></i>
            </li>
            <li>
              <i class="fab fa-twitter"></i>
            </li>
            <li> 
              <i class="fab fa-linkedin-in"></i>
            </li>
            <li>
              <i class="fab fa-instagram"></i>
            </li>
            <li>
              <i class="fab fa-pinterest"></i>
            </li>
            <li class="pull-right">
              {{date("F j, Y, g:i a")}}
            </li>
          </ul>
            
        </div>
    </div>
<div class="heading"> 
    <div class="container">
        <div class="row">
        <div class="col-sm-2"> 
            <div class="logo" onclick="window.location.href='/'">
                <img src="{{asset('img/logo-inverse-sm.png')}}" alt="">
            </div>     
        </div>
        <div class="col-sm-6" style="padding-top:8px">  
                <form method="GET"  action="/product/search/">
                    {{-- {{csrf_field()}} --}}

                    <div class="input-group">
                        <input type="text" class="form-control" required value="{{ $query or '' }}" name="query" placeholder="What are you looking for?">
                         <div class="input-group-btn">
                          <button class="btn btn-default" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </div> 
                    </div>
                </form>
        </div>
        <div class="col-sm-4 "  style="padding-top:15px">
            <ul class="list-inline heading-list" style="float: right !important">
               @if (Auth::guest())
                            <li>
                            <!--     <a href="" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#loginModal"> -->
                              <a href="/login"> 
                                <h3>Login <i class="fa fa-user"></i>
                                </h3>
                           </a>
                            </li>
                            {{-- <li><a href="{{ route('login') }}">Login</a></li> --}}
                            <li>
                            <a href="{{ route('register') }}">
                            
                                <h3>
                                 Register <i class="fa fa-user"></i>
                                </h3>
                            </a>
                            </li>
                        @else

                        <li>
                            <a href="">
                                <h3>
                                    <i class="fa fa-user-circle"></i>
                                    Welcome,
                                    {{Auth::user()->name}}
                                </h3>
                            </a>
                        </li>

                @endif

                             <li> 
                             <a href="{{route('cart')}}" title=""> 
                              <h3>
                                <i class="fa fa-shopping-cart"></i>
                                <span id="headingCart"></span>
                                </h3>
                                </a>
                                
                          </li>
                            <li>
                              </li>
            </ul>
            
        </div> 
        </div>
    </div>
</div><!-- 
<nav class="navbar navbar-inverse navbar-success">
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
    -->

      <nav class="navbar navbar-default navbar-fixed-top" id="nav-scroll">
        
        <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><img src="{{asset('img/logo-sm.png')}}" alt=""></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
          
      <p class="navbar-text  navbar-right"><i class="fa fa-shopping-cart fa-lg"></i>
        <span class="label label-danger" id="navbarCart" style="margin: 0"></span>
      </p>


        <form method="GET"  class="navbar-form navbar-left" action="/product/search/">
                    {{-- {{csrf_field()}} --}}

                    <div class="input-group">
                        <input type="text" class="form-control" style="width: 400px" required value="{{ $query or '' }}" name="query" placeholder="What are you looking for?">
                         <div class="input-group-btn">
                          <button class="btn btn-danger" type="submit">
                            <i class="fa fa-search"></i>
                          </button>
                        </div> 
                    </div>
                </form>

    </div>
  </div>

</nav> 

