<!DOCTYPE HTML>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="author" content="Bootstrap-ecommerce by Vosidiy">

<title>Bentahan.ph </title>

<link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

<!-- jQuery -->
<script src="{{asset('uikit/js/jquery-2.0.0.min.js')}}" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="{{asset('uikit/js/bootstrap.bundle.min.js')}}" type="text/javascript"></script>
<link href="{{asset('uikit/css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="{{asset('uikit/fonts/fontawesome/css/fontawesome-all.min.css')}}" type="text/css" rel="stylesheet">


<!-- <script src="{{asset('js/jquery.js')}}"></script> -->




<!-- starr -->
<link href="{{asset('plugins/starr/starr.css')}}" rel="stylesheet">
<script src="{{asset('plugins/starr/starr.js')}}"></script>



<!-- plugin: owl carousel  -->
<link href="{{asset('uikit/plugins/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
<link href="{{asset('uikit/plugins/owlcarousel/assets/owl.theme.default.css')}}" rel="stylesheet">
<script src="{{asset('uikit/plugins/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- custom style -->
<link href="{{asset('uikit/css/ui.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{asset('uikit/css/responsive.css')}}" rel="stylesheet" media="only screen and (max-width: 1200px)" />

<link rel="stylesheet" href="{{asset('/css/alertify/alertify.css')}}">
<link rel="stylesheet" href="{{asset('/css/alertify/themes/semantic.css')}}">


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

<section class="border-bottom">
<div class="container">
<div class="row no-gutters">
	<div class="col-lg-9 offset-lg-5-24">
<nav class="navbar navbar-expand-lg navbar-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav text-white">
        <li class="nav-item">
          <a class="nav-link" href="#"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">New arrival</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Populars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Deals</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Last viewed</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More</a>
          <div class="dropdown-menu" aria-labelledby="dropdown07">
            <a class="dropdown-item" href="#">Foods and Drink</a>
            <a class="dropdown-item" href="#">Home interior</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Category 1</a>
            <a class="dropdown-item" href="#">Category 2</a>
            <a class="dropdown-item" href="#">Category 3</a>
          </div>
        </li>
      </ul>
    </div> <!-- collapse .// -->
</nav>
	</div> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .// -->
</section>

<!-- ========================= SECTION MAIN ========================= -->
<section class="section-main bg2 padding-bottom">
<div class="container">
<div class="row no-gutters bg-white">
<aside class="col-lg-5-24">
<nav>
	<div class="title-category   bg2 d-none d-lg-block" style="margin-top:-46px">
		<span><i class="fa fa-bars"></i> <strong> ALL CATEGORIES </strong> <i class="fa fa-favicon pull-right"></i></span>
	</div>
	<ul class="menu-category">
		@foreach($categories as $category)
		<li class="border-0"> <a href="{{route('categories.view',$category->category)}}" class="text-dark"> <i class="fa fa-link"></i> {{$category->category}}</a></li>

		@endforeach
<!-- 		<li class="has-submenu"> <a href="#">More category  <i class="icon-arrow-right pull-right"></i></a>
			<ul class="submenu">
				<li> <a href="#">Food &amp Beverage </a></li>
				<li> <a href="#">Home Equipments </a></li>
				<li> <a href="#">Machinery Items </a></li>
				<li> <a href="#">Toys & Hobbies  </a></li>
				<li> <a href="#">Consumer Electronics  </a></li>
				<li> <a href="#">Home & Garden  </a></li>
				<li> <a href="#">Beauty & Personal Care  </a></li>
			</ul>
		</li> -->
	</ul>
</nav>
</aside> <!-- col.// -->
<main class="col-lg-19-24">
<!-- ========= intro aside ========= -->
<div class="row no-gutters">
	<div class="col-lg-9 col-md-8">
<!-- ================= main slide ================= -->

<div class="owl-init slider-main owl-carousel" data-items="1" data-margin="1" data-nav="true" data-dots="false">
	
	@for($i = 1; $i <= 3; $i ++)
	<div class="item-slide">
		<img src="{{asset('img/promo'.$i.'.png')}}">
	</div>
	@endfor
</div>

<!-- ============== main slidesow .end // ============= -->
	</div> <!-- col.// -->
	<div class="col-lg-3 col-md-4">

<article class="box">
	<div class="icontext mb-4">
		<div class="icon-wrap icon-xs bg-success round">
			<i class="fa fa-check white"></i>
		</div>
		<div class="text-wrap">
			<small class="text-muted">Some heading</small>
			<div>Just any text here</div>
		</div>
	</div> <!-- icontext.// -->
	<div class="icontext mb-4">
		<div class="icon-wrap icon-xs bg-success round">
			<i class="fa fa-wifi white"></i>
		</div>
		<div class="text-wrap">
			<small class="text-muted">Some heading</small>
			<div>Just any text here</div>
		</div>
	</div> <!-- icontext.// -->
	<div class="icontext">
		<div class="icon-wrap icon-xs bg-success round">
			<i class="fa fa-user white"></i>
		</div>
		<div class="text-wrap">
			<small class="text-muted">Some heading</small>
			<div>Just any text here</div>
		</div>
	</div> <!-- icontext.// -->
</article> <!-- box.// -->

	</div> <!-- col.// -->
</div> <!-- row.// -->
<!-- ======== intro aside ========= .// -->
</main> <!-- col.// -->
</div> <!-- row.// -->
</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION MAIN END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->

<div class="container padding-y">
<div class="row">
<div class="col col-xs-12 col-sm-12 col-md-6">
<div class="banner-box"><a href="#"><img src="{{asset('img/ads1.jpg')}}" alt="" class="img-responsive"></a></div>
</div>
<div class="col col-xs-12 col-sm-12 col-md-6">
<div class="banner-box"><a href="#"><img src="{{asset('img/ads2.jpg')}}" alt="" class="img-responsive"></a></div>
</div>
</div>
</div>
 

<section class="hot-deals bg shadow-sm padding-y">
<div class="container">
	
<header class="section-heading">
<h4 class="title-section">Hot Item</h4> 
<h5>Recently hot sold item</h5>
</header>


<article class="card card-product border-0">
	<div class="card-body">
	<div class="row">
		<aside class="col-sm-3">
			<div class="img-wrap"><img src="{{asset('storage/uploads/'.$hot_item->item->images[0]->filename)}}"></div>
		</aside> <!-- col.// -->
		<article class="col-sm-6">
			
				<h4 class="title"> {{$hot_item->item->title}}</h4>
				<div class="rating-wrap">
				
				<div class="hot-item-star"></div>

					<div class="label-rating">{{App\ItemReview::reviews_count2($hot_item->item->id)}} reviews</div>
					{{-- <div class="label-rating">154 orders </div> --}}
				</div> <!-- rating-wrap.// -->
				<p> {!! $hot_item->item->description !!}</p>
		
		</article> <!-- col.// -->
		<aside class="col-sm-3 border-left">
			<div class="action-wrap">
				<div class="price-wrap h4">
					<span class="price"> {{$hot_item->item->price}}<span>	
					{{-- <del class="price-old"> $98</del> --}}
				</div> <!-- info-price-detail // -->
				<p class="text-success">Free shipping</p>
				<br>
				<p>
					<a href="#" class="btn btn-outline-success"> Details  </a>
				</p>
				{{-- <a href="#"><i class="fa fa-heart"></i> Add to wishlist</a> --}}
			</div> <!-- action-wrap.// -->
		</aside> <!-- col.// -->
	</div> <!-- row.// -->
	</div> <!-- card-body .// -->
</article> <!-- product-list.// -->



</div>

</section>
<section class="best-seller "> 
<div class="container">
<header class="section-heading">
<h4 class="title-section">Best sellers</h4>
</header>
<div class="owl-carousel owl-init slide-items" data-items="5" data-margin="20" data-dots="true" data-nav="true">

	@foreach($best_sellers as $i => $best_seller)
	<div class="item-slide">

	<figure class="card card-product">
		<span class="badge-new"> NEW </span>
		<div class="img-wrap"> <img src="{{asset('storage/uploads/'.$best_seller->item->images[0]->filename)}}"> </div>
		<figcaption class="info-wrap text-center">
			<h6 class="title text-truncate"><a href="#">{{$best_seller->item->title}}</a></h6>
		</figcaption>
	</figure> <!-- card // -->
	</div>

		@endforeach
</div>
</div>

</section>	


<section class="padding-y">
	<div class="container"> 
	<img src="{{asset('img/ads.jpg')}}">
	</div>
</section>


<section  class="padding-y bg">
	<div class="container">

<header class="section-heading">
<h4 class="title-section">Daily Discover</h4>
</header>

<div class="row">
	@yield('content')
	</div>
	</div>
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



@include('template.ui-footer')


<script type="text/javascript">
  var id = $('#id').val();
$('.hot-item-star').starrr({
  rating:{{App\ItemReview::getTotalRatings2($hot_item->item->id)}},
  readOnly: true,
      emptyClass: 'far fa-star',
      fullClass: 'fa fa-star',
})
</script>
<!-- 
<script type="text/javascript">
	var position = $(window).scrollTop(); 
            // should start at 0

            $(window).scroll(function() {
                var scroll = $(window).scrollTop();
                if(scroll > position) { 
                    $('#nav-scroll').css('top','0');
                } else { 
                     $('#nav-scroll').css('top','-2000px');
                }
                position = scroll;
            });
</script>
 -->

<script src="{{asset('js/alertify.min.js')}}"></script>
  
<script src="{{asset('js/items.js')}}"></script>
<script src="{{asset('js/cart.js')}}"></script>
</body>
</html>




