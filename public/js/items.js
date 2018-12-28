var itemFunction = {
    show_thumbnail:function(id){
        var image = $('#thumbnails' + id).attr('src');
        $('.product-image-container').attr('src',image)
        // $('.product-image-container').css('background','url('+ image +')')
    },
    addToCart:function(id){
    	$('#id').click(function(){
    		alert('clicked')
    	});
    }
}


// $(document).ready(function(){
//     function main_item_total_reviews(){
//         $.each('div .main-item',function(key){
//             alert(key);
//         });
//     }

//     main_item_total_reviews();
// });

itemFunction.addToCart();
