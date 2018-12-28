 $(document).ready(function(){
 	//Integrating Money format
	$('.money').simpleMoneyFormat();
	function parseCurrency( num ) {
	    return parseFloat( num.replace( /,/g, '') );
	}


	var position = $(window).scrollTop(); 
            // should start at 0

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if(scroll > position) { 
            $('#nav-scroll').css('top','0');
        } else { 
             $('#nav-scroll').css('top','-2000px');
        }
        position = scroll;
    });




	getTotal2();
	function getTotal2(){
			var sum = 0;
			for(i = 1; i < <?php echo $count ?>; i ++ ){ 
				var price = $('#price' + i).val();
				var quantity = $('#quantity' + i).val();
				var sum = parseInt(quantity) * parseCurrency(price) ;
				$('#total'+i).val(sum).simpleMoneyFormat(); 
			} 
	}
	function computeCart(id, cartId){
			var price = $('#price' + id).val();
			var quantity = $('#quantity' + id).val();
			total  = parseCurrency(price) * parseCurrency(quantity);
			$.ajax({
				method: "POST",
				url:'/api/cart/updateQuantity',
				data:{cartId,quantity},
				success:function(){
					$('#total' + id).val(total).simpleMoneyFormat(); 
					getTotal(); 
				}
			})
		}  

		function parseCurrency( num ) {
		    return parseFloat( num.replace( /,/g, '') );
		}


		function getTotal(){
			var sum = 0;
			for(i = 1; i < <?php echo $count ?>; i ++ ){
				var eachTotal = $('#total' + i).val();
				var sum = sum + parseCurrency(eachTotal) ;
			}
			$('#total').val(sum).simpleMoneyFormat(); 

		}

		function removeItem(id){
			$.ajax({
				method:'GET',
				url:'/api/cart/remove/' + id,
				success:function(response){
					alertify.success('Item successfully removed');
                    $('.table').load(window.location.href + ' .table'); 
					countCart();
					console.log(response)
				}
 			})
		}
		getTotal();


 });