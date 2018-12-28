
@extends('layouts.sub-page')
@section('content')


<!-- ========================= SECTION PAGETOP ========================= -->
 
<!-- ========================= SECTION INTRO END// ========================= -->

<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y">
<div class="container">

<div class="row">
  <aside class="col-sm-3">

<div class="card card-filter">
  <article class="card-group-item">
    <header class="card-header">
      <a class="" aria-expanded="true" href="#" data-toggle="collapse" data-target="#collapse22">
        <i class="icon-action fa fa-chevron-down"></i>
        <h6 class="title">By Category</h6>
      </a>
    </header>
    <div style="" class="filter-content collapse show" id="collapse22">
      <div class="card-body">
        <form class="pb-3">
        <div class="input-group">
          <input class="form-control" placeholder="Search" type="text">
          <div class="input-group-append">
            <button class="btn btn-success" type="button"><i class="fa fa-search"></i></button>
          </div>
        </div>
        </form>

        <ul class="list-unstyled list-lg">
          <li><a href="#">Cras justo odio <span class="float-right badge badge-light round">142</span> </a></li>
          <li><a href="#">Dapibus ac facilisis  <span class="float-right badge badge-light round">3</span>  </a></li>
          <li><a href="#">Morbi leo risus <span class="float-right badge badge-light round">32</span>  </a></li>
          <li><a href="#">Another item <span class="float-right badge badge-light round">12</span>  </a></li>
        </ul>  
      </div> <!-- card-body.// -->
    </div> <!-- collapse .// -->
  </article> <!-- card-group-item.// -->
  <article class="card-group-item">
    <header class="card-header">
      <a href="#" data-toggle="collapse" data-target="#collapse33">
        <i class="icon-action fa fa-chevron-down"></i>
        <h6 class="title">By Price  </h6>
      </a>
    </header>
    <div class="filter-content collapse show" id="collapse33">
      <div class="card-body">
        <input type="range" class="custom-range" min="0" max="100" name="">
        <div class="form-row">
        <div class="form-group col-md-6">
          <label>Min</label>
          <input class="form-control" placeholder="$0" type="number">
        </div>
        <div class="form-group text-right col-md-6">
          <label>Max</label>
          <input class="form-control" placeholder="$1,0000" type="number">
        </div>
        </div> <!-- form-row.// -->
        <button class="btn btn-block btn-outline-success">Apply</button>
      </div> <!-- card-body.// -->
    </div> <!-- collapse .// -->
  </article> <!-- card-group-item.// -->
  <article class="card-group-item">
    <header class="card-header">
      <a href="#" data-toggle="collapse" data-target="#collapse44">
        <i class="icon-action fa fa-chevron-down"></i>
        <h6 class="title">By Feature </h6>
      </a>
    </header>
    <div class="filter-content collapse show" id="collapse44">
      <div class="card-body">
      <form>
        <label class="form-check">
          <input class="form-check-input" value="" type="checkbox">
          <span class="form-check-label">
            <span class="float-right badge badge-light round">5</span>
            Samsung
          </span>
        </label>  <!-- form-check.// -->
        <label class="form-check">
          <input class="form-check-input" value="" type="checkbox">
          <span class="form-check-label">
            <span class="float-right badge badge-light round">13</span>
            Mersedes Benz
          </span>
        </label> <!-- form-check.// -->
        <label class="form-check">
          <input class="form-check-input" value="" type="checkbox">
          <span class="form-check-label">
            <span class="float-right badge badge-light round">12</span>
            Nissan Altima
          </span>
        </label>  <!-- form-check.// -->
        <label class="form-check">
          <input class="form-check-input" value="" type="checkbox">
          <span class="form-check-label">
            <span class="float-right badge badge-light round">32</span>
            Another Brand
          </span>
        </label>  <!-- form-check.// -->
      </form>
      </div> <!-- card-body.// -->
    </div> <!-- collapse .// -->
  </article> <!-- card-group-item.// -->
</div> <!-- card.// -->


  </aside> <!-- col.// -->
  <main class="col-sm-9">


@foreach($items as $item)
<article class="card card-product">
  <div class="card-body">
  <div class="row">
    <aside class="col-sm-3">
      <div class="img-wrap"><img src="{{asset('storage/uploads/'.$item->images[0]->filename)}}"></div>
    </aside> <!-- col.// -->
    <article class="col-sm-6">
        <h4 class="title"> {{$item->title}} </h4>
        <div class="rating-wrap  mb-2">
          <ul class="rating-stars">
            <li style="width:80%" class="stars-active"> 
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> 
            </li>
            <li>
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> 
            </li>
          </ul>
          <div class="label-rating">132 reviews</div>
          <div class="label-rating">154 orders </div>
        </div> <!-- rating-wrap.// -->
        <p> {!! $item->description !!} </p>
        <dl class="dlist-align">
          <dt>Color</dt>
          <dd>Black and white</dd>
        </dl>  <!-- item-property-hor .// -->
        <dl class="dlist-align">
          <dt>Material</dt>
          <dd>Syntetic, wooden</dd>
        </dl>  <!-- item-property-hor .// -->
        <dl class="dlist-align">
          <dt>Delivery</dt>
          <dd>Russia, USA, and Europe</dd>
        </dl>  <!-- item-property-hor .// -->
      
    </article> <!-- col.// -->
    <aside class="col-sm-3 border-left">
      <div class="action-wrap">
        <div class="price-wrap h4">
          <span class="price money"> PHP {{$item->price}} </span>  
          <del class="price-old"> $98</del>
        </div> <!-- info-price-detail // -->
        <p class="text-success">Free shipping</p>
        <br>
        <p>
          <a href="#" class="btn btn-success"> Buy now </a>
          <a href="#" class="btn btn-secondary"> Details  </a>
        </p>
        <a href="#"><i class="fa fa-heart"></i> Add to wishlist</a>
      </div> <!-- action-wrap.// -->
    </aside> <!-- col.// -->
  </div> <!-- row.// -->
  </div> <!-- card-body .// -->
</article> <!-- card product .// -->
@endforeach

  </main> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->

<!-- ========================= SECTION  ========================= -->
<section class="section-name bg-white padding-y">
<div class="container">
<h4>Another section if needed</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</div><!-- container // -->
</section>
<!-- ========================= SECTION  END// ========================= -->


@endsection