
@extends('layouts.customer-layout')
@section('content')

        <div class="box">

                <header class="section-heading">
                <h3 class="title-section">My Account Page</h3> 
                </header> 
                <big>MY ACCOUNT</big>
                <ul>
                    <li><a href="{{route('customer.account.info')}}">Edit account information</a></li> 
                    <li><a href="{{route('customer.password')}}">Change password</a></li> 
                    <li><a href="{{route('customer.address')}}">Modify address book</a></li>  
                </ul> 

                <br>
                <big>MY ORDER</big>
                <ul>
                    <li><a href="{{route('customer.orders')}}">Orders</a></li> 
                </ul> 

    </div> 
<script>

$('#password_check').on('click',function(){
    if($(this).prop('checked')){
        $('#password_field').css('display','none').slideDown();
    }else{
        $('#password_field').css('display','block').slideUp();
    }
});

</script>
@endsection