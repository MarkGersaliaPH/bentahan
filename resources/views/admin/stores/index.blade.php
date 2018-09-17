@extends('layouts.admin-dashboard')
@section('content')
<div class="page-header">
    <h4>Stores</h4>
    <a href="store/add" class="btn btn-primary btn-sm">Add store</a>
    {{-- <button  data-toggle="modal" data-target="#myModal"  class="btn btn-primary btn-xs">Add store</button> --}}
</div> 
<div id="store-controller">
<table class="table table-bordered table-condensed table-striped" id="myTable">
    <thead>
        <th>Store Name</th>
        <th>Contact Person</th>
        <th>Store Location</th> 
        <th>Date Registed</th> 
        <th>Action</th> 
    </thead>
    <tbody>
        @foreach($stores as $store)
        <tr>
            <td>
                @if(!empty($store->store->store_name)) 
                <a href="/admin/store/view/{{$store->store->slug}}"> {{$store->store->store_name}}</a>
                @endif
            </td>
            <td>{{$store->name}}</td>
            <td>{{str_limit($store->address, 50)}}</td>
            <td>{{$store->created_at}}</td>
            <td>
                <button class="btn btn-primary btn-xs">Edit</button>
                <button class="btn btn-danger btn-xs">Remove</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
      
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
              <h3 class="modal-title">Add new store <i data-dismiss="modal" class="fa fa-times pull-right"></i></h3>
            </div>
            <div class="modal-body">
                    <div class="page-header margin-0">
                            <strong>Contact person details</strong> <span class="text-danger">Note: Password will send via email</span>
                        </div>
                        <br>
                        <form id="preview_form" method="POST">
                                <input type="hidden" name="User[type]" value="3" class="form-control">    
                        <div class="form-group">
                            <label for="">Name:</label>
                            <input type="text" name="User[name]" class="form-control">    
                        </div>   
                        <div class="form-group">
                            <label for="">Email:</label>
                            <input type="text" name="User[email]" name="email" class="form-control">    
                        </div>     
                        <div class="form-group">
                            <label for="">Contact number:</label>
                            <input type="text" name="User[contact_number]" class="form-control">    
                        </div>     
                        <div class="page-header">
                                <strong>Store details</strong>
                            </div>   
                            <div class="form-group">
                                <label for="">Store name:</label>
                                <input type="text" name="Store[store_name]" class="form-control">
                            </div>  
                            <div class="form-group">
                                <label for="">Store location:</label>
                                <input type="text" name="User[address]" class="form-control">
                            </div>
                            {{-- <div class="form-group">
                                <button class="btn btn-primary" id="storeSubmit">Submit</button>
                            </div> --}}
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success" id="storeSubmit" data-dismiss="modal">Submit</button>
              </form> 
            </div>
            
          </div>
      
        </div>
      </div>
      
@endsection
