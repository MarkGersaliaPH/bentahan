<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">
<style type="text/css">
	.starrr a{
		
    color: #FFD119 !important;
	}
</style>
<title>Bentahan.ph </title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- jQuery -->

<script src="{{asset('js/jquery.js')}}"></script>


<!-- starr -->
<link href="{{asset('plugins/starr/starr.css')}}" rel="stylesheet">
<script src="{{asset('plugins/starr/starr.js')}}"></script>


<!-- Bootstrap4 files-->
<script src="{{asset('uikit/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('uikit/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="{{asset('uikit/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="{{asset('plugins/popup/popup.css')}}">

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

<!-- custom javascript -->
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


<div class="bg">

@yield('content')

<script src="{{asset('js/item-ratings.js')}}"></script>

</div>

@include('template.ui-footer')


<script src="{{asset('js/cart.js')}}"></script>

<script src="{{asset('js/alertify.min.js')}}"></script>
<!-- <script src="{{asset('uikit/js/default-js.js')}}"></script> -->
  
<script src="{{asset('js/items.js')}}"></script>

</body>
</html>