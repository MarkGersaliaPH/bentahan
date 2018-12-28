@extends('layouts.store-dashboard')
@section('content')  
 
<div class="page-title">
	<h2>{{$pageTitle}}</h2>
</div>
 
<div class="row">
	<div class="col-sm-2">
		<label>Seller name:</label>
	</div>
	<div class="col-sm-10">
		<div class="form-group">
			<input type="text" name="" value="{{Auth::user()->name}}" class="form-control">
		</div>
	</div>

	<div class="col-sm-2">
		<label>Gender:</label>
	</div>
	<div class="col-sm-10">
		<div class="form-group">
		<select name="" class="form-control">
			<option value="">Male</option>
			<option value="">Female</option>
		</select>
		</div>
	</div>


	<div class="col-sm-12">
		<div class="form-group">
			<br>
			<strong>Change Password:</strong>
			<hr>
		</div>
	</div>
	<div class="col-sm-2">
		<label>Old password:</label>
	</div>
	<div class="col-sm-10">
		<div class="form-group" id="old_password">
			<input type="password" onkeyup="checkPassword()" id="old" class="form-control" name="" value="" placeholder="">
		</div>
	</div>


	<div class="col-sm-2">
		<label>New password:</label>
	</div>
	<div class="col-sm-10">
		<div class="form-group">
			<input type="password" class="form-control" name="" value="" placeholder="">
		</div>
	</div>

</div>

<script type="text/javascript">
	function checkPassword(){
		var old_password = $('#old').val();
		$.getJSON('/check_password/' + old_password,function(response){
			console.log(response)
			if(response == 0){
				$('#old_password').addClass('has-error'); 
			}
				$('#old_password').removeClass('has-error'); 
		});
	}
</script>

@endsection
