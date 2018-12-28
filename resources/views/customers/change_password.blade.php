@extends('layouts.customer-layout')
@section('content')

<div class="box">
	
	<div class="form-group border-bottom">
		<h3>Change Password</h3>
	</div>
	<form method="post" action="{{route('customer.change.password')}}">

	{{csrf_field()}}
	<div class="form-group">
		<strong>Old password:</strong>
		<input type="password"  data-validation="required" placeholder="*********" class="form-control" name="old" value="">
	</div>

	<br>

	<div class="form-group">
		<strong>New password (at least 6 characters):</strong>
		<input type="password"   data-validation="length" data-validation-length="min6"  placeholder="*********" class="form-control" name="new" value="">
	</div>

	<div class="form-group">
		<strong>Confirm:</strong>
		<input type="password" data-validation="length" data-validation-length="min6"  placeholder="*********" class="form-control" name="confirm" value="">
	</div>
	<div class="form-group">
		<button class="btn btn-primary">Update</button>
	</div>
	</form>
</div>

@endsection