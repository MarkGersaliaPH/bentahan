@extends('layouts.store-dashboard')
@section('content')


<ol class="breadcrumb">
	<li><a href="{{route('storeItems')}}">Items</a></li>
	<li>{{$pageTitle}}</li>
</ol> 
<div class="form-group btn-group"> 
    <a data-toggle="tab" class="btn btn-default" href="#home">General Details</a>
    <a data-toggle="tab"  class="btn btn-default" href="#menu2">Descriptions & Specs</a>
    <a data-toggle="tab" class="btn btn-default" href="#menu1">Images</a>
    	
</div>  
<button class="btn btn-success pull-right" onclick="$('#update').submit()"><i class="fa fa-save"></i> Save Changes</button>

<form method="post" action="submit/{{$item->id}}" id="update">
	{{csrf_field()}}
      <div class="tab-content">
        <div id="home" class="tab-pane fade in active">
        <div class="panel panel-default">
        	<div class="panel-heading">
                <strong><i class="fa fa-cogs"></i> General Details</strong> 
            </div>
        	<div class="">
        		
            
          <table class="table borderless table-striped table-dark">
              <tr>
                  <th>Item:</th>
                  <td><input type="text" required name="data[Item][title]" value="{{$item->title}}" class="form-control"></td>
              </tr>
              <tr>
                  <th>Price:</th>
                  <td><input type="text" required class="form-control money" name="data[Item][price]" value="{{$item->price}}"></td>
              </tr>
              <tr>
                  <th>Brand:</th>
                  <td>
                  	<input type="" class="form-control" required value="{{$item->brand}}" name="data[Item][brand]">
                  </td>
              </tr>
              <tr>
                  <th>Available Stock:</th>
                  <td>{{$item->stock}}</td>
              </tr>
              <tr>
                  <th>Categories:</th>

                    <?php  $categories = explode("/",$item->categories); ?>
                  <td style="width: 100px">
                    {{--  <select class="js-example-basic-multiple form-control" name="categories[]" multiple="multiple">
                      @foreach($categories as $category)
                        <option selected="selected">{{$category}}</option>
                      @endforeach      
                    </select>
 --}}
                    <select class="js-example-basic-multiple form-control"  name="categories[]" multiple="multiple">
                       @foreach($categories as $category)
                        <option selected="selected">{{$category}}</option>
                       @endforeach 
                         @foreach($categories_all as $category_all)
                            <option>{{$category_all->category}}</option>
                          @endforeach  
                    </select>
 
                  </td>
              </tr>
              <tr>
                  <th>Date Posted:</th>
                  <td>{{$item->created_at->diffForHumans()}}</td>
              </tr>
          </table>

        	</div>
        </div>

        </div>
        <div id="menu1" class="tab-pane fade"> 
        	<div class="panel panel-default">
        		
	          <div class="panel-heading">
	              <strong><i class="fa fa-image"></i> Images</strong>
	          </div>  
        		<div class="">
        			
          <table class="borderless table table-dark table-striped" id="image_table">
               
                <tbody>
                  <tr>
                      <td colspan="3">
                        <button type="button" id="addRow"  class="btn btn-sm btn-primary">Add</button>
                      </td>
                  </tr>
                  <?php $count = 0 ?>
                    @foreach($item->images as $image)
                {{--     <tr>
                        <td style="width:100px">
                        	<img src="/storage/uploads/{{$image->filename}}" class="img img-responsive img-thumbnail">
                        </td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <label class="btn btn-danger" onclick="remove_image({{$image->id}})">Remove</label>
                        </td>
                    </tr> --}}
                     <tr>
                        </tr>
                            <tr>
                                <td style="width: 100px !important">
                                    <div id="image_preview_{{$count}}">
                                      <img src="/storage/uploads/{{$image->filename}}" style="width: 40px">
                                    </div>
                                </td>
                                <td>
                                    <label class="btn btn-sm btn-success">
                                        <input type="file" id="upload_file_{{$count}}" style="display:none"  name="upload_file[]" onchange="preview_image({{$count}});">
                                        Update image
                                    </label> 
                                </td>
                                <td>
                                <button type="button" class="btn btn-sm btn-danger" onclick="remove({{$count}})">Remove</button></td>
                            </tr>  
                            <?php $count ++ ?>
                    @endforeach  
                </tbody> 
          
        </table> 
    </div>

        		</div>
        	</div>

        	<div id="menu2" class="tab-pane fade">
        		<div class="panel panel-default">
        			<div class="panel-heading"> <strong><i class="fa fa-list"></i> Description</strong></div>
        			<div class="panel-body">
	        		  	<textarea id="desc" name="data[Item][description]">
	                  	{!!$item->description!!}
	                  	</textarea>
	              	</div>
    		</div>
               <div class="panel panel-default">
        			<div class="panel-heading"><strong><i class="fa fa-list"></i> Specifications</strong></div>
  					<div class="panel-body">
  						
        		  	<textarea id="spec" name="data[Item][specifications]">
                  	{!!$item->specifications!!}
                  	</textarea>
  					</div>
        		</div>
        	</div>

</form> 


@endsection