@extends('layouts.sub-page')
@section('content')

<header class="bg-pattern padding-y text-white">
	<div class="container">
		<h4 class="title-section">Your cart</h4>
	</div> 
</header>


<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content bg padding-y border-top">
<div class="container">
@if(!$cartData)

AASLDKKSKLJD
@endif
<div class="row">
	<main class="col-sm-9">

<div class="card">
<table class="table table-hover shopping-cart-wrap">
<thead class="text-muted">
<tr>
  <th scope="col">Product</th>
  <th scope="col" width="120">Quantity</th>
  <th scope="col" width="120">Price</th>
  <th scope="col" class="text-right" width="200">Action</th>
</tr>
</thead>
<tbody>

<?php $count = 1 ?>
@foreach($cartData as $cart)


<tr>
	<td>
<figure class="media">
	<div class="img-wrap"><img src="{{asset('/storage/uploads/'.$cart->item->images[0]->filename)}}" class="img-thumbnail img-sm"></div>
	<figcaption class="media-body">
		<h6 class="title text-truncate">{{$cart->item->title}}</h6>
		<dl class="dlist-inline small">
		  <dt>Categories: </dt>
		  <dd>{{$cart->item->categories}}</dd>
		</dl>
		<!-- <dl class="dlist-inline small">
		  <dt>Color: </dt>
		  <dd>Orange color</dd>
		</dl> -->
	</figcaption>
</figure> 
	</td>
	<td> 
		<input type="text" class="form-control" id="quantity{{$count}}" onkeyup="computeCart({{$count}}, {{$cart->id}})" name="" class="" value="{{$cart->quantity}}">
	</td>
	<td> 
		<div class="price-wrap"> 
			<input type="hidden" class="form-control"  id="price{{$count}}" value="{{$cart->item->price}}" name="" class="" disabled>
			<var class="price">PHP {{$cart->item->price}}</var> 
			<!-- <small class="text-muted">(USD5 each)</small>  -->
		</div> <!-- price-wrap .// -->
	</td>
	<td class="text-right"> 

<input type="hidden" class="form-control" name="" disabled id="total{{$count}}" value="{{$cartTotal = ($cart->quantity * $cart->item->price)}}">
	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-outline-success" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<btn onclick="removeItem({{$cart->id}})"  class="btn btn-outline-danger"> × Remove</btn>
	</td>
</tr>

				<?php $count ++ ?>
@endforeach
</tbody>
</table>
<br>
</div> <!-- card.// -->
<br>
<a href="{{route('checkout')}}" class="btn btn-primary"><i class="fa fa-sign-in"></i>Checkout</a>
<a href="/" class="btn btn-outline-primary"><i class="fa fa-sign-in"></i>Continue Shopping</a>

	</main> <!-- col.// -->
	<aside class="col-sm-3">
<p class="alert alert-success">Add USD 5.00 of eligible items to your order to qualify for FREE Shipping. </p>
<dl class="dlist-align">
  <dt>Total price: </dt>
  <dd class="text-right">USD 568</dd>
</dl>
<dl class="dlist-align">
  <dt>Discount:</dt>
  <dd class="text-right">USD 658</dd>
</dl>
<dl class="dlist-align h4">
  <dt>Total:</dt>
  <dd class="text-right" id="total"><strong></strong></dd>
</dl>
<hr>
<!-- <figure class="itemside mb-3">
	<aside class="aside"><img src="images/icons/pay-visa.png"></aside>
	 <div class="text-wrap small text-muted">
Pay 84.78 AED ( Save 14.97 AED )
By using ADCB Cards 
	 </div>
</figure>
<figure class="itemside mb-3">
	<aside class="aside"> <img src="images/icons/pay-mastercard.png"> </aside>
	<div class="text-wrap small text-muted">
Pay by MasterCard and Save 40%. <br>
Lorem ipsum dolor 
	</div>
</figure> -->

	</aside> <!-- col.// -->
</div>

<br>
<section class="best-seller bg-white"> 
<div class="container">
<header class="section-heading">
<h4 class="title-section">Best sellers</h4>
</header>
<div class="owl-carousel owl-init slide-items" data-items="5" data-margin="20" data-dots="true" data-nav="true">
		@for($i = 1; $i <= 6; $i ++)
	<div class="item-slide">

	<figure class="card card-product">
		<span class="badge-new"> NEW </span>
		<div class="img-wrap"> <img src="{{asset('/uikit/images/items/'.$i.'.jpg')}}"> </div>
		<figcaption class="info-wrap text-center">
			<h6 class="title text-truncate"><a href="#">First item name</a></h6>
		</figcaption>
	</figure> <!-- card // -->
	</div>

		@endfor
</div>
</section>	


</div> <!-- container .//  -->
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


		function getTotal(){
			var sum = 0;
			for(i = 1; i < <?php echo $count ?>; i ++ ){
				var eachTotal = $('#total' + i).val();
				var sum = sum + parseCurrency(eachTotal) ;
			}
			$('#total').html(sum).simpleMoneyFormat(); 

		}

		function removeItem(id){
			$.ajax({
				method:'GET',
				url:'/api/cart/remove/' + id,
				success:function(response){
					alertify.success('Item successfully removed');
                    $('.table').load(window.location.href + ' .table'); 
					countCart();
					console.log(response)
				}
 			})
		}
		getTotal();

</script>


@endsection
