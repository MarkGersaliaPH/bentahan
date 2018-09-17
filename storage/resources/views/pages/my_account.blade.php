@extends('layouts.default')
@section('content')
<section>
<div class="container"> 
        <div class="col-sm-2">  
           {{--  <div class="profile-image2" style="background:url(storage/uploads/{{Auth::user()->profile_picture}})"></div> <br>
            <strong>{{Auth::user()->name}}</strong><br>
            <span class="text-muted">{{Auth::user()->contact_number}}</span>
            <span class="text-muted">{{Auth::user()->address}}</span>
            <br><br>  --}}
            <ul class="list-unstyled profile-navigation"> 
                <li data-toggle="tab" href="#home" class="active"><i class="fa fa-shopping-bag fa-sm"></i> For Sale Items</li>  
                <li class="title"><i class="fa fa-id-card fa-sm"></i> Profile Information</li>
                <li data-toggle="tab" href="#menu"> General Information </li>  
                <li data-toggle="tab">Account Information</li>   
            </ul> 
            
            <ul class="list-unstyled profile-navigation"> 
                <li class="title"><i class="fa fa-shopping-cart fa-sm"></i> Purchase</li>
                <li>Order History</li>  
                <li>Account Information</li>   
            </ul> 
        </div> 
        <div class="col-sm-10"> 
            <div class="tab-content">
            <div id="home" class="tab-pane fade in active"> 
            <div class="content-heading">For sale items</div>
            <div class="content-container padding-0"> 
                <table class="table  table-dark table-striped">
                    <thead> 
                        <th colspan="2">Item</th>
                        <th>Price</th>
                        <th>Conditions</th>
                        <th>Brand</th>
                        <th>Quantity</th>
                        <th colspan="2">Date posted</th>
                    </thead>
                    <tbody>
                        @foreach($myItem as $items)
                        <tr> 
                            <td>
                                <div class="table-image" style="background:url({{asset('/storage/uploads/'. $items->images[0]->filename )}})">
                                </div>
                            </td>
                            <td>
                                <a href="/my_account/items/view/{{$items->id}}">{{$items->title}}</a>
                            </td>
                            <td>{{$items->price}}</td>
                            <td>{{$items->conditions}}</td>
                            <td>{{$items->brand}}</td>
                            <td>{{$items->quantity}}</td>
                            <td>{{$items->created_at}}</td>
                            <td> 
                                <button class="btn btn-danger btn-xs">Remove</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>  
            <div id="menu" class="tab-pane fade in">
                MENU
            </div>
            </div>  
        </div>  
</div>
</section> 
@endsection