@extends('layouts.store-dashboard')
@section('content')
<ol class="breadcrumb">
	<li><a href="{{route('storeOrders')}}">Orders</a></li>
	<li>{{$pageTitle}}</li>
</ol>

<div class="row">
<div class="col-sm-6">
	<div class="panel panel-primary">
		<div class="panel-heading"><i class="fa fa-shopping-cart"></i> Order details</div>
		<table class="table table-bordered">
			<tr>
				<td><label>Store:</label></td>
				<td>{{Auth::user()->store->store_name}}</td>
			</tr>
			<tr>
				<td><label>Date ordered:</label></td>
				<td>{{$order->created_at}}</td> 
			</tr>
			<tr>
				<td><label>Payment method:</label></td>
				<td>{{$order->payment_method}}</td> 
			</tr>
		</table>
	</div>
</div>

<div class="col-sm-6">
	<div class="panel panel-primary">
		<div class="panel-heading"><i class="fa fa-shopping-cart"></i> Customer details</div>
		<table class="table table-bordered">
			<tr>
				<td><label>Name:</label></td>
				<td>{{$order->buyer_info->name}}</td>
			</tr>
			<tr>
				<td><label>Contact number:</label></td>
				<td>{{$order->buyer_info->contact_number}}</td> 
			</tr>
			<tr>
				<td><label>Email:</label></td>
				<td>{{$order->buyer_info->email}}</td> 

			</tr>
		</table>
	</div>
</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">Order #{{$order->order_id}}</div>
	<div class="panel-body">
		<div class="form-group">
		<strong>Shipping address:</strong>
				{{$order->buyer_info->complete_address->house_num.' '.
					$order->buyer_info->complete_address->street.' '.
					$order->buyer_info->complete_address->barangay.' '.
					$order->buyer_info->complete_address->municipality}}
		</div>
		<br>
		<table class="table table-bordered">
			<thead>
				<th>Product</th>
				<th>Quantity</th>
				<th>Unit price</th>
				<th>Total</th>
			</thead>
			<tbody>
				<tr>
					<td>
						<a href="">{{$order->item->title}}</a>
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
			</tbody>
		</table>
	</div>
</div>

<div class="panel panel-primary">
	<div class="panel-heading">
		Order history
	</div>
	<div class="panel-body"> 
		<table class="table table-bordered"> 
			<tr>
				<th>Dated added</th>
				<th>Note</th>
				<th>Status</th>
				<th>Customer notified</th> 
			</tr>
			<tbody>
				@foreach($order->history as $history)
					<tr>
						<td>{{$history->created_at}}</td>
						<td>{{$history->notes}}</td>
						<td>{{$history->status}}</td>
						<td>{{$history->customer_notified}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<h4>Add history</h4>
		<hr> 
		<form action="{{route('updateOrderHistory',$order->id)}}" method="post">
			{{csrf_field()}}
			<input type="hidden" name="data[Order][order_id]" value="{{$order->id}}">
		<div class="row">
		<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-3">
				<label>Order status</label>
			</div>
			<div class="col-sm-9">
				<div class="form-group">
				<select class="form-control" required name="data[Order][status]">
					<option primary hidden value="">-- Select Action --</option>
					<option>processing</option> 
					<option>processed</option> 
					<option>shipped</option> 
					<option>denied</option>  
					<option>canceled</option> 
					<option>accepted</option> 
					<option>completed</option> 
					<option>refunded</option> 
					<option>voided</option> 
				</select>
				</div>
			</div> 
		</div> 
		<div class="row">
			<div class="col-sm-3">
				<label>Notify customer</label>
			</div>
			<div class="col-sm-9">
				<div class="form-group">
					<input type="checkbox" value='yes' name="data[Order][customer_notified]">
				</div>
			</div> 
		</div> 
		<div class="row">
			<div class="col-sm-3">
				<label>Comment</label>
			</div>
			<div class="col-sm-9">
				<div class="form-group">
					<textarea class="form-control" name="data[Order][notes]"></textarea>
				</div>
			</div> 
		</div>
		<div class="row">
			<div class="col-sm-3"> 
			</div>
			<div class="col-sm-9">
				<div class="form-group">
					<button class="btn btn-success">Add history</button>
				</div>
			</div> 
		</div> 
		</div>
		</form>
	</div>
	</div>
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
</script>
@endsection