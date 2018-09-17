@extends('layouts.admin-dashboard')
@section('content')
<ol class="breadcrumb">
    <li><a href="/admin/customers">Customers</a></li>
    <li><a href="/admin/customers">View {{$customer->name}}</a></li>
</ol>
<div class="btn-group">
        <button id="generalBtn" type="button" class="btn btn-primary">General</button>   
        <button id="historyBtn" type="button" class="btn btn-primary">History</button>
        <button type="button" class="btn btn-primary">Transactions</button>   
      </div>
      <br><br>
      
      <div class="content-container">
          <div id="general">
        <h4>General Information</h4>
        <hr>
        <div class="profile-image" style="background:url('{{asset('storage/uploads/' . $customer->profile_picture )}}')"></div> 
        <table class="table table-striped borderless" >
                <tr>
                    <th style="width:200px">Name:</th>
                    <td>{{$customer->name}}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{$customer->email}}</td>
                </tr>
                <tr>
                    <th>Date Registed:</th>
                    <td>{{$customer->created_at}} ({{$customer->created_at->diffForHumans()}})</td>
                </tr>
                <tr>
                    <th>Contact number:</th>
                    <td><span class="text-danger">NULL</span></td>
                </tr>
                <tr>
                    <th>Address:</th>
                    <td><span class="text-danger">NULL</span></td>
                </tr>
                <tr>
                    <th>Billing address:</th>
                    <td><span class="text-danger">NULL</span></td>
                </tr>
                <tr>
                    <th>Shipping address:</th>
                    <td><span class="text-danger">NULL</span></td>
                </tr>
        </table>
        </div>
        <div id="history" style="display:none;">
                <h5><strong>{{$customer->name}}'s Posted items</strong></h5>
                <table class="table table-striped borderless">
                        <thead>
                                <th colspan="2">Item</th>
                                <th>Status</th>
                                <th>Price</th>
                                <th>Posted on</th> 
                            </thead>
                            @foreach($itemPosted as $item)
                            @if($item->seller->id == $customer->id) 
                            <tr>
                                <td>
                                <center>
                                <div class="table-image" style="background:url({{asset('img/'. $item->images[0]->filename )}})">
                                </div> 
                                </center>
                                </td>
                                <td><a href="/admin/items/view/{{$item->id}}">{{$item->title}}</a></td>
                                <td>
                                    @if($item->status->id == 1)
                                    <label for="" class="label label-success">
                                            {{$item->status->display}}
                                    </label>
                                    @endif
                                </td>
                                <td>{{$item->price}}</td>
                                <td>{{$item->created_at}}</td>
                            </tr>
                            
                            @endif
                        @endforeach
                </table>
        </div>
    </div>

@endsection