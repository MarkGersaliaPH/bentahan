@extends('layouts.default')
@section('content')
<div class="container"> 
<section>
	<h1 class="price">"{{$query}}"</h1>
	<p>Showing results for search query for all <strong>Categories</strong></p> 
	<hr class="bordered-hr"> 
<div class="row">
	@if($items == '[]')
	<div class="alert alert-danger"> <p> No results found for keyword <strong>"{{$query}}" </strong> </p></div>
	@endif

  @foreach($items as $item)
     <div class="col-sm-2 padding-0">  
             <a href="/product/view/{{str_slug($item->title)}}/{{$item->id}}">
            <div class="item-box">
                {{-- <div class="backdrop-image" style="background:url(storage/uploads/{{$item->images[0]->filename}})"> --}}
                    <div class="item-box-image" style="background:url(/storage/uploads/{{$item->images[0]->filename}})"> 
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
</div>
@endsection