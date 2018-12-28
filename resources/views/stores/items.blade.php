@extends('layouts.store-dashboard')
@section('content')

<div class="data-container">
	<div class="page-title">
 	<span>{{$pageTitle}}</span>


	<div class="btn-group"> 
	<a href="{{route('storeItems')}}" class="btn btn-default <?php echo $toolbar_nav == 'all'? 'active' : '' ?>"><i class=""></i> All</a>
	<a href="{{route('itemStatus','draft')}}" class="btn btn-default <?php echo $toolbar_nav == 'draft'? 'active' : '' ?>"><i class=""></i> Draft</a>
	<a href="{{route('itemStatus','for sale')}}" class="btn btn-default <?php echo $toolbar_nav == 'for sale'? 'active' : '' ?>"><i class=""></i> For sale</a>
	<a href="{{route('itemStatus','out of stock')}}" class="btn btn-default <?php echo $toolbar_nav =='out of stock'? 'active' : '' ?>"><i class=""></i> Out of stock</a>
	
 	</div>

	<a href="{{route('addItem')}}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Add</a>
 	</div>
	<br>
	<!-- <div class="panel panel-default">
		<div class="panel-heading"><i class="fa fa-list"></i> Item list</div>
		<div class="panel-body" -->
			
	<table class="table table-stried table-hover" id="myTable">
		<thead>
			<th>#</th>
			<th colspan="2">Item</th>
			<th>Price</th>
			<th>Stock</th>
			<th>Status</th>
			<th>Posted on</th>
			<th>Action</th>
		</thead>
		<tbody>
			@foreach($items as $item)
			<tr>
			  <td style="width: 10px;">{{$item->id}}</td>
			  <td style="width: 35px"> 
                <div class="table-image" style="background:url({{asset('/storage/uploads/'. $item->images[0]->filename )}})">
                </div>  
                </td>
                <td>
                <a href="{{route('ItemView',$item->id)}}">{{ str_limit($item->title, $limit = 45, $end = '...') }}</a>
                </td>
                <td>{{$item->price}}</td>
                <td id="item-stock">{{$item->stock}}</td>
                <td>  
                	<label class="label 
                	@if($item->status_id == 1)
                	label-warning
                	@elseif($item->status_id == 2)
                	label-success
                	@endif">
                		
                	{{$item->status->display}} 

                	</label>
                	
                </td>
                <td>{{($item->created_at)}}</td>
                <td>
                	<a href="{{route('ItemUpdate',$item->id)}}" class="btn btn-default"><i class="fa fa-edit"></i></a>
                	<button class="btn btn-default btn-sm" data-toggle="modal" onclick="getItem({{$item->id}})" data-target="#re-stock-modal">Update stock</button>
                	<a href="items/remove/{{$item->id}}" class="btn btn-danger" onclick="return deleteDanger()"><i class="fa fa-trash"></i></a>

                </td>
            </tr>



			@endforeach
		</tbody>
	</table>
		<!-- </div>
	</div> -->


<div id="delete-alert" class="modal fade" role="dialog">
    <div class="modal-dialog" style="width: 600px">  
          <!-- Modal content-->
        <div class="modal-content">
        	<div class="modal-body">
        		<h3>Are you sure you want to delete this item?</h3>
			</div>
			<div class="modal-footer">
             	<button class="btn btn-success" class="close" data-dismiss="modal" data-save>Continue</button>
             	<button class="btn btn-default" class="close" data-dismiss="modal" data-save>Cancel</button>
			</div>
		</div>
	</div>
</div>

<!-- Modal -->
<div id="re-stock-modal" class="modal fade" role="dialog">
        <div class="modal-dialog" >
      
          <!-- Modal content-->
          <div class="modal-content">
              {{-- <button type="button" class="close" data-dismiss="modal">&times;</button> --}}
             <div class="modal-body">
                 	Add new stock to 
                 	<h4 class="restock-title"></h4>
                 	<input type="hidden" value="" data-id name="">
                 	<h5><strong>Price:</strong>  <span class="restock-price"></span> </h5>
                 	<h5><strong>Current Stock:</strong>  <span class="restock-current-stock"></span> </h5>
                 	<input type="text" class="form-control" data-new-stock name="">
             </div>
             <div class="modal-footer">
             	<button class="btn btn-success" class="close" data-dismiss="modal" data-save>Save</button>
             </div>
          </div>
       </div>
      </div>
</div>

<script type="text/javascript">
	function getItem(id){
		var url = "/api/items/restock/" + id;
		// $.ajax({
		// 	method: "PUT",
		// 	url: "/api/items/restock/"+id,
		// 	// data:id,
		// 	success:function(response){
		// 		$('[data-id]').val(response.id);
		// 		$('.restock-title').html(response.title);
		// 		$('.restock-price').html(response.price);
		// 		$('.restock-current-stock').html(response.stock);
		// 		// console.log(response);
		// 		data = $('#new-stock').val();
		// 		// this.restock(id,data)
		// 	}
		// });

		$.getJSON(url,function(response){
			$('[data-id]').val(response.id);
				$('.restock-title').html(response.title);
				$('.restock-price').html(response.price);
				$('.restock-current-stock').html(response.stock);
				// console.log(response);
				data = $('#new-stock').val();
		});
	}

	$('[data-save]').click(function(){
		var new_stock = $('[data-new-stock]').val();
		var id = $('[data-id]').val();
		$.ajax({
			method:"POST",
			url:"/api/items/restock2/",
			data:{new_stock,id},
			success:function(response){
				location.reload();
            // $('#myTable').load(window.location.href + ' #myTable'); 				
			}
		})
	});
</script>

<script type="text/javascript">
	
function deleteDanger() {   
    if (!confirm("Are you sure you want to delete this data?")) {
        return false;
    }
} 


</script>

@endsection
