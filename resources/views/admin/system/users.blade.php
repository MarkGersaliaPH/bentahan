@extends('layouts.admin-dashboard')
@section('content')
<div class="page-header">
    System Users
</div>


<table class="table table-bordered table-condensed" id="myTable">
        <thead>
            <th>Name</th>
            <th>Date Registed</th> 
            <th>Added By</th> 
            <th>Action</th> 
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr> 
                <td>
                    <a href="">{{$user->name}}</a> 
                </td> 
                <td>
                    {{$user->created_at}}
                </td>
                <td>
                    {{$user->adminDetails->addedBy->name}}
                </td>
                <td>
                    <button class="btn btn-primary btn-xs">Edit</button>
                    <button class="btn btn-danger btn-xs">Remove</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection