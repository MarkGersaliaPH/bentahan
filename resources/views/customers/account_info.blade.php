@extends('layouts.customer-layout')
@section('content')

<div class="box">
	<div class="form-group border-bottom">
		<h3>My Account Info</h3>
	</div>
	<div class="form-group">

		<img src="{{asset('storage/uploads/'.Auth::user()->profile_picture)}}" style="width:80px" alt="">
	</div>
	<form action="{{route('customer.update_pic')}}" id="upload" method="post" enctype="multipart/form-data">
					{{csrf_field()}}
		
		<div class="form-group">
		<input type="file" name="photo"  onchange="$('#upload').submit()">
		</div>
	</form>
<form method="post" action="{{route('customer.account.update')}}">
					{{csrf_field()}}

				<div class="form-group">
					<label>Name:</label>
					<input type="text" name="User[name]"  data-validation="required" class="form-control" value="{{Auth::user()->name}}">
				</div>

				<div class="form-group">
					<label>Email:</label>
					<input type="email" data-validation="email" required name="User[email]" class="form-control" value="{{Auth::user()->email}}"></input>
				</div>

				<div class="form-group">
					<button class="btn btn-success">Update</button>
				</div>
				</form>

	{{-- <table class="table table-borderless">
	
		<form method="post" action="{{route('customer.account.update')}}">
<div class="form-group">
					<label>House number:</label>
					<input    data-validation="required" class="form-control  toupper toupper" 
					value="{{$address->house_num or ''}}" name="Address[house_num]"></input>
				</div>
		{{csrf_field()}}
		<tr class="m5">
		<th>Name:</th>
		<td><input type="text" name="User[name]"  data-validation="required" class="form-control" value="{{Auth::user()->name}}"></td>
		</tr>
		<tr class="m5">
		<th>Email:</th>
		<td><input type="email" data-validation="required" required name="User[email]" class="form-control" value="{{Auth::user()->email}}"></td>
		</tr>
		<tr>
			<td></td>
			<td><button type="submit" class="btn btn-primary">Update</button></td>
		</tr>
		</form>
	</table> --}}
</div>

<script type="text/javascript">
	$.validate({
  form : '#upload, #user'
});
</script>

@endsection