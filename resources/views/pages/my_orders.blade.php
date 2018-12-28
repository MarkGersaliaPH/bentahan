@extends('layouts.customer-layout')
@section('content') 
 
	<table class="table table-striped">
		<thead class="bg-secondary shadow-sm text-white" style="text-transform: uppercase;"> 
			<tr>
				<th scope="col" width="250">Item</th>
				<th scope="col" width="120">Order ID</th>
				<th scope="col" >Status</th>
				<th scope="col" >Date ordered</th>
				<th scope="col" ></th>
			</tr>
		</thead>
		<tbody>
			@foreach($orders as $order)
			<tr>
				<td>
 
						<figure class="media">
							<div class="img-wrap"><img src="{{asset('storage/uploads/'.$order->item->images[0]->filename)}}" class="img-sm"></div>
							<figcaption class="media-body">
								<h6 class="title text-truncate"><a href="">{{$order->item->title}}</a></h6>
								<dl class="dlist-inline small">
								  <dt>Size: </dt>
								  <dd>XXL</dd>
								</dl>
								<dl class="dlist-inline small">
								  <dt>Color: </dt>
								  <dd>Orange color</dd>
								</dl>
							</figcaption>
						</figure>

				</td>
				<td class=" text-truncate">
					{{$order->transaction_id}}
				</td>
				<td><label class="badge 
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
						} ?> text-white">{{$order->status}}</label></td>
				<td>{{date('D F d, Y h:s a',strtotime($order->created_at))}}</td>
				<td>
					<a href="{{route('customer.orders.view',$order->transaction_id)}}" title="View Order"><i class="fa fa-eye fa-lg text-muted"></i></a>  
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>  

@endsection