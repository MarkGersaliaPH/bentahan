
<nav class="navbar navbar-default">
        <div class="container">
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
            <ul class="nav navbar-nav navbar-right">  
                <!-- @foreach($categories as $category) 
                <li><a href="#">{{$category->category}}</a></li> 
                @endforeach -->
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
                                
                        </a> 
                    </li>
            </ul> 
          </div>
        </div></div>
      </nav>    