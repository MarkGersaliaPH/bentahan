@extends('layouts.store-dashboard')
@section('content')

@if($item->status_id != 2)
	<div class="alert alert-info">
		<i class="fas fa-info-circle"></i> This item is saved as {{$item->status->display}}. do you want to mark this as <a href="{{route('sellItem',$item->id)}}">for sale?</a>
	</div>
@endif

<ol class="breadcrumb">
	<li><a href="{{route('storeItems')}}">Items</a></li>
	<li>{{$pageTitle}}</li>
</ol>

 	<!-- <h2>{{$pageTitle}}</h2> -->
 	


<div class="form-group btn-group"> 
    <a data-toggle="tab" class="btn btn-default" href="#home">General Details</a>
    <a data-toggle="tab"  class="btn btn-default" href="#menu2">Descriptions & Specs</a>
    <a data-toggle="tab" class="btn btn-default" href="#menu1">Images</a>
</div>  
<span class="pull-right">
@if($item->status_id == 2)
  <a href="/dashboard/store/items/update/{{$item->id}}" class="btn btn-primary" ><i class="fa fa-check"></i> This item is for sale</a> 
@endif
<a href="/dashboard/store/items/update/{{$item->id}}" class="btn btn-success" ><i class="fa fa-save"></i> Update</a>
</span>

<form method="post" action="submit/{{$item->id}}" id="update">
	{{csrf_field()}}
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
        <div class="panel panel-default">
        	<div class="panel-heading">
                <strong><i class="fa fa-cogs"></i> General Details</strong> 
            </div>
        	<div class="">
        		
            
          <table class="table borderless table-striped table-dark">
              <tr>
                  <th>Item:</th>
                  <td><input disabled type="text" required name="data[Item][title]" value="{{$item->title}}" class="form-control"></td>
              </tr>
              <tr>
                  <th>Price:</th>
                  <td><input disabled type="" required class="form-control" name="data[Item][price]" value="{{$item->price}}"></td>
              </tr>
              <tr>
                  <th>Brand:</th>
                  <td>
                  	<input disabled type="" class="form-control" required value="{{$item->brand}}" name="data[Item][brand]">
                  </td>
              </tr>
              <tr>
                  <th>Available Stock:</th>
                  <td>{{$item->stock}}</td>
              </tr>
              <tr>
                  <th>Categories:</th>
                  <td>
                  	<?php  $categories = explode("/",$item->categories); ?>
                  	@foreach($categories as  $key => $value)
                  		<label class="badge"><span id="category">{{$value}}</span> <i onclick="update_category()" class="fa fa-times"> </i></a></label>
                  		&nbsp;
                  	@endforeach
                  </td>
              </tr>
              <tr>
                  <th>Date Posted:</th>
                  <td>{{$item->created_at->diffForHumans()}}</td>
              </tr>
          </table>

        	</div>
        </div>

        </div>
        <div id="menu1" class="tab-pane fade"> 
        	<div class="panel panel-default">
        		
	          <div class="panel-heading">
	              <strong><i class="fa fa-image"></i> Images</strong>
	          </div>  
        		<div class="">
        			
          <table class="borderless table table-dark table-striped">
               
                <tbody>
                    @foreach($item->images as $image)
                    <tr>
                        <td>
                        	<img  style="width:100px" src="/storage/uploads/{{$image->filename}}" class="img img-responsive img-thumbnail">
                        </td>
                    </tr>  
                    @endforeach 
                </tbody>
          
        </table>
    </div>

        		</div>
        	</div>

        	<div id="menu2" class="tab-pane fade">
        		<div class="panel panel-default">
        			<div class="panel-heading"> <strong><i class="fa fa-list"></i> Description</strong></div>
        			<div class="panel-body">
	        		  	<textarea disabled id="desc" name="data[Item][description]">
	                  	{!!$item->description!!}
	                  	</textarea>
	              	</div>
    		</div>
               <div class="panel panel-default">
        			<div class="panel-heading"><strong><i class="fa fa-list"></i> Specifications</strong></div>
  					<div class="panel-body">
  						
        		  	<textarea id="spec" disabled name="data[Item][specifications]">
                  	{!!$item->specifications!!}
                  	</textarea>
  					</div>
        		</div>
        	</div>

</form>
<script>
function remove_image(id){
	console.log(id);
}
</script>
@endsection