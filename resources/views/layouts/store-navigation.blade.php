
<nav class="navbar bg-secondary navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#" style="padding-top:5px; "> 
      <!-- <a class="navbar-brand" href="#" style="padding-top:5px;width: 210.5px; ">  -->
        <img src="{{asset('/img/logo-inverse-sm.png')}}" alt="" style="width: 120px; ">
        <i class="fa fa-das"></i> 
        <!-- <img src="{{asset('img/logo-inverse-sm.png')}}"> -->
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php echo $nav_class =='Dashboard'?'active':'' ?>">
          <a href="{{route('storeDashboard')}}">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="<?php echo $nav_class =='Items' ? 'active' : '' ?>"><a href="{{route('storeItems')}}">Items</a></li>
        <li class="<?php echo $nav_class =='Orders' ? 'active' : '' ?>"><a href="{{route('storeOrders')}}">Orders</a></li>
        <li class="<?php echo $nav_class =='My Store' ? 'active' : '' ?>"><a  href="{{route('storeDetails')}}">Store details</a></li>
        <li class="<?php echo $nav_class =='My Account' ? 'active' : '' ?>"><a href="{{route('storeMyAccount')}}">My Account</a></li>
        <!-- <li class="<?php echo $nav_class =='Settings' ? 'active' : '' ?>"><a href="#">Settings</a></li> -->
     
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <!-- <button type="submit" class="btn btn-default">Submit</button> -->
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href=""><i class="fas fa-chevron-left"></i></a></li>
        <li><a href=""><i class="fas fa-chevron-right"></i></a></li>
        <li><a href=""><i class="fas fa-sync-alt"></i></a></li>
        <!-- <li><a href="#"></li> -->
      <p class="navbar-text">
        <?php 
          date_default_timezone_set('Asia/Manila'); 
         ?>
         <strong  id="date"></strong>
      </p>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="heading" >
  <div class="container-fluid">
      <i class="fa fa-circle text-success" style="font-size: 14px"></i>

      <small>Welcome, <strong>{{Auth::user()->name}}</strong> | 
       Last Logged in: {{date('m/d/Y')}}
        |


          <a   href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>

        </small>
  </div>
</div>

