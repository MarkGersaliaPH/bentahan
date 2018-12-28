@extends('layouts.sub-page')
@section('content')  
<div class="container">
    
<section>
    <ol class="breadcrumb padding-0" style="background:transparent">
            <li><a href="/">Home</a></li>
            <li><a  onclick="window.history.back()">My Account</a></li>
            <li>View</li>
            <li>{{$myItem->title}}</li>
        </ol> 
<div class="content-container"> 
    <div class="form-group btn-group"> 
        <a data-toggle="tab" class="btn btn-primary" href="#home">General Details</a>
        <a data-toggle="tab" class="btn btn-primary" href="#menu1">Item Images</a>
        <a data-toggle="tab"  class="btn btn-primary">Reviews</a>
        <a data-toggle="tab"  class="btn btn-primary">Orders</a>
    </div>   

    
    <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
            <div class="page-header margin-0">
                <strong>GENERAL DETAILS:</strong> 
            </div>
          <table class="table borderless table-striped table-dark">
              <tr>
                  <th>Item:</th>
                  <td><input type="text" class="form-control" value="{{$myItem->title}}"></td>
              </tr>
              <tr>
                  <th>Price:</th>
                  <td><input type="text" class="form-control" value="{{$myItem->price}}"></td>
              </tr>
              <tr>
                  <th>Conditions:</th>
                  <td><input type="text" class="form-control" value="{{$myItem->conditions}}"></td>
              </tr>
              <tr>
                  <th>Brand:</th>
                  <td><input type="text" class="form-control" value="{{$myItem->brand}}"></td>
              </tr>
              <tr>
                  <th>Quantity:</th>
                  <td><input type="text" class="form-control" value="{{$myItem->quantity}}"></td>
              </tr>
              <tr>
                  <th>Categories:</th>
                  <td><input type="text" class="form-control" value="{{$myItem->categories}}"</td>
              </tr>
              <tr>
                  <th>Date Posted:</th>
                  <td><input type="text" class="form-control" disabled value="{{$myItem->created_at->diffForHumans()}}"></td>
              </tr>
                <tr>
                  <th>Description:</th>
                  <td><textarea name="" id="desc" cols="30" rows="10">{!!$myItem->description!!}</textarea></td>
                </tr>
                <tr>
                  <th>Specification:</th>
                  <td><textarea name="" id="spec" cols="30" rows="10">{!!$myItem->specifications!!}</textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-primary">Save Changes</button></td>
                </tr>
          </table> 
    </div>
 
    <div id="menu1" class="tab-pane fade">  
            <table class="borderless table table-hover table-dark table-striped">
                  <thead>
                       <th>Image</th>
                      <th>Action</th>
                  </thead>
                  <tbody>
                      @foreach($myItem->images as $image)
                      <tr> 
                          <td>
                              <div style="background:url(/storage/uploads/{{$image->filename}})" class="item-box-image2"></div>
                          </td>
                          <td style="width:300px">
                              <button class="btn btn-danger"><i class="fa fa-trash"></i> Remove</button>
                              <button class="btn btn-info"><i class="fa fa-trash"></i> Update</button>
                          </td>
                      </tr>  
                      @endforeach 
                  </tbody>
            
          </table>
      </div>
      
</div>
</div>





</div> 
</section>
</div>



<script>
        // Doing this in a loaded JS file is better, I put this here for simplicity
        $('#desc').trumbowyg();
        $('#my-editor').trumbowyg();
        $('#spec').trumbowyg(); 
    </script>
                    
                    
    <script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
    });
    </script>
     

@endsection