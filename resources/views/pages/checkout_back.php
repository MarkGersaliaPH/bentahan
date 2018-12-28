@extends('layouts.sub-page')
@section('content')

<section>
<div class="container">
<div class="panel panel-default">
	<div class="panel-heading">
		Ordered Items
	</div>
	<form method="POST" action="{{route('order')}}">
		{{csrf_field()}}
	<div class="panel-body">
		<table class="table borderless"> 
			<tbody>
				<?php $count = 1 ?>
				@foreach($cartData as $cart)
				<tr>
					<td>
						

						<div class="table-image" style="background:url('{{asset('/storage/uploads/'.$cart->item->images[0]->filename)}}') ">
							
						</div>
						
					</td>
					<td>
						<input type="hidden" name="Cart[][id]" value="{{$cart->id}}">
						<big>{{$cart->item->title}}</big> 
					</td>

					<td>
						<input type="text" class="form-control money"  id="price{{$count}}" value="{{$cart->item->price}}" name="" class="" disabled>
					</td>
					<td>
						<input type="text" class="form-control" id="quantity{{$count}}" onkeyup="computeCart({{$count}}, {{$cart->id}})" name="" class="" value="{{$cart->quantity}}">
					</td>

					<td><input type="text" class="form-control money" name="" disabled id="total{{$count}}" value="{{$cartTotal = $cart->quantity * $cart->item->price}}"></td>
				</tr>
				<?php $count ++ ?>
				@endforeach 

				<tr>
					<td></td>
					<td></td>
					<td></td>
					<th>Sub total:</th>
					<td> <input type="text" disabled id="total" class="form-control money" readonly placeholder=""></td>
				</tr>
			</tbody>
		</table> 
		</div>
		</div>


		<div class="panel panel-default">
			<div class="panel-heading">Shipping Address / Contact number</div>
			<div class="panel-body">
			<!-- 	<div class="form-group">
					<label>House number</label>
					<input class="form-control" name="ShippingAddress[house_num]"></input>
				</div>

				<div class="form-group">
					<label>Street</label>
					<input class="form-control" name="ShippingAddress[street]"></input>
				</div>

				<div class="form-group">
					<label>Barangay</label>
					<input class="form-control" name="ShippingAddress[barangay]"></input>
				</div>

				<div class="form-group">
					<label>Municipality</label>
					<input class="form-control"  name="ShippingAddress[municipality]"></input>
				</div>
				<div class="form-group">
					<input type="checkbox" name="" checked="">
					<label>Save this address to my profile</label>
				</div> -->
				<div class="form-group">
				<label>Address:</label>
					<textarea class="form-control" name="User[address]"></textarea>
				</div>
			<div class="form-group">
				<label>Mobile number</label>
				<input class="form-control" class="form-control" name="User[contact_number]">
			</div>
			</div>
		</div>

		<div class="panel panel-default">
			<div class="panel-heading">Payment method</div>
			<div class="panel-body">
				<div class="form-group">
					<select class="form-control" name="Order[payment_method]">
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
					<input type="text" class="form-control" name="User[name]">
				</div>
				<div class="form-group">
					<label>Email Address:</label>
					<input type="email" name="User[email]" class="form-control">
				</div>
				<div class="form-group">
					<label>Password:</label>
					<input type="password" name="User[password]" class="form-control">
				</div>
			</div>
		</div>
@endif
		<div class="form-group">
			<button class="btn btn-success btn-lg" type="submit">Proceed to checkout <i class="fa fa-check"></i></button>
			<button class="btn btn-default btn-lg">Cancel order</button>
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
</script>
@endsection