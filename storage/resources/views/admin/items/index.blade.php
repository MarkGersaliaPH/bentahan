@extends('layouts.admin-dashboard')
@section('content')
<div class="page-header">
    <h4>Items</h4>
</div>

<table class="table table-bordered table-striped" id="myTable">
    <thead>
        <th colspan="2">Item</th>
        <th>Status</th>
        <th>Price</th>
        <th>Posted on</th>
        <th>Vendor</th>
    </thead>
    <tbody>
        @foreach($items as $item)
            <tr>
                <td>
                <center>
                <div class="table-image" style="background:url({{asset('/storage/uploads/'. $item->images[0]->filename )}})">
                </div> 
                </center>
                </td>
                <td><a href="/admin/items/view/{{$item->id}}">{{$item->title}}</a></td>
                <td>
                    @if($item->status->id == 1)
                    <label for="" class="label label-success">
                            {{$item->status->display}}
                    </label>
                    @endif
                </td>
                <td>{{$item->price}}</td>
                <td>{{$item->created_at}}</td>
                <td>{{$item->seller->name}}</td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection