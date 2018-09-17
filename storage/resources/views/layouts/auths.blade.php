<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title> 
    
<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Open+Sans|Work+Sans" rel="stylesheet">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>
 
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Open+Sans|Work+Sans" rel="stylesheet"> 
 
</head>
<body>  

        <section >
            <div class="container">
                @yield('content')
            </div>
        </section>
   
</body>
</html>

<!-- THE SCRIPT INITIALISATION -->
    <!-- LOOK THE DOCUMENTATION FOR MORE primaryRMATIONS -->
    <script type="text/javascript">

        var revapi;

        jQuery(document).ready(function() {

               revapi = jQuery('.tp-banner').revolution(
                { 
          delay:9000,
         startwidth:1500,
         startheight:500,
         autoHeight:"off",
         fullScreenAlignForce:"off",
 
         onHoverStop:"off",
         arrows: {
					style:"martfury-arrow-dark",
					enable:false,
					hide_onmobile:true,
					hide_under:768,
					hide_onleave:false,
					tmp:'<div class="right-arrow">	<i class="icon-chevron-right"></i></div><div class="left-arrow">	<i class="icon-chevron-left"></i></div>',
					left: {
						h_align:"left",
						v_align:"center",
						h_offset:20,
						v_offset:0
					},
					right: {
						h_align:"right",
						v_align:"center",
						h_offset:20,
						v_offset:0
					}
				}
				,
         
                });

        }); //ready

    </script>