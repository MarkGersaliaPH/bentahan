@extends('layouts.default')
@section('content')

<section> 
    <div class="container">
        <h2>  Sell your item </h2>
    <div class="content-container">
        <form action="/products/store" method="POST" enctype="multipart/form-data">
            {{csrf_field()}}
        @if (Auth::guest()) 
        <div class="page-header">
        <strong><i class="fa fa-check-circle text-success"></i> Set your store details</strong>
        </div>
        <div class="form-group">
            <label for="">Store name:</label>
            <input type="text" name="data[Store][store_name]" class="form-control" placeholder="Enter full name">
        </div>
        <div class="form-group">
            <label for="">Name:</label>
            <input type="text" name="data[User][name]" class="form-control" placeholder="Enter full name">
        </div>
        <div class="form-group">
            <label for="">Email Address:</label>
            <input type="email" name="data[User][email]" class="form-control" placeholder="dataname@email.com">
        </div>
        <div class="form-group">
            <label for="">Contact Number:</label>
            <input type="text" name="data[User][contact_number]" class="form-control" placeholder="+63">
        </div>
        
        <div class="form-group">
            <label for="">Address:</label>
            <textarea  name="data[User][address]" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="">Password:</label>
            <input type="password" name="data[password]" class="form-control">
        </div> 
         @endif
        <div class="page-header">
        <strong>Select Item Image</strong>
        </div>
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
        <div class="page-header">
            <strong><i class="fa fa-check-circle text-success"></i> Item Details</strong>
        </div> 
        <div class="form-group">
            <label for="">Item:</label>
            <input type="text" name="title" placeholder="Item" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Brand:</label>
            <input type="text" name="brand" placeholder="Brand" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Condition:</label>
            <select name="conditions" class="form-control" id="">
                <option value="" default hidden>--Select Conditions--</option>
                <option>Brand new</option>
                <option>Second Hand(Used)</option>
            </select>
        </div> 
        <div class="form-group">
                <label for="">Price:</label>
                <input name="price" id="price" type="number" class="form-control">
        </div>
        <div class="form-group">
                <label for="">Quantity:</label>
                <input name="quantity" id="price" type="number" class="form-control">
        </div>
        <div class="form-group">
                <label for="">Categories:</label>
                <select  class="js-example-basic-multiple form-control" name="categories[]" multiple="multiple">
                  @foreach($categories_all as $category_all)
                    <option>{{$category_all->category}}</option>
                  @endforeach      
                </select>
        </div>
        <div class="form-group">
            <label for=""><i class="fa fa-check-circle text-success"></i> Description:</label>
            <textarea name="description" id="desc" cols="10" >
               Add description here
            </textarea>
        </div>
        <div class="form-group">
            <label for="">Specifications:</label>
            <textarea name="specifications" id="spec" cols="10" >
               Add Specifications here
            </textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    </div>
</div>
</section>

<script>
    function preview_image() 
{
 var total_file=document.getElementById("upload_file").files.length;
 for(var i=0;i<total_file;i++)
 {
  $('#image_preview').append("<li><img class='img-selected' src='"+URL.createObjectURL(event.target.files[i])+"'></li>");

var image = $('#upload_file').val();
console.log(image);
 }
}
</script>


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