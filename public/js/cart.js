
function addToCart(id){
	// $.get('api/cart/add/' + id, function(response){
	// 		console.log(response)
	// 		countCart();
	// 		alertify.success('1 item successfully added to cart').show();
	// });
	var session_id = $('#session_id').val();
	$.ajax({
		method:'POST',
		url:'api/cart/add/',
		data: {id},
		success:function(response){
			console.log(response);
			countCart();
			alertify.success('1 item successfully added to cart').show();

		}
	});
}


function addToCartFromView(id){
		var quantity = $('#quantity').val();
		var data = {id, quantity};
		$.ajax({
		method:'GET',
		url:'/api/cart/add/'+quantity+'/'+id,
		success:function(response){
			console.log(response);
			countCart();
			alertify.success('item successfully added to cart').show();

		}
	});
}



function countCart(){
		$(document).ready(function(){
			$.get('/api/cart/count/', function(response){
			$('#headingCart').html(response);
			$('#navbarCart').html(response);
		}); 
	});
	
}

this.countCart();


