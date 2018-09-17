@extends('layouts.admin-dashboard')
@section('content')
<div class="page-header">
    <h4 style="border-right:1px solid #eee">Categories</h4>
    <input type="text" class="form-control input-sm" placeholder="Add categories here..." style="width:300px;display:inline" id="inputCategory" >
    <button id="submitCategory" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add</button>
    <button id="selectCategory"  class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Remove</button>
  
</div>


<div id="categoryContainer">
    <table class="table table-striped table-condensed table-bordered" >
        <thead>
            <th style="width:40px">
                <input type="checkbox" id="checkall">
            </th>
            <th>Display Name</th>
            <th style="width:50px">Action</th>
        </thead>
        <tbody>
            @foreach($categories as $category)
            <tr>
            <td>
            <input type="checkbox" onclick="adminfunctions.selectCheck({{$category->id}})" id="check{{$category->id}}" name="category[]" value="{{$category->id}}">
            </td>
            <td>
                {{$category->category}}
            </td>
            <td>
                <button  onclick="adminfunctions.removeCategory({{$category->id}})" class="btn btn-danger btn-xs">
                    <i class="fa fa-times" ></i>
                    Remove
                </button> 
            </td>
        </tr>
            @endforeach
        </tbody>
    </table> 
 </div>

@endsection