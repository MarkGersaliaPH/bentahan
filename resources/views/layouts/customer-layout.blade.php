<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>Bentahan.ph </title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- jQuery -->

<script src="{{asset('js/jquery.js')}}"></script>

<!-- Bootstrap4 files-->
<script src="{{('uikit/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('uikit/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="{{asset('uikit/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="{{asset('plugins/popup/popup.css')}}">

<script src="{{asset('js/jquery.js')}}"></script>
<!-- plugin: owl carousel  -->
<link href="{{asset('uikit/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('uikit/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
<script src="{{asset('uikit/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- custom style -->
<link href="{{asset('uikit/css/ui.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('uikit/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<link rel="stylesheet" href="{{asset('/css/alertify/alertify.css')}}">
<link rel="stylesheet" href="{{asset('/css/alertify/themes/semantic.css')}}">

<script src="{{asset('plugins/numbers/simple.money.format.js')}}"></script>
<script src="{{asset('plugins/popup/popup.min.js')}}"></script>
<script src="{{asset('plugins/validator/validator.js')}}"></script>
<script src="{{asset('js/jquery.number.min.js')}}"></script>
<script src="{{asset('richtext/trumbowyg.min.js')}}"></script> 

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
 --><!-- custom javascript -->
<script src="{{asset('uikit/js/script.js')}}" type="text/javascript"></script>

<script type="text/javascript">
/// some script

// jquery ready start
$(document).ready(function() {
	// jQuery code

}); 
// jquery end
</script>

</head>
<body>
<header class="section-header">
@include('template.navigation') 
</header> <!-- section-header.// -->


<div class="bg-light padding-top padding-bottom">

<section>
    <div class="container">

@if (session('error'))
<div class="alert alert-danger">
    <i class="fa fa-ban"></i> {{ session('error') }}
</div>
@endif
@if (session('status'))
<div class="alert alert-success">
    <i class="fa fa-check"></i> {{ session('status') }}
</div>
@endif
        <div c
        <div class="row">
            
    <div class="col-sm-3">

    <article class="card border-0  shadow-sm card-body">
        <div class="icontext mb-4">
            <div class="icon-wrap icon-xs bg-success round text-light">
                <i class="fa fa-user"></i> 
            </div>
            <div class="text-wrap">
                <div><a href="{{route('login')}}">My Dashboard</a></div>
            </div>
        </div> <!-- icontext.// --> 
        <div class="icontext  mb-4">
            <div class="icon-wrap icon-xs bg-success round text-light">
                <i class="fa fa-map"></i> 
            </div>
            <div class="text-wrap">
                <div><a href="{{route('customer.address')}}">Address Book</a></div>
            </div>
        </div> <!-- icontext.// -->
        <div class="icontext">
            <div class="icon-wrap icon-xs bg-success round text-light">
                <i class="fa fa-shopping-cart"></i>
            </div>
            <div class="text-wrap">
                <div><a href="{{route('customer.orders')}}">My orders</a></div>
            </div>
        </div> <!-- icontext.// -->
    </article>

    </div>

    <div class="col-sm-9">

@yield('content')
	</div>

</section>
 
 </div>

@include('template.ui-footer')

<script>
  $.validate({
    lang: 'es'
  });
</script>
<script src="{{asset('js/cart.js')}}"></script>

<script src="{{asset('js/alertify.min.js')}}"></script>
<script src="{{asset('js/default-js.js')}}"></script>
  
<script src="{{asset('js/items.js')}}"></script>
<script src="{{asset('plugins/validator/validator.js')}}"></script>


</body>
</html>