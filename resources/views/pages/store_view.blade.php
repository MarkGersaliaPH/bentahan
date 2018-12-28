@extends('layouts.default')
@section('content')
<br>
<div class="container"> 


	<center>
	<img class="store-banner img img-responsive" src="{{asset('storage/uploads/'.$data->banner)}}">
	</center>
<br>
<div class="row">
	<div class="col-sm-3">
		<div class="panel panel-default">
			<div class="panel-body">
			<img src="{{asset('storage/uploads/'.$data->logo)}}" class="img img-responsive" alt="">
			<br>
			<h5 class="text-center">{{$data->user->name}}</h5>
			<br>

			<span class="list-group-item">
				<i class="fa fa-envelope"></i> {{$data->user->email}}
			</span>

			<span class="list-group-item">
				<i class="fa fa-phone"></i> {{$data->user->contact_number}}
			</span> 


			<span class="list-group-item">
				Shipping policy
			</span> 


			<span class="list-group-item">
				Return policy
			</span> 

			</div>
		</div>
	</div>
	<div class="col-sm-9">

		<h1>{{$data->store_name}}</h1>
		{!! $data->store_details !!}

		<hr>
		   <div class="row">
		   	   @foreach($items as $item)
        <div class="col-sm-2 padding-0" style="border: 1px solid #f8f8f8">  
             <a href="{{route('item_view',$item->id)}}">
            <div class="item-box"> 
                    <div class="item-box-image">
                      <center>
                      <img src="{{asset('storage/uploads/'.$item->images[0]->filename)}}" alt="" class="img img-responsive">
                      </center>
                      </div>

           </a>   
            
            <div class="item-box-body">
                 <strong>{{$item->title}}</strong><br>
                <strong class="text-success price">&#8369; <span class="money">{{$item->price}}</span></strong> 
                <br>
           <button class="btn btn-primary btn-sm" onclick="addToCart({{$item->id}})"><i class="fa fa-shopping-cart"></i></button>
           </div>
            </div>  
        </div> 
        @endforeach 
	    </div>
	</div>
</div>
</div>
@endsection