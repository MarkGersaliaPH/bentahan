@extends('layouts.store-dashboard')
@section('content')  

<div class="page-title">
	{{$pageTitle}}
</div>


<div class="row">
	<div class="col-sm-2"><label>Store logo:</label></div>
	<div class="col-sm-10"> 
		<div class="form-group">
			<form action="{{route('store_update_logo')}}" method="POST"  id="logo" enctype="multipart/form-data">
				{{csrf_field()}}
			<label class="btn btn-default">
				<input type="file" name="logo" onchange="$('#logo').submit()" value="" style="display: none;" >
			Select logo
			</label>
			</form> 
		</div> 
		<div class="form-group"> 
			<img class="img img-thumbnail" style="width: 100px" alt="" src="{{asset('storage/uploads/'.$data->logo)}}">
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-2"><label>Store banner:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
			<form action="{{route('store_update_banner')}}" method="POST" id="banner" enctype="multipart/form-data">

				{{csrf_field()}}
			<label class="btn btn-default">
				<input type="file" name="banner" value="" onchange="$('#banner').submit()" style="display: none;">
				Select banner
			</label>
			</form> 

		</div>
		<div class="form-group">
				@if($data->banner == null)
					
				<div class="banner-placeholder">
					<h4>
						No image available
					</h4>
				</div>
				@else
					<img class="img img-thumbnail" alt="" src="{{asset('storage/uploads/'.$data->banner)}}">
				@endif
			</div>
		</div>
	</div>
</div>
 <form action="{{route('storeDetailsSubmit')}}" method="POST" accept-charset="utf-8" id="main">

{{csrf_field()}} 	 
<div class="row">
	<div class="col-sm-2"><label>Seller name:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
		<input type="text" class="form-control" name="data[User][name]" value="{{Auth::user()->name}}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-2"><label>Store name:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
		<input type="text" class="form-control"  name="data[Store][store_name]" value="{{$data->store_name}}">
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-2"><label>Store email:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
		<input type="email" class="form-control" name="data[User][email]" value="{{Auth::user()->email}}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-2"><label>Store phone:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
		<input type="text" class="form-control" name="data[User][contact_number]" value="{{Auth::user()->contact_number}}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-sm-2"><label>Store Address:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
			<textarea name="data[User][address]" rows="5" class="form-control">{{Auth::user()->address}}
			</textarea>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-2"><label>Store Details:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
			<textarea name="data[Store][store_details]" id="desc">{{$data->store_details}}</textarea>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-2"><label>Store shipping policy:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
			<textarea name="data[Store][shipping_policy]" id="my-editor">{{$data->shipping_policy}}</textarea>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-2"><label>Store return policy:</label></div>
	<div class="col-sm-10">
		<div class="form-group">
			<textarea  name="data[Store][return_policy]" id="my-editor2">{{$data->return_policy}}</textarea>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-10">
		<div class="form-group">
			<button type="" class="btn btn-success" onclick="$('#main').submit()">Save Changes</button>
		</div>
	</div>
</div>


 </form>
 
@endsection

