  
$(document).ready(function(){
    $(document).ajaxStart(function(){
        $("#wait").css("display", "block");
            $("#success").css("display", "block");
    });
    $(document).ajaxComplete(function(){
        $("#wait").css("display", "none");
        
        setTimeout(function(){ 
        $("#success").css("display", "none");
        },1800)
    });
});