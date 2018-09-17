@extends('layouts.admin-dashboard')
@section('content')
<div class="page-header">
    <h4>Customers</h4>
</div>

 <table class="table table-bordered table-condensed table-striped" id="myTable">
    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Date Registered</th> 
    </thead> 
    <tbody>
        @foreach($customers as $customer)
            <tr>
                {{-- <td>
                <center>
                <div class="table-image" style="background:url({{asset('img/'. $item->images[0]->filename )}})">
                </div> 
                </center>
                </td> --}}
                <td><a href="/admin/customers/view/{{$customer->id}}">{{$customer->name}}</a></td> 
                <td>{{$customer->email}}</td>
                <td>{{$customer->created_at}}</td> 
            </tr>
        @endforeach
    </tbody>
</table> 
@endsection