 
var adminfunctions = {


    init:function(){
        this.toggle();
        this.showHistory();
        this.showGeneralInfo();
        this.addCategory();
        this.checkAll();
        this.countWidgets();
        this.addDetailsContainer();
        this.showDetailsContainer();
    }, 
    addDetailsContainer:function(){
        $(document).ready(function () {
            $('#addStore').click(function () {
                $('#add-details-container').toggle();
                //you need to pass string values, your variables display & block was not defined
                // localStorage.setItem('display', $('#add-details-container').is(':visible'));
            });
            // var block = localStorage.getItem('display');
            // if (block == 'true') {
            //     $('#add-details-container').show()
            // }
        });
    },
    showDetailsContainer:function(){ 
        $(document).ready(function(){ 
            var block = localStorage.getItem(block);
            if(block){
                $('#add-details-container').show()
            } 
        })
    },
    toggle:function(){
        $('#navicon').click(function(){
            $('#sidebar').css('left',-1000);
            $('#main-content').css('margin-left',0);
            // alert('clicked')
        });
    },
    showHistory:function(){
        $('#historyBtn').click(function(){
            $('#history').css('display','block')
            $('#general').css('display','none')
        });
    },
    showGeneralInfo:function(){
        $('#generalBtn').click(function(){
            $('#history').css('display','none')
            $('#general').css('display','block')
        });
    },
    addCategory:function(){
        $('#submitCategory').click(function(){
            var InputData = $('#inputCategory').val();
            $.ajax({
                method:"POST",
                url:'/api/category/store', 
                data:{InputData},
                success:function(response){
                    
                $('#categoryContainer').load(window.location.href + ' #categoryContainer'); 
                    $('#inputCategory').val(''); 
                }
            })
        });
    },
    removeCategory:function(id){
        $.get('/api/category/destroy/'+ id,function(response){ 
            $('#categoryContainer').load(window.location.href + ' #categoryContainer'); 
        });
    },
    checkAll:function(){
        $('#checkall').on('click', function() {
            var checkAll = this.checked;
            $('input[type=checkbox]').each(function() {
                this.checked = checkAll;
            });
        });
    },
    selectCheck:function(){
        $('#selectCategory').click(function(){
            var ar=[];
        $('input[type=checkbox]').each(function(){
            if($(this).is(':checked'))
            {
                ar.push({url:$(this).val()}); 
            }        
        });
        console.log(JSON.stringify(ar)); 
        }); 
    },
    showCustomersItems:function(){
        
    },
    countWidgets:function(){
        $.get('/api/items/count',function(response){
            $('#totalItem').append(response);
        });  
        $.get('/api/store/count',function(response){
            $('#totalStore').append(response);
        });  
        $.get('/api/customers/customerCount',function(response){
            $('#totalCustomer').append(response);
        }); 
        $.get('/api/categories/count',function(response){
            $('#totalCategories').append(response);
        });
          
    }
    

}

var storeFunctions = {
    store:function(){
        $('#storeSubmit').click(function(){ 
            event.preventDefault();
            var jsonData = $('form').serialize() 
            $.ajax({
                method:'POST',
                url:'/api/store/add',
                data:jsonData,
                success:function(response){
                    console.log(response);
                    $('#store-controller').load(window.location.href + ' #store-controller'); 
                    $('#add-details-container').css('display','none') 
                }
            })
        })
    }
}
storeFunctions.store();
adminfunctions.init();