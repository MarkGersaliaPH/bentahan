<div class="heading"> 
    <div class="upper-head">
        <div class="container">
            Welcome to Bentahan.ph
            <ul class="list-inline pull-right" style="margin:0"> 
                    <li>
                      {{date('F d Y, H:sa')}}
                    </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
        <div class="col-sm-2"> 
            <div class="logo" onclick="window.location.href='/'">
                <img src="{{asset('img/logo-inverse-sm.png')}}" alt="">
            </div>     
        </div>
        <div class="col-sm-6" style="padding-top:8px">  
               
        </div>
        <div class="col-sm-4 "  style="padding-top:15px">
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
                            <li>
                            <a href=""  data-keyboard="false" data-toggle="modal" data-target="#registrationModal">
                            
                                <h3>
                                 Register <i class="fa fa-user"></i>
                                </h3>
                            </a>
                            </li>
                        @else

                        <li>
                            <a href="">
                                <h3>
                                  <img src="{{asset('storage/uploads/'.$myAccount->store->logo)}}" style="width:30px" alt="">
                                    Welcome,
                                    {{Auth::user()->name}}
                                </h3>
                            </a>
                        </li>

                @endif

                             <li> 
                             <a href="{{route('cart')}}" title="">
                                <h3 class="btn btn-danger btn-xs">
                                <i class="fa fa-power-off"></i>
                                </h3>
                                </a>
                            </li>
            </ul>
            
        </div> 
        </div>
    </div>
</div>
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
 {{--      <ul class="nav navbar-nav navbar-right">
           @if (Auth::guest())
                            <li>
                                <a href="" data-backdrop="static" data-keyboard="false" data-toggle="modal" data-target="#loginModal">
                                 Login <i class="fa fa-user">
                           </a>
                            </li>   
                            <li><a href="{{ route('register') }}">
                            
                                 Register <i class="fa fa-user">
                            </a></li>
                        @else

                        <li>
                            <a href="">
                                    <i class="fa fa-user-circle"></i>
                                    Welcome,
                                    {{Auth::user()->name}} 
                            </a>
                        </li>

                @endif
 
                             <li>  
                                 <a href=""><i class="fa fa-shopping-cart"></i></a> 
                            </li>

                    <li>
                        <a href=""> 
                                <i class="fas fa-shipping-fast"></i> 
                                
                        </a> 
                    </li>
      </ul> --}}

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

