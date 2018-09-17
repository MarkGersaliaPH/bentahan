@extends('layouts.default')
@section('content')

<div class="white-bg">
    <div class="container"> 
        <section> 
           
            {{-- <img src="{{asset('storage/uploads/banner.jpg')}}" class="img img-responsive" alt=""> --}}
            {{-- @include('carousell')  --}}

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
        <img src="{{asset('storage/uploads/banner.jpg')}}" class="img img-responsive" alt="">
    </div>

    <div class="item"> 
        <img src="{{asset('storage/uploads/banner.jpg')}}" class="img img-responsive" alt="">
    </div>

    <div class="item"> 
        <img src="{{asset('storage/uploads/banner.jpg')}}" class="img img-responsive" alt="">
    </div>
  </div>

  
</div>
        </section>
    </div>
</div>
<section class="gray-bg">
<div class="container">

        <strong><i class="fab fa-hotjar"></i> 
            Featured Items</strong>
        <hr class="hr-bordered">  
        @foreach($items as $item)
        <div class="col-sm-2 padding-0">  
             <a href="/product/view/{{str_slug($item->title)}}/{{$item->id}}">
            <div class="item-box">
                {{-- <div class="backdrop-image" style="background:url(storage/uploads/{{$item->images[0]->filename}})"> --}}
                    <div class="item-box-image" style="background:url(storage/uploads/{{$item->images[0]->filename}})"> 
                    </div> 
                {{-- </div>/ --}}
            <h5>
                {{$item->title}}
            </h5> 
                <h3 class="text-danger price">&#8369; {{$item->price}}</h3> 
           </a>

           <i class="fa fa-star fa-sm text-warning"></i>
           <i class="fa fa-star fa-sm text-warning"></i>
           <i class="fa fa-star fa-sm text-warning"></i>
           <i class="fa fa-star fa-sm text-warning"></i>
           <i class="fa fa-star fa-sm text-warning"></i><br>
           <p><a href="">3 reviews</a></p> 
           <button class="btn btn-primary btn-sm"><i class="fa fa-shopping-cart"></i></button>
           <button class="btn btn-link btn-sm" style="color:#666"><i class="fa fa-heart"></i></button>
            </div>  
        </div> 
        @endforeach 
    </div>
    </div>
</section>
@endsection