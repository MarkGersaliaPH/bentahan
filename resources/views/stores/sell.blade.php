@extends('layouts.store-dashboard')
@section('content')
     
<ol class="breadcrumb">
    <li><a href="{{route('storeItems')}}">Items</a></li>
    <li>Add new item</li>
</ol>
<div class="page-title">
		
 	<h2>{{$pageTitle}}
 	</h2>
 </div>  
    <div class="content-container">
        <form action="{{route('addItem')}}" method="POST" enctype="multipart/form-data">
            {{csrf_field()}} 
            	{{-- <div class="panel-body">
            		<div class="form-group">
			        <label class="btn btn-success btn-xs">
			                <input type="file" id="upload_file" style="display:none" name="upload_file[]" onchange="preview_image();" multiple="true">
			               <i class="fa fa-file"></i> Select Image
			        </label> 
			        </div> 
			        <div class="form-group">
			            <ul class='list-inline' id="image_preview"> 
			            </ul> 
			        </div>
            	</div> --}} 
                  
        <div class="form-group">
        <h2 style="margin-bottom: 0">Select Image</h2>
        <small class="text-muted"><i class="fa fa-info-circle"></i>First image will be the main image of the item</small>
        </div>
                    <table id="image_table" class="table">
                        <thead>
                        <th colspan="2">Select image</th>
                        <th>Action</th>
                        </thead>
                        <tbody>  
                            <tr>
                            <td colspan="3">
                              <button type="button" id="addRow"  class="btn btn-sm btn-primary">Add</button>
                            </td>
                        </tr>
                            <tr>
                                <td style="width: 100px !important">
                                    <div id="image_preview_0"></div>
                                </td>
                                <td>
                                    <label class="btn btn-sm btn-success">
                                        <input type="file" id="upload_file_0" style="display:none"  name="upload_file[]" onchange="preview_image(0);">
                                        Select image
                                    </label> 
                                </td>
                                <td>
                                <button type="button" class="btn btn-sm btn-danger" onclick="remove(0)">Remove</button></td>
                            </tr>

                        </tbody>
                    </table>
                    <br><br>  
        <div class="form-group">
        <h2 style="margin-bottom: 0">Item Details</h2>
        <small class="text-muted"><i class="fa fa-info-circle"></i> Input all the item details</small>
        </div>
        <div class="form-group">
            <label for="">Item:</label>
            <input type="text" name="title" required placeholder="Item" class="form-control input-lg">
        </div>
        <div class="form-group">
            <label for="">Brand:</label>
            <input type="text" name="brand"  required  placeholder="Brand" class="form-control input-lg">
        </div>
        <div class="form-group">
                <label for="">Price:</label>
                <input name="price" type="text"  required  class="form-control input-lg money">
        </div>
        <div class="form-group">
                <label for="">Stock	:</label>
                <input name="stock" id="price"  required  type="number" class="form-control input-lg">
        </div>
        <div class="form-group">
                <label for="">Categories:</label>

                <select  class="js-example-basic-multiple form-control input-lg" style="height: 100px" name="categories[]" multiple="multiple">
                  @foreach($categories_all as $category_all)
                    <option>{{$category_all->category}}</option>
                  @endforeach      
                </select>
        </div> 

        <br><br>

        <div class="form-group">
        <h2 style="margin-bottom: 0">Item Descriptions</h2>
        <small class="text-muted"><i class="fa fa-info-circle"></i> Input all the details of the item</small>
        </div>
        <br>
        
        <div class="form-group">
            <textarea name="description" id="desc" cols="4" >
               Add description here
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Specifications:</label>
            <textarea name="specifications" id="spec" cols="4" >
               Add Specifications here
            </textarea>
        </div>	

        <br><br>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg">Submit</button>
        </div>
    </form>
</section>

 
@endsection