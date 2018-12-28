@extends('layouts.sub-page')
@section('content')

<section>
<div class="container padding-y">
<div class="card">
	<div class="card-header">Ordered Items</div> 

	<form method="POST" action="{{route('order')}}">
		{{csrf_field()}}
	<div class="panel-body">
		<table class="table borderless"> 
			<tbody>
				<?php $count = 1 ?>
				@foreach($cartData as $cart)
				<tr>
					<td> 
						<div class="img-wrap"><img src="{{asset('/storage/uploads/'.$cart->item->images[0]->filename)}}" class="img-thumbnail img-sm"></div>
						</div>
						
					</td>
					<td>
						<input type="hidden" name="Cart[][id]" value="{{$cart->id}}">
						<big>{{$cart->item->title}}</big> 
					</td>

					<td>
						<input type="text" class="form-control form-control-lg money"  id="price{{$count}}" value="{{$cart->item->price}}" name="" class="" disabled>
					</td>
					<td>
						<input type="text" class="form-control form-control-lg" id="quantity{{$count}}" onkeyup="computeCart({{$count}}, {{$cart->id}})" name="" class="" value="{{$cart->quantity}}">
					</td>

					<td><input type="text" class="form-control form-control-lg money" name="" disabled id="total{{$count}}" value="{{$cartTotal = $cart->quantity * $cart->item->price}}"></td>
				</tr>
				<?php $count ++ ?>
				@endforeach 

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<th>Sub total:</th>
					<td> <input type="text" disabled id="total" class="form-control form-control-lg money" readonly placeholder=""></td>
				</tr>
			</tbody>
		</table> 
		</div>
		</div>

		<br> 
		<div class="card">
			<div class="card-header">Shipping Address / Contact number</div>
			<div class="card-body">
				<div class="form-group">
					<label>House number</label>
					<input  class="form-control form-control-lg toupper toupper" 
					value="{{$user_address->house_num or ''}}" name="ShippingAddress[house_num]"></input>
				</div>

				<div class="form-group">
					<label>Street</label>
					<input class="form-control form-control-lg toupper" value="{{$user_address->street or ''}}" name="ShippingAddress[street]"></input>
				</div>

				<div class="form-group">
					<label>Barangay</label>
					<input class="form-control form-control-lg toupper" value="{{$user_address->barangay or ''}}" name="ShippingAddress[barangay]"></input>
				</div>

				<div class="form-group">
					<label>Municipality</label>
					<input class="form-control form-control-lg toupper" value="{{$user_address->municipality or ''}}"  name="ShippingAddress[municipality]"></input>
				</div>
				<!-- <div class="form-group">
				<label>Address:</label>
					<textarea class="form-control form-control-lg toupper" name="User[address]">{{ Auth::user()->contact_number != null ? Auth::user()->contact_number : asd }}</textarea>
				</div> -->
			<div class="form-group">
				<label>Mobile number</label>
				<input class="form-control form-control-lg" value="{{ Auth::user()->contact_number != null ? Auth::user()->contact_number : asd }}" class="form-control form-control-lg" name="User[contact_number]">
			</div>
			</div>
		</div>
		<br>
		<div class="card">
			<div class="card-header">Payment method</div>
			<div class="card-body">
				<div class="form-group">
					<select class="form-control form-control-lg" name="Order[payment_method]">
						<option>Cash on  Delivery (COD)</option>
						<option>Paypal</option>
						<option>Option</option>
					</select>
				</div>
			</div>
		</div>

@if(empty(Auth::user()))

		<div class="panel panel-default">
			<div class="panel-heading">Account information</div>
			<div class="panel-body">
				<div class="form-group">
					<label>Name:</label>
					<input type="text" class="form-control form-control-lg" name="User[name]">
				</div>
				<div class="form-group">
					<label>Email Address:</label>
					<input type="email" name="User[email]" class="form-control form-control-lg">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="User[password]" class="form-control form-control-lg">
				</div>
			</div>
		</div>
@endif


<br>
		<div class="form-group">
			<button class="btn btn-success btn-lg" type="submit">Proceed to checkout <i class="fa fa-check"></i></button>
			<button class="btn btn-outline-success btn-lg">Cancel order</button>
		</div>
		</form>
</section>


<script type="text/javascript">
		getTotal2();
	function getTotal2(){
			var sum = 0;
			for(i = 1; i < <?php echo $count ?>; i ++ ){ 
				var price = $('#price' + i).val();
				var quantity = $('#quantity' + i).val();
				var sum = parseInt(quantity) * parseCurrency(price) ;
				$('#total'+i).val(sum).simpleMoneyFormat(); 
			} 
	}
		function getTotal(){
			var sum = 0;
			for(i = 1; i < <?php echo $count ?>; i ++ ){
				var eachTotal = $('#total' + i).val();
				var sum = sum + parseCurrency(eachTotal) ;
			}
			$('#total').val(sum).simpleMoneyFormat();

		}
		
		function computeCart(id, cartId){
			var price = $('#price' + id).val();
			var quantity = $('#quantity' + id).val();
			total  = parseCurrency(price) * parseCurrency(quantity);
			$.ajax({
				method: "POST",
				url:'/api/cart/updateQuantity',
				data:{cartId,quantity},
				success:function(){
					$('#total' + id).val(total).simpleMoneyFormat(); 
					getTotal(); 
				}
			})
		}  

		function parseCurrency( num ) {
		    return parseFloat( num.replace( /,/g, '') );
		}
getTotal();

$('.toupper').keyup(function(){
	this.value = this.value.toUpperCase();
});
</script>
@endsection