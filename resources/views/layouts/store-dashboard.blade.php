<html>
@include('templates.store-dashboard-heading')
<body>
@include('layouts.store-navigation')
<div class="wrapper">
	<div class="col-sm-2 padding-0">
		<div class="sidebar"  data-spy="affix" data-offset-top="80">
		<!-- <div class="sidebar col-sm-2"  data-spy="affix" data-offset-top="80"> -->
			@include('templates.store-sidenav')
		</div>
	</div>
	<div class="col-sm-10">
	<div class="main-content">

		@if (session('status'))
	    <div class="alert alert-success">
	        <i class="fa fa-check"></i> {{ session('status') }}
	    </div>
	    @endif
		@yield('content')

<script type="text/javascript">
$('.money').simpleMoneyFormat();
</script> 
	</div>
	</div>
</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		setInterval(function(){
			$('#date').clone('System Date: ' + '<?php echo date('F j, Y g:i:a  ')?>'); 
		},1000)
	});


        var timestamp = '<?php echo strtotime(date('F j, Y H:i:s')); ?>';
        function updateTime(){
            
            t_timestamp = timestamp*1000;
            var t = new Date(t_timestamp);
            
          $('#date').html(t.toLocaleString());
          
          timestamp++;
        }
        
        $(function(){
          setInterval(updateTime, 1000);
        });
</script>


<script>
    // Doing this in a loaded JS file is better, I put this here for simplicity
    $('#desc').trumbowyg();
    $('#my-editor').trumbowyg();
    $('#my-editor2').trumbowyg();
    $('#spec').trumbowyg(); 
</script>


<script>
    $(document).ready( function () {
	    $('#myTable').DataTable({
	    	"ordering": true,
			 "pageLength": 50
		});
	} );
// $('#myTable').DataTable( { 
  // } );
</script>
  
                
<script>
    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>


<script type="text/javascript">
$('.money').simpleMoneyFormat();

function parseCurrency( num ) {
    return parseFloat( num.replace( /,/g, '') );
}
</script> 
 
<script>
    function preview_image(id) 
    { 
         var total_file=document.getElementById("upload_file_"+id).files.length;
         for(var i=0;i<total_file;i++)
         {
          $('#image_preview_'+id).html("<img class='img-selected'  style='width: 40px;'  src='"+URL.createObjectURL(event.target.files[i])+"'>");

            var image = $('#upload_file_'+id).val(); 
         } 
}

 var count = 0; 
     $("#addRow").click(function(){ 
        count++;  
        var table = document.getElementById("image_table");  

        var row = table.insertRow(-1);
        var cell1 = row.insertCell(-1);
        var cell2 = row.insertCell(-1);
        var cell3 = row.insertCell(-1);
        cell2.innerHTML ='<label class="btn  btn-sm btn-success"><input type="file" style="display:none" id="upload_file_'+ count +'"  name="upload_file[]" onchange="preview_image('+count+');">Select image</label>';
        cell1.innerHTML ='<div id="image_preview_'+count+'"></div>';
        cell3.innerHTML ='<button type="button"  class="btn btn-danger  btn-sm " onclick="remove('+count+')">Remove</button>';
    });


function remove(id) {
    if (id != 0) {
    document.getElementById("image_table").deleteRow(-1);
    }
}

$('form').validator();
</script>
</html>
