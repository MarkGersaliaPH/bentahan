@extends('layouts.sub-page')
@section('content')

<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.min.js"></script>
<!-- or -->
<script src="https://unpkg.com/infinite-scroll@3/dist/infinite-scroll.pkgd.js"></script>

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y-sm">
<div class="container">
<nav class="mb-3">
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Home</a></li>
    <li class="breadcrumb-item"><a href="/">{{$item->categories}}</a></li>
    <li class="breadcrumb-item active" aria-current="page">{{$item->title}}</li>
</ol> 
</nav>

<div class="row">
<div class="col-xl-10 col-md-8 col-sm-12">


<main class="card">
  <div class="row no-gutters">
    <aside class="col-sm-6 border-right">
      <article class="gallery-wrap parent-container"> 
<div class="img-big-wrap  hover-zoom" style="padding: 10px ;">
   <a href="{{asset('/storage/uploads/'.$item->images[0]->filename)}}"><div><img src="{{asset('/storage/uploads/'.$item->images[0]->filename)}}"></div></a>
</div> <!-- slider-product.// -->
<div class="img-small-wrap">

       @foreach($item->images->slice(1) as $image)   
        <a href="{{asset('/storage/uploads/'.$image->filename)}}">
      <div class="item-gallery">
            <img src="{{asset('/storage/uploads/'.$image->filename)}}">
     </div> 
     </a> 
        @endforeach 
</div> <!-- slider-nav.// -->
</article> <!-- gallery-wrap .end// -->
    </aside>
    <aside class="col-sm-6">
<article class="card-body">
<!-- short-info-wrap -->
  <h3 class="title mb-3">{{$item->title}}</h3>

<div class="mb-3"> 
  <var class="price h3 text-success"> 
    <span class="currency">PHP </span><span class="num">{{$item->price}}</span>
  </var>  
</div> <!-- price-detail-wrap .// -->
<dl>
  <dt>Description</dt>
  <dd><p>
{!! $item->description!!}

  </p></dd>
</dl>

<div class="rating-wrap">
  <div class="main-rating"></div>
  <div class="label-rating">{{$reviews_count}} reviews</div>
  {{-- <div class="label-rating">154 orders </div> --}}
</div> <!-- rating-wrap.// -->
<hr>
  <div class="row">
    <div class="col-sm-6">
      <dl class="dlist-inline">
        <dt>Quantity: 
          <small class="text-muted">Available stock {{$item->stock}}</small></dt>
        <dd> 
          <select class="form-control form-control-sm" id="quantity" style="width:70px;">
            @for($i = 1;$i <= $item->stock; $i ++)
           <option>{{$i}}</option>
           @endfor
          </select>
        </dd>
      </dl>  <!-- item-property .// -->
    </div> <!-- col.// -->
    <div class="col-sm-6">
      <dl class="dlist-inline">
          <dt>Size: </dt>
          <dd>
            <label class="form-check form-check-inline">
            <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
            <span class="form-check-label">SM</span>
          </label>
          <label class="form-check form-check-inline">
            <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
            <span class="form-check-label">MD</span>
          </label>
          <label class="form-check form-check-inline">
            <input class="form-check-input" name="inlineRadioOptions" id="inlineRadio2" value="option2" type="radio">
            <span class="form-check-label">XXL</span>
          </label>
          </dd>
      </dl>  <!-- item-property .// -->
    </div> <!-- col.// -->
  </div> <!-- row.// -->
  <hr>
  @if($item->stock == 0)
    <label class="btn btn-danger ">
        Out of stock
    </label>
  @else
  
  <button class="btn  btn-success text-white" onclick="addToCartFromView({{$item->id}})"> <i class="fa fa-shopping-cart"></i> Add to cart </button>
  <a href="#" class="btn  btn-outline-success"> Start Order </a>
  @endif
<!-- short-info-wrap .// -->
</article> <!-- card-body.// -->
    </aside> <!-- col.// -->
  </div> <!-- row.// -->
</main> <!-- card.// -->

<!-- PRODUCT DETAIL -->
<article class="card mt-3">
  <div class="card-body">
    <h4>Detail overview</h4>
  {!! $item->specifications !!}
  </div> <!-- card-body.// -->
</article> <!-- card.// -->
<!-- PRODUCT DETAIL .// -->


<!-- PRODUCT DETAIL --> 

<div class="card card-body border-0 mt-3">
@if(!empty(Auth::user()))
  <strong>Write a review</strong><br>
  <form action="{{route('review.add',$item->id)}}" method="post">
    {{csrf_field()}}
  <div class="form-group">
    <label>Review:</label>
    <textarea name="comment" id="comment" required class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label>Rate this item:</label>
  <div class="form-star">
    <input type="hidden" required value="1" name="star" id="star">
  </div>

  </div>
  <div class="form-group">
    <button type="submit" id="submit-rating" class="btn btn-success">Submit</a>
  </div>
  </form>
@else

  <a class="btn btn-success text-white" href="{{route('login')}}">Login to write review</a>
@endif
</div>

@if(!empty($reviews_count))

<div class="card card-body mt-3 border-0"> 
    <h4>Item rating: <span class="text-success">{{$rating}}</span></h4>
</div>

<div class="outer">
@foreach($item->reviews as $key => $review)

<div class="child card card-body mt-3 border-0">
<span class='starrr-{{$key}}'></span>
<strong>{{$review->user->name}}</strong>
<small class="text-muted">{{$review->created_at->diffForHumans()}}</small>
{{$review->comment}}
<script type="text/javascript">
$('.starrr-'+{{$key}}).starrr({
  rating: {{$review->rating}}, 
  readOnly: true,
      emptyClass: 'far fa-star',
      fullClass: 'fa fa-star',
})
</script>
</div> <!-- card.// -->  
@endforeach 
</div>
<br>
<button class="btn btn-primary" id="showMore">Show more reviews</button>

@endif
<script type="text/javascript">
  $('.main-rating').starrr({
    rating:{{$rating}},
  readOnly: true,
      emptyClass: 'far fa-star',
      fullClass: 'fa fa-star',
  });

    $('.form-star').starrr({
      readOnly: false,
      rating: 1,
      emptyClass: 'far fa-star',
      fullClass: 'fa fa-star',
      change: function(e, value) {
        $('#star').val(value);
      }
  });
</script>

<!-- PRODUCT DETAIL .// -->

</div> <!-- col // -->
<aside class="col-xl-2 col-md-4 col-sm-12">
<div class="card card-body">
  Sold by: <br>{{$item->seller->store->store_name}}
</div> <!-- card.// -->
<div class="card mt-3">
  <div class="card-header">
      You may like
  </div>
  <div class="card-body row">

@foreach($mightAlsoLike as $mightalsolike)
  
<figure class="itemside mb-3">
    <div class="aside"> <img class="img-sm" width="80" src="{{asset('/storage/uploads/'.$mightalsolike->images[0]->filename)}}" > </div>
    <figcaption class="text-wrap">
      <p class="title">{{$mightalsolike->title}}</p>
      <a href="#" class="btn btn-primary btn-sm"> Button </a>
      <button class="btn btn-sm btn-warning" type="button"> <i class="fa fa-shopping-cart"></i> </button>
    </figcaption>
  </figure>
@endforeach
  </div> <!-- card-body.// -->
</div> <!-- card.// -->
</aside> <!-- col // -->
</div> <!-- row.// -->



</div><!-- container // -->
</section>
<!-- ========================= SECTION CONTENT .END// ========================= -->

<script type="text/javascript">
  

</script>

<script type="text/javascript">
  var itemsCount = 0,
    itemsMax = $('.outer div').length;
    $('.outer div').hide();

    function showNextItems() {
        var pagination = 5;
        
        for (var i = itemsCount; i < (itemsCount + pagination); i++) {
            $('.outer div:eq(' + i + ')').show();
        }

        itemsCount += pagination;
        
        if (itemsCount > itemsMax) {
            $('#showMore').hide();
        }
    };

    showNextItems();

    $('#showMore').on('click', function (e) {
        e.preventDefault();
        showNextItems();
    }).slideDown();
</script>
<script> 
        $(document).ready(function() {
           
                $('.parent-container').magnificPopup({
                delegate: 'a', // child items selector, by clicking on it popup will open
                type: 'image',
                // other options
                gallery:{
                    enabled:true
                } 
                });
            });
    </script>
    
@endsection