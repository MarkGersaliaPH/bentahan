@extends('layouts.store-dashboard')
@section('content')  
<div class="page-title">
	<h1>{{$store_details->store_name}}</h1>
</div>
 
<div class="row">
	<div class="col-sm-3">
		<div class="widget">
			<div class="widget-heading">
				Test widget
			</div>
			<div class="widget-body">
				{{$item_count}}		
			</div>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="widget">
			<div class="widget-heading">
				Test widget
			</div>
			<div class="widget-body">
				10		
			</div>
		</div>		
	</div>
	<div class="col-sm-3">
		<div class="widget">
			<div class="widget-heading">
				Test widget
			</div>
			<div class="widget-body">
				100
			</div>
		</div>	
	</div>
	<div class="col-sm-3">
		<div class="widget">
			<div class="widget-heading">
				Test widget
			</div>
			<div class="widget-body">
				100
			</div>
		</div>	
	</div>
</div>
<br> 
 

{{--
			<div class="col-sm-4"> 
				<div class="panel panel-default">
					<div class="panel-heading">Purchase
						<span class="pull-right">
							<button class="btn btn-default btn-xs">
							<i class="fas fa-expand-arrows-alt"></i>
							</button>
						</span>
					</div>
					<div class="panel-body">  
					<canvas id="purchaseSale"></canvas> 
					</div>
				<div class="panel-footer">
					<button class="btn btn-default btn-sm">View details</button> 
				</div>
				</div>
			</div>
		</div> --}}
		<div class="row">

			<div class="col-sm-6"> 
				<div class="panel panel-default">
					<div class="panel-heading">Orders 
						<span class="pull-right">
							<button class="btn btn-default btn-xs">
							<i class="fas fa-expand-arrows-alt"></i>
							</button>
						</span>
					</div>
					<div class="panel-body">  
						<strong>Total orders {{$order_count}}</strong>
					<canvas id="orderChart"></canvas> 
					</div> 
				</div>
			</div>
				<div class="col-sm-6"> 
				<div class="panel panel-default" id="sales">
					<div class="panel-heading">Sales 
						<span class="pull-right">
							<button class="btn btn-default btn-xs" id="expand">
							<i class="fas fa-expand-arrows-alt"></i>
							</button>
						</span>
					</div>
					<div class="panel-body">   
					<canvas id="myChart"></canvas> 
					</div> 
				</div>
			</div>

		<!-- 	<div class="col-sm-6">
				<div class="panel panel-default">
					<div class="panel-heading">Best Seller Items</div>
					  <div class="panel-body">  
						<table class="table table-bordered table-striped table-hover">
							<thead>
								<th>Item</th>
								<th>Sales</th>
							</thead>
							<tbody>
								<tr>
									<td>
										<a href="">Asus Laptop</a>
									</td>
									<td>
										20%
									</td>
								</tr>
								<tr>
									<td>
										<a href="">Asus Laptop</a>
									</td>
									<td>
										20%
									</td>
								</tr>
								<tr>
									<td>
										<a href="">Asus Laptop</a>
									</td>
									<td>
										20%
									</td>
								</tr>
								<tr>
									<td>
										<a href="">Asus Laptop</a>
									</td>
									<td>
										20%
									</td>
								</tr>
							</tbody>
						</table>
					 </div>  
				</div>
			</div> -->
		</div>


<script type="text/javascript"> 
		$('#expand').toggle(function(){
			  $('#sales').css({
			        position: 'fixed',
			        top: 20,
			        right: 100,
			        bottom: 20,
			        left: 100,
			        zIndex: 99999999, 
			        overflow: hidden,
					'box-shadow': "0px 0px 300px -1px rgba(0,0,0,0.72)"
			    });
		}); 
</script>

<script>
var data = {
        labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
        datasets: [{
            label: 'Sales',
            data: [12, 50, 3, 100, 2, 20, 19, 50, 23, 40, 20, 3],
            backgroundColor: [

                '#4086f4',
                // 'rgba(255, 99, 132, 0.2)',
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)',
                // 'rgba(255, 99, 132, 0.2)',
                // 'rgba(54, 162, 235, 0.2)',
                // 'rgba(255, 206, 86, 0.2)',
                // 'rgba(75, 192, 192, 0.2)',
                // 'rgba(153, 102, 255, 0.2)',
                // 'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                // 'rgba(255,99,132,1)',
                // 'rgba(54, 162, 235, 1)',
                // 'rgba(255, 206, 86, 1)',
                // 'rgba(75, 192, 192, 1)',
                // 'rgba(153, 102, 255, 1)',
                // 'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    };

$.getJSON('/charts/orders',function(response){
		console.log(response);
		var data2 = {
        labels: ["Completed orders", "Canceled orders",'Pending Orders','Processing Orders'],
        datasets: [{
            label: 'Orders',
            data: response,
            backgroundColor: [ 
                '#31a952',
                '#eb4132',
                '#fbbc05',
                '#4086f4'
            ],
            borderColor: [
            ],
            borderWidth: 1
        }]
    };
 

	var ctx = document.getElementById("orderChart");
	var myChart = new Chart(ctx, {
	    type: 'pie',
	    data: data2,
	    options: {
	        scales: {
	            yAxes: [{
	                ticks: {
	                    beginAtZero:true
	                }
	            }]
	        }
	    }
	});


});
  



var orderChart = document.getElementById("myChart");
var orderChart = new Chart(orderChart, {
    type: 'line',
    data:data 
});

var orderChart = document.getElementById("purchaseSale");
var orderChart = new Chart(orderChart, {
    type: 'pie',
    data:data 
});
</script>


@endsection



