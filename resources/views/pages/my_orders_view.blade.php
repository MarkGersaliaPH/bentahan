@extends('layouts.customer-layout')
@section('content')

<div class="card card-body border-0 shadow-sm"> 
	
	<dl class="dlist-align">
	  <dt>Transaction: </dt>
	  <dd class="">
	 	{{$order->transaction_id}}
	  </dd>
	</dl>

	<dl class="dlist-align">
	  <dt>Order Status: </dt>
	  <dd >
	 	<span class="badge 
						<?php switch ($order->status) { 
							case 'pending':
								# code...
								echo 'badge-warning';		
								break;
							case 'processing':
								# code...
								echo 'badge-info';
								break;
							case 'canceled':
								# code...
							echo 	'badge-danger';
								break;
							case 'completed':
								# code...
								echo  'badge-success';
								break;
							case 'shipped':
								# code...
								echo  'badge-success';
								break;
							case 'recieved':
								# code...
								echo  'badge-success';
								break;
							
							default:
								# code...
								break;
						} ?> text-white">{{$order->status}}</span>
	  </dd>
	</dl>
	<br><br>
 <div class="row">
 <div class="col-sm">
	 	
	<dl class="dlist-align">
	  <dt>Store: </dt>
	  <dd class="text-right">
	 	{{$order->seller_info->store->store_name}}
	  </dd>
	</dl>
	<dl class="dlist-align">
	  <dt>ordered: </dt>
	  <dd class="text-right">{{$order->created_at}}</dd>
	</dl>
	<dl class="dlist-align">
	  <dt>Payment method:</dt>
	  <dd class="text-right">{{$order->payment_method}}</dd>
	</dl>  
 </div>
 <div class="col-sm border-left">  
 	<figure class="itemside">
				<div class="aside">
					<span class="icon-wrap text-muted"><i class="fa-lg fa fa-map"></i> </span>
				</div>
				<figcaption class="text-wrap">
					<h5 class="title"> Delivery Address </h5>
					<h4 class="text-muted">
						{{$order->buyer_info->complete_address->house_num.' '.
							$order->buyer_info->complete_address->street.' '.
							$order->buyer_info->complete_address->barangay.' '.
							$order->buyer_info->complete_address->municipality}}
					</h4>
				</figcaption>
			</figure> <!-- iconbox // -->

 </div>
 </div>
<br>
	<div class="">
		<table class="table">
			<thead class="bg-dark text-white shadow-sm">
				<th>Product</th>
				<th>Quantity</th>
				<th>Unit price</th>
				<th>Total</th>
			</thead>
			<tbody>
				<tr>
					<td>
						<figure class="itemside">
							<div class="aside"><div class="img-wrap img-sm">
								<img src="{{asset('storage/uploads/'.$order->item->images[0]->filename)}}"></div></div>
							<figcaption class="p-2">
								<h6 class="title">{{$order->item->title}}</h6> 
							</figcaption>
						</figure>  
					</td>
					<td style="width: 120px;">
						<input type="" disabled class="form-control" name=""  id="quantity" value="{{$order->quantity}}">
					</td>
					<td style="width: 120px;">
						<input type="" disabled  class="form-control" id="price" value="{{$order->item->price}}">
					</td>
					<td id="total"> 
					</td>
				</tr>

			<tr>
				<td colspan="3" class="text-right">
					<label>Sub total:</label>
				</td> 
				<td id="sub_total"> 
				</td>
			</tr>
			<tr>
				<td colspan="3" class="text-right">
					<label>Shipping Fee:</label>
				</td> 
				<td> 
					Free
				</td>
			</tr>
			<tr>
				<td colspan="3" class="text-right">
					<label>Total:</label>
				</td> 
				<td id="super_total"> 
					 
				</td>
			</tr> 
			<tr>
				<td colspan="4">
				@if($order->status == 'shipped')
				<button onclick="recieved('{{$order->transaction_id}}')" class="btn btn-primary">Item recieved</button>
				@else

				<button onclick="cancel('{{$order->transaction_id}}')" class="btn btn-outline-danger"><i class="fa fa-times"></i> Cancel order</button>

				@endif

				 </td>
			</tr>
			</tbody>
		</table>
		</div>
		<br>
		<table class="table table-bordered "> 
			<thead class="shadow-sm">
				<th>Notes</th>
				<th>Status</th> 
				<th>Dated added</th>
			</thead>
			<tbody>
				@foreach($order->history as $history) 
					<tr>
						<td><i class="fa fa-comments text-success fa-lg"></i>  {{$history->notes}}</td>
						<td>
							<label class="badge 
						<?php switch ($history->status) { 
							case 'pending':
								# code...
								echo 'badge-warning';		
								break;
							case 'processing':
								# code...
								echo 'badge-info';
								break;
							case 'canceled':
								# code...
							echo 	'badge-danger';
								break;
							case 'completed':
								# code...
								echo  'badge-success';
								break;

							case 'shipped':
								# code...
								echo  'badge-success';
								break;

							case 'recieved':
								# code...
								echo  'badge-success';
								break;
							
							default:
								# code...
								break;
						} ?> text-white">{{$history->status}}</label>
						</td> 
						<td>{{$history->created_at}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

	</div>


<script type="text/javascript">
	var quantity = $('#quantity').val();
	var price = $('#price').val();
	var total = parseCurrency(quantity) * parseCurrency(price);
	$('#total').html(total).simpleMoneyFormat();
	$('#sub_total').html(total).simpleMoneyFormat();
	$('#super_total').html(total).simpleMoneyFormat();


	function parseCurrency( num ) {
	    return parseFloat( num.replace( /,/g, '') );
	}

	function recieved( id ){
		$.get('/api/item/status/recieved/'+ id,function(response){
			location.reload();
			
		});
	}
	function cancel( id ){
		$.get('/api/item/status/canceled/'+ id,function(response){
			location.reload();
		});
	}
</script>
@endsection