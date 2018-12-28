<div class="padding-0" style="background:  #fff;">
<div class="vendor-logo" style="background: url('{{asset('storage/uploads/'.Auth::user()->store->logo)}}');">
</div>
		</div>
<!-- 		<ul class="list-group">
		  <a href="{{route('storeDashboard')}}" class="list-group-item {{$nav_class =='Dashboard'?'active':''}} "><i class="fas fa-tachometer-alt"></i>  Dashboard</a>
		  <a href="{{route('storeItems')}}" class="list-group-item <?php echo $nav_class =='Items'?'active':'' ?>"><i class="fas fa-tv"></i> Items</a>
		  <a href="{{route('storeOrders')}}" class="list-group-item  {{$nav_class =='Orders'?'active':''}} ""><i class="fas fa-shopping-bag"></i> Orders</a>
		  <a href="{{route('storeDetails')}}" class="list-group-item  {{$nav_class =='My Store'?'active':''}} ""><i class="fas fa-building"></i> Store Details</a> 
		  <a href="" class="list-group-item"><i class="fa fa-user-circle"></i> My Account</a>
		  <a href="" class="list-group-item"><i class="fa fa-cog"></i> Options</a>
		</ul> -->

			<h5 class="text-center">{{Auth::user()->store->store_name}}</h5>  
			<div class="well white-bg">
			<center>
			<small>Rating</small>
			<h1 class="text-center">4.1</h1>
			
				<i class="fa fa-star text-warning"></i>
				<i class="fa fa-star text-warning"></i>
				<i class="fa fa-star text-warning"></i>
				<i class="fa fa-star text-warning"></i>
				<i class="fa fa-star"></i>
			 </center>
			 </div> 
			<div class="form-group">
			<button class="btn btn-primary btn-block">
				My Store
			</button>
			<button class="btn btn-default btn-block">
				My Account
			</button>
			</div>
	</div>
