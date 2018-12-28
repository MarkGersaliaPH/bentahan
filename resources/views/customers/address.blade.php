@extends('layouts.customer-layout')
@section('content')
<div class="card border-0 shadow-sm">
			<div class="card-body">
				<div class="form-group border-bottom">
					<h3>My Address Book</h3>
				</div>
				<form action="{{route('customer.update.address')}}" method="post">
					{{csrf_field()}}
				<div class="form-group">
					<label>House number:</label>
					<input   required data-validation="required" class="form-control  toupper toupper" 
					value="{{$address->house_num or ''}}" name="Address[house_num]"></input>
				</div>

				<div class="form-group">
					<label>Street:</label>
					<input required data-validation="required" class="form-control  toupper" value="{{$address->street or ''}}" name="Address[street]"></input>
				</div>

				<div class="form-group">
					<label>Barangay:</label>
					<input required data-validation="required" class="form-control  toupper" value="{{$address->barangay or ''}}" name="Address[barangay]"></input>
				</div>

				<div class="form-group">
					<label>Municipality:</label>
					<input required data-validation="required" class="form-control  toupper" value="{{$address->municipality or ''}}"  name="Address[municipality]"></input>
				</div>

				<div class="form-group">
					<label>Contact number:</label>
					<input type="" data-validation="number,required" required class="form-control  toupper" name="User[contact_number]" value="{{ Auth::user()->contact_number }}">
				</div>
					<!-- <div class="form-group">
					<label>Address:</label>
						<textarea required class="form-control  toupper" name="User[address]">{{ Auth::user()->contact_number != null ? Auth::user()->contact_number : asd }}</textarea>
					</div> -->
				<div class="form-group">
					<button class="btn btn-success">Update</button>
				</div>
				</form>
			</div>	
</div>


@endsection