var itemFunction = {
    show_thumbnail:function(id){
        var image = $('#thumbnails' + id).attr('src');
        $('.product-image-container').css('background','url('+ image +')')
    }
}
