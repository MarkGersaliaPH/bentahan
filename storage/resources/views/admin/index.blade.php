@extends('layouts.admin-dashboard')
@section('content')
<div class="page-header">
    <h4>Dashboard</h4>
</div>

<div class="row">
        <div class="col-sm-2">
            <div class="panel panel-default  dark-bg">
                <div class="panel-body"> 
                    <h1 id="totalOrders"> 
                                    <i class="fas fa-user-lock"></i>  
                        0
                    </h1>  
                    <small class="text-muted">System users</small>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="panel panel-default  dark-bg">
                <div class="panel-body"> 
                    <h1>
                        <i class="fas fa-user-tag"></i>
                        <span  id="totalCustomer"></span>
                    </h1>    
                    <small class="text-muted">Total Customers</small>
                </div>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="panel panel-default  dark-bg">
                <div class="panel-body"> 
                    <h1>
                        <i class="fas fa-store-alt"></i> 
                        <span id="totalStore"></span>
                    </h1>  
                    <small class="text-muted">Stores </small>
                </div>
            </div>
        </div>
        
        <div class="col-sm-2">
                <div class="panel panel-default  dark-bg ">
                    <div class="panel-body"> 
                        <h1> 
                            <i class="fa fa-tv"></i>
                            <span  id="totalItem"></span>
                        </h1> 
                       
                        <small class="text-muted"> Total Items</small>
                    </div>
                </div>
            </div>
        <div class="col-sm-2">
                <div class="panel panel-default  dark-bg">
                    <div class="panel-body"> 
                        <h1 id="totalOrders">
                                <i class="fas fa-bezier-curve"></i>
                            <span id="totalCategories"></span>
                        </h1>   
                        <small class="text-muted">Total Categories</small>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                    <div class="panel panel-default  dark-bg">
                        <div class="panel-body"> 
                            <h1 id="totalOrders">
                                    <i class="fas fa-signal"></i> 
                                0
                            </h1> 
                            <small class="text-muted">Online Users</small>
                        </div>
                    </div>
                </div>
</div>
<br><br>
<h4>
    Welcome to <strong>Lara<span class="text-danger">Cart</span></strong> Dashboard
</h4>
<p>
    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe quas laudantium minima eius perferendis fugiat nisi corrupti, eligendi omnis quibusdam, ex facilis aspernatur similique nesciunt officia, aperiam quos ipsam quaerat!
</p>
@endsection