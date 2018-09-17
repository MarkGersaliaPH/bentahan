<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
<link rel="stylesheet" href="{{asset('src/css/settings.css')}}">
{{-- <link rel="stylesheet" href="{{asset('css/paper.css')}}">  --}}
<link rel="stylesheet" href="{{asset('/css/default2.css')}}">
<link rel="stylesheet" href="{{asset('richtext/ui/trumbowyg.min.css')}}">
<link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Open+Sans|Work+Sans" rel="stylesheet"> 
{{-- <link href="https://fonts.googleapis.com/css?family=Fira+Sans:900|Work+Sans" rel="stylesheet"> --}}
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
{{--
<script src="{{asset('src/js/jquery.themepunch.plugins.min.js')}}"></script>
<script src="{{asset('src/js/jquery.themepunch.revolution.js')}}"></script>
<script src="{{asset('src/js/jquery.themepunch.revolution.min.js')}}"></script>
--}}
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.js')}}"></script>

<script src="{{asset('js/jquery.number.min.js')}}"></script>
<script src="{{asset('richtext/trumbowyg.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


</head>

<body>
    @include('layouts.heading')
    @yield('content')   

    @include('layouts.footer')
    <script src="{{asset('js/ajax-load.js')}}"></script>
</body>

<script src="{{asset('js/items.js')}}"></script>
<script>
    var defaultFunctions = {
        init:function(){
            this.showBillingAddress();
            this.showAccountInfo();
            this.saveBilling();
        },
        showBillingAddress:function(){
            $('#billingAddressBtn').click(function(){
                $('#bilingAddress').css('display','block')
                $('#accountInfo').css('display','none')
            });
        },
        showAccountInfo:function(){
            $('#accountInfoBtn').click(function(){
                $('#bilingAddress').css('display','none')
                $('#accountInfo').css('display','block')
            });
        },
        saveBilling:function(){
            $('#saveBilling').click(function(){ 
                var unit_room_floor_no = $('#unit_room_floor_no').val();
                var building = $('#building').val();
                var house_building_no = $('#house_building_no').val();
                var subdivision_village = $('#subdivision_village').val();
                var province = $('#province').val();
                var city_municipality = $('#city_municipality').val();
                var barangay = $('#barangay').val();
                var zip = $('#zip').val();
                var street = $('#street').val();
                var id = $('#id').val();
                var jsonData = {unit_room_floor_no,building,house_building_no,subdivision_village,province,city_municipality,barangay,zip,street,id};
                $.ajax({
                    method:'POST',
                    url:'/api/billing_address/store', 
                    data:jsonData,
                    success:function(response){   
                        // $('#bilingAddress').load(window.location.href + ' #bilingAddress');
                        $('#success').css('display','block') 
                    }
                })
            })
        }
    }
    defaultFunctions.init();
</script>
</html> 