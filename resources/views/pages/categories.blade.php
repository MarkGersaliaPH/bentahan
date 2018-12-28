
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
        	@foreach($categories_all as $categories)
          <li><a href="{{route('categories.view',$categories->category)}}">{{$categories->category}} <span class="float-right badge badge-light round">{{App\Item::countByCategory($categories->category)}}</span> </a></li>
          @endforeach
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
        <h6 class="title">By Brand </h6>
      </a>
    </header>
    <div class="filter-content collapse show" id="collapse44">
      <div class="card-body">

        <ul class="list-unstyled list-lg">
      @foreach($item_brand as $brand)
          <li><a href="{{route('categories.view',$brand->brand)}}">{{$brand->brand}} <span class="float-right badge badge-light round">{{App\Item::countByBrand($brand->brand)}}</span> </a></li>
          @endforeach
      </ul>
      </div> <!-- card-body.// -->
    </div> <!-- collapse .// -->
  </article> <!-- card-group-item.// -->
</div> <!-- card.// -->


  </aside> <!-- col.// -->
  <main class="col-sm-9">
  	<h4>Showing {{$result_count}} results for category <span class="text-success">{{$query}}</span></h4>
  	<br>
<div class="row">
@foreach($items as $item) 
        <div class="col-sm-3" style="padding: 5px">
          <figure class="main-item card card-product border-0">
    <div class="img-wrap"> 
      <img src="{{asset('storage/uploads/'.$item->images[0]->filename)}}">
      {{-- <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a> --}}
    </div>
    <figcaption class="info-wrap">
      <a href="{{route('item_view',$item->id)}}" class="title"> {{$item->title}}</a>
      <input type="hidden" id="id" value="{{$item->id}}">
      <div class="main_star_{{$item->id}}"></div>
      {{App\ItemReview::reviews_count2($item->id)}} reviews
      <div class="action-wrap">
        <div class="price-wrap h5">
          <span class="price-new text-success">{{$item->price}}</span>
          <!-- <del class="price-old">$1980</del> -->
        </div> <!-- price-wrap.// -->
          
      </div> <!-- action-wrap -->
    </figcaption>
  </figure> <!-- card // -->

  </div>

<script type="text/javascript">
  var id = $('#id').val();
$('.main_star_' + {{$item->id}}).starrr({
  rating:{{App\ItemReview::getTotalRatings2($item->id)}},
  readOnly: true,
      emptyClass: 'far fa-star',
      fullClass: 'fa fa-star',
})
</script>
        @endforeach 
</div>
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