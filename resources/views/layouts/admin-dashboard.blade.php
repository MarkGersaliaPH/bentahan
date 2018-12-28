<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">



<link rel="stylesheet" href="{{asset('datatables/css/dataTables.bootstrap.min.css')}}">
   
<link rel="stylesheet" href="{{asset('css/default.css')}}">
<link rel="stylesheet" href="{{asset('css/admin-dashboard.css')}}">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Open+Sans|Work+Sans" rel="stylesheet"> 
{{-- <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Work+Sans" rel="stylesheet"> --}}
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
<script src="{{asset('datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('datatables/js/dataTables.bootstrap.min.js')}}"></script>

<script src="{{asset('richtext/trumbowyg.min.js')}}"></script>
</head>
<body>
    <div id="wrapper">
    <div id="sidebar">
        <div class="logo">
            <h4>Lara<span class="text-danger">CART <i class="fa fa-shopping-cart"></i></span></h4>
        </div>    
            <span href="" class="list-group-item active">
                    {{-- <i class="fas fa-ellipsis-v"></i>  --}}
            Navigation
            </span> 
            
            <a href="/admin" class="list-group-item">
            <i class="fas fa-tachometer-alt"></i>
            Dashboard
            </a> 

            <a href="/admin/users" class="list-group-item">
                    <i class="fas fa-user-lock"></i> 
                System users
                </a> 

            <a href="/admin/customers" class="list-group-item">
                <i class="fas fa-user-tag"></i>
            Customers
            </a>

            <a href="/admin/stores" class="list-group-item">
                <i class="fas fa-store-alt"></i> 
            Stores
            </a>

            <a href="/admin/items" class="list-group-item">
            <i class="fas fa-tv"></i>
            Items
            </a>  
            <a href="/admin/categories" class="list-group-item">
                    <i class="fas fa-bezier-curve"></i>
                Categories
                </a>
            {{-- <a href="" class="list-group-item">
            <i class="fas fa-globe-asia"></i>
            Website Design
            </a>  --}}
            
            <a href="" class="list-group-item">
            <i class="fas fa-cog"></i>
            Settings
            </a>     
            
            <div class="copyright">
                    <center>
                        <p>Laracart @ <?php echo date('Y') ?> All rights reserved</p>
                        <small class="text-muted">Ver. 1.0</small>
                    </center>
                    </div>
                      
    </div>
    <div id="main-content"> 
            <nav class="navbar navbar-default navbar-fixed-top"> 
                    <ul class="nav navbar-nav dashboard-nav ">
                        <li class="active"><a href="/"><i class="fa fa-desktop"></i> Go to main website</a></li>
                        <li onclick="window.history.back()"><a><i class="fa fa-chevron-left"></i></a></li>
                        <li onclick="window.history.forward()"><a ><i class="fa fa-chevron-right"></i></a></li>
                        <li  onclick="location.reload()"><a><i class="fas fa-sync-alt"></i>
                        </a></li>
                        <div class="navbar-text" id="wait" style="display:none"><img src="{{asset('img/wait.gif')}}" alt=""></div>
                    </ul> 
                    
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href=""><i class="fa fa-user-circle"></i> {{Auth::user()->name}}</a>
                        </li> 
                        <li><a href="#" id="navicon"><i class="fas fa-bars"></i></a></li>
                       <li><a href=""></a></li>
                    </ul>   
            </nav>
            <div id="content"> 
            @yield('content') 
            
            </div>
    </div> 
</div>
<script src="{{asset('js/items.js')}}"></script>
<script src="{{asset('js/ajax-load.js')}}"></script>
<script src="{{asset('js/admin-functions.js')}}"></script>
</body>



<script>
    $(document).ready( function () {
    $('#myTable').DataTable();
} );
$('#myTable').DataTable( { 
  "ordering": false,
  "pageLength": 50
} );
</script>