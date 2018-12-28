@extends('layouts.uikit')
@section('content') 
        @foreach($items as $item) 
        <div class="col-sm-2" style="padding: 5px">
          <figure class="main-item card card-product border-0">
    <div class="img-wrap"> 
      <img src="{{asset('storage/uploads/'.$item->images[0]->filename)}}">
      {{-- <a class="btn-overlay" href="#"><i class="fa fa-search-plus"></i> Quick view</a> --}}
    </div>
    <figcaption class="info-wrap">
      <a href="{{route('item_view',$item->id)}}" class="title text-body"> {{$item->title}}</a>
      <input type="hidden" id="id" value="{{$item->id}}">
      <div class="main_star_{{$item->id}}"></div>
      {{App\ItemReview::reviews_count2($item->id)}} reviews
      <div class="action-wrap">
        <div class="price-wrap h5">
          <span class="price-new text-success">{{$item->price}}</span>
          <!-- <del class="price-old">$1980</del> -->
        </div> <!-- price-wrap.// -->
          
      </div> <!-- action-wrap -->
    </figcaption>
  </figure> <!-- card // -->

  </div>

<script type="text/javascript">
  var id = $('#id').val();
$('.main_star_' + {{$item->id}}).starrr({
  rating:{{App\ItemReview::getTotalRatings2($item->id)}},
  readOnly: true,
      emptyClass: 'far fa-star',
      fullClass: 'fa fa-star',
})
</script>
        @endforeach 
@endsection