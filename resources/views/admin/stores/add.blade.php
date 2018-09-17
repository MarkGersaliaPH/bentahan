@extends('layouts.admin-dashboard')
@section('content') 
 

        <form action="/admin/store/storedData" method="POST" enctype="multipart/form-data">
    <div class="page-header margin-0">
            <strong>Contact person details</strong> <span class="text-danger">Note: Password will send via email</span>
        </div>
        <br>
        	{{csrf_field()}}
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
            	<div id="image_preview"></div>
            	<label>Select logo:</label>
        <label class="btn btn-success btn-xs">
                <input type="file" id="upload_file" style="display:none" name="upload_file" onchange="preview_image();">
               <i class="fa fa-file"></i> Select Logo
        </label> 
        </div> 
            <div class="form-group">
                <label for="">Store name:</label>
                <input type="text" name="Store[store_name]" class="form-control">
            </div>  
            <div class="form-group">
                <label for="">Store location:</label>
                <input type="text" name="User[address]" class="form-control">
            </div> 
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div> 
</form>
            <script type="text/javascript">
            	function preview_image() 
            		{
						 var total_file=document.getElementById("upload_file").files.length;
						 for(var i=0;i<total_file;i++)
						 {
						  $('#image_preview').append("<img style='width:100px' src='"+URL.createObjectURL(event.target.files[i])+"'>");

						var image = $('#upload_file').val();
						console.log(image);
						 }
					} 
            </script> 
 
@endsection