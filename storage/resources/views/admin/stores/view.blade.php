@extends('layouts.admin-dashboard')
@section('content')

<ol class="breadcrumb">
        <li><a href="/admin/stores">Customers</a></li>
        <li>View {{$store->slug}}</li>
    </ol>
    <div class="btn-group">
            <button data-toggle="tab" href="#home"  type="button" class="btn btn-primary">Store Details</button>   
            <button data-toggle="tab" href="#contactPerson" class="btn btn-primary">Contact Person</button>
            <button data-toggle="tab" href="#menu2" type="button" class="btn btn-primary">Reviews</button>   
    </div>
    <br>
    <br>
    <div class="tab-content">
        <div id="home"  class="tab-pane fade in active">
            <table class="table borderless table-striped">
                    <tr>
                        <th style="width:200px">Logo:</th>
                        <td>
                            <div style="background:url(/storage/uploads/{{$store->logo}})" class="item-box-image2"></div>                           
                        </td>
                    </tr>
                    <tr>
                        <th>Store name:</th>
                        <td>{{$store->store_name}}</td>
                    </tr>
                    <tr>
                        <th>Store location:</th>
                        <td>{{$store->user->address}}</td>
                    </tr>
                    <tr>
                        <th>Store Details:</th>
                        <td>{{$store->store_details}}</td>
                    </tr>
                    <tr>
                        <th>Date Added:</th>
                        <td>{{$store->created_at}}</td>
                    </tr>
                    <tr>
                        <th>Added By:</th>
                        <td>
                            {{$store->added_by}}
                        </td>
                    </tr>
            </table>
        </div>
        <div id="contactPerson"  class="tab-pane fade in"> 
                <table class="table borderless table-striped">
                    <tr>
                        <th style="width:200px"></th>
                        <td>
                            <div style="background:url(/storage/uploads/{{$store->user->profile_picture}})" class="item-box-image2"></div> 
                        </td>
                    </tr>
                    <tr>
                        <th>Name:</th>
                        <td>
                            <a href="">{{$store->user->name}}</a>
                        </td>
                    </tr>
                </table>
        </div>
    </div>
@endsection