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
<script src="{{asset('uikit/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('uikit/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="{{asset('uikit/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="{{asset('uikit/css/ui.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('uikit/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<script src="{{asset('plugins/validator/bootstrap-validate.js')}}"></script>


</head>
<body>

<div class="padding-top padding-bottom">
@yield('content')
</div>
</body>
</html>