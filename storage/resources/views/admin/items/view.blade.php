@extends('layouts.admin-dashboard')
@section('content') 
<ol class="breadcrumb"> 
    <li><a href="/admin/items">Items</a></li>
    <li>View {{$items->title}}</li>
</ol>
<div class="alert alert-success">
    This item is currently {{$items->status->display}}. Do you want to <strong><a href="">disable?</a></strong>
</div>  

<div class="form-group btn-group"> 
    <a data-toggle="tab" class="btn btn-primary" href="#home">General Details</a>
    <a data-toggle="tab" class="btn btn-primary" href="#menu1">Item Images</a>
    <a data-toggle="tab"  class="btn btn-primary" href="#menu2">Seller Information</a>
</div>   
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
            <div class="page-header">
                <strong>GENERAL DETAILS:</strong> 
            </div>
          <table class="table borderless table-striped table-dark">
              <tr>
                  <th>Item:</th>
                  <td>{{$items->title}}</td>
              </tr>
              <tr>
                  <th>Price:</th>
                  <td>{{$items->price}}</td>
              </tr>
              <tr>
                  <th>Conditions:</th>
                  <td>{{$items->conditions}}</td>
              </tr>
              <tr>
                  <th>Brand:</th>
                  <td>{{$items->brand}}</td>
              </tr>
              <tr>
                  <th>Quantity:</th>
                  <td>{{$items->quantity}}</td>
              </tr>
              <tr>
                  <th>Categories:</th>
                  <td>{{$items->categories}}</td>
              </tr>
              <tr>
                  <th>Date Posted:</th>
                  <td>{{$items->created_at->diffForHumans()}}</td>
              </tr>
                <tr>
                  <th>Description:</th>
                  <td>{!!$items->description!!}</td>
                </tr>
                <tr>
                  <th>Specification:</th>
                  <td>{!!$items->specifications!!}</td>
                </tr>
          </table>

        </div>
        <div id="menu1" class="tab-pane fade"> 
          <div class="page-header">
              <strong>IMAGES</strong>
          </div>  
          <table class="borderless table table-dark table-striped">
                <thead>
                    <th>File name</th>
                    <th>Image</th>
                </thead>
                <tbody>
                    @foreach($items->images as $image)
                    <tr>
                        <td style="width:200px">{{$image->filename}}</td>
                        <td>
                            <div style="background:url(/storage/uploads/{{$image->filename}})" class="item-box-image2"></div>
                        </td>
                    </tr>  
                    @endforeach 
                </tbody>
          
        </table>
    </div>
        <div id="menu2" class="tab-pane fade"> 
          <div class="page-header">
                <strong>SELLER INFORMATION</strong>
            </div>  
            <table class="borderless table table-dark table-striped">
                <tr>
                    <th style="width:200px"></th>
                    <td>    <div   class="profile-image2 img img-circle" style="background:url('/storage/uploads/{{$items->seller->profile_picture}}')"></div>
                    </td>
                </tr>
                <tr>
                    <th>Name:</th>
                    <td><a href="/admin/customers/view/{{$items->seller->id}}">{{$items->seller->name}}</a></td> 
                </tr>
                <tr>
                    <th>Address:</th>
                    <td>
                        {{$items->seller->address}}
                    </td>
                </tr>
                <tr>
                    <th>Contact number:</th>
                    <td>
                        {{$items->seller->contact_number}}
                    </td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{$items->seller->email}}</td> 
                </tr>
                <tr>
                    <th>Date Registered:</th>
                    <td>{{$items->seller->created_at}} ({{$items->seller->created_at->diffForHumans()}})</td> 
                </tr>
            </table>
        </div>
      </div> 
      
@endsection