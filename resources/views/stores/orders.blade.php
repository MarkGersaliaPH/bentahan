@extends('layouts.store-dashboard')
@section('content')

	<div class="page-title">
 	<span>{{$pageTitle}}</span>
 </div> 

<table class="table table-striped table-hover"  id="myTable">
	<thead>
		<th>Item</th> 
		<th>Transaction ID</th>
		<th>Quantity</th>
		<th>Ordered by</th>
		<th>Payment Method</th>
		<th>Status</th>
		<th>Date ordered</th> 
	</thead>
	<tbody>
		@foreach($data as $order)
			<tr>
				<td><a href="{{route('order.view',$order->transaction_id)}}">{{$order->item->title}}</a></td> 
				<td>{{$order->transaction_id}}</td>
				<td>{{$order->quantity}}</td>
				<td>{{$order->buyer_info->name}}</td>
				<td>{{$order->payment_method}}</td>
				<td>{{$order->status}}</td>
				<td>{{$order->created_at}}</td> 
			</tr>
		@endforeach
	</tbody>
</table>


@endsection