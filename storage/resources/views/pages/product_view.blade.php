@extends('layouts.default')
@section('content')
<section>
    <center>
            <div class="GoogleActiveViewClass" id="DfaVisibilityIdentifier_3144791967"><a target="_blank" href="https://adclick.g.doubleclick.net/pcs/click?xai=AKAOjssJD85iB_Uz-sMHh_kubxSDWkXIZn7rIlUp9eoco_JkBA_fT6HdG5BH-cz7kneR9DLXaYNtnPQE_rRuXpmOn6HE-dZ0oPXKCHdaMDwYfQfRY5Uw8cM9DQkAAo3lNXnDRZREDg13DvQu8JDOtmsdOeWRjA7_3nP0yAdL9iBbTevNsdemtcf1SNPilBlNzTxMt1jta0sYsBGvSVhdS5O2hGL-bUzIDhSSKISx-8imG1RDTYPFFhkFPTS9WdRWS-G-uIaprYhTvCY4aiA1on3HsJ8Fnp4_edvT59pD6wH3cHvmh2dakYAjSYDkku0cL1YZOwGSrX6sJONSHbay55yQn_9WuUVQIhmenaRSN2GYp-PMPzXbRtfXmmxJFLJXZUxycJAKBSPtH5joaJx7I0mGHULwQNHaDZzvcwx-icRx-fgCg92R_eAM3Pn9BkG1-xj-ckV_S8JnvoYY9i96-Vyu0WnBntKexR4EInO4R7uh3WikjCYO3bZfNj3vD74yYtNCo3SyLLMqiOpwOQJot3I3irSAWp0Vb0XhyhcPdJYcE76XHOmke4U1VOstGs367-S_xFbLavpNP_hjcKPttctDavFGDwmhVOqdyg-Cj3Gj7OcjaZJvJKJYDbioeJaM-YOjz24EpQ7U_b7BeACC3s51-FazTIg1CT1bc06qz6fhm5evwRSDDyXIUki02aTaYkyncStmyr9_dSYjo9j71J58xXgqiZULl8DE2sJpZgQNJKi3VUMA750aLOMzDWZE8PPQBKOpZ3YMUuATPpF1ZX5X_MX8v4QhfSc7u-ntHsUD1XL0Q3Ft-AHRmac_wBlP81XUaW_DBWodwkfeocFEG9aSo-Opp2YB_wSLiZ35LtutFHXK1JW_caWXviXCqN6LjkQ64i6lukq0K8ckP6cgzTgImMK_pv4&amp;sai=AMfl-YSCspGAkgTQiMhYjlbhzEfoWJnCk4XZ-etwsIVegMMCwocaCF2vCftoBXd7N_Sxm8q2pC1vNsz4Rjqn1slEkpO6bzKoCVwVbtGsjiWjqWQ9hE9CgVu5auJ0ffgnglufMSbq0oy4K664t-6qMERpKmPDdjlykdjbutalm3kv&amp;sig=Cg0ArKJSzMBovU8K-lWv&amp;urlfix=1&amp;adurl=https://www.hostgator.com/promo/snappy60%3Futm_source%3DDCM%26utm_medium%3Dretargeting%26dclid%3D%25edclid!"><img src="https://s0.2mdn.net/6241250/1-HG-RT-Still-Looking-2.78_970x90.png" alt="Advertisement" border="0" width="970" height="90"></a></div>
            <br>
    </center>
<div class="container">
    <ol class="breadcrumb margin-0 padding-0" style="background:transparent">
        <li><a href="/">Home</a></li>
        <li>Product</li>
        <li>View</li>
        <li>{{$item->title}}</li>
    </ol>
</div>
</section>   
<div class="container"> 
    <div class="content-container">
    <h1 class="item-title">
        <button class="btn btn-danger  pull-right">
                <i class="fa fa-heart"></i> Save this product
            </button>
            {{$item->title}}
    </h1>
    <hr>
        <div class="row">
            <div class="col-sm-4">
                <div class="product-image-container" style="background:url('{{asset('/storage/uploads/'.$item->images[0]->filename)}}')"></div>    
                <div class="row img-thumbnail-scroll"> 
                @foreach($item->images as $image)    
                    <img src="{{asset('/storage/uploads/'.$image->filename)}}" id="thumbnails{{$image->id}}" onmouseover="itemFunction.show_thumbnail({{$image->id}})" class="img-thumbnails" alt="">
                @endforeach 
                </div>
                <hr> 
                <strong>SELLER INFORMATION:</strong><br><br>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="profile-image" class="img img-circle" style="background:url('/storage/uploads/{{$item->seller->profile_picture}}')"></div>
                    </div>
                    <div class="col-sm-9"> 
                        <i class="fas fa-bookmark"></i> 
                        <strong>{{$item->seller->name}}</strong><br>
                        <i class="fas fa-map-marker-alt"></i>
                        <small class="text-muted">{{$item->seller->address}}</small><br>
                        <i class="fas fa-phone-square"></i> 
                        <small class="text-muted">{{$item->seller->contact_number}}</small>
                       
                    </div>
                    <div class="col-sm-12">  
                        <strong>Message Seller:</strong><br><br>
                        <div class="form-group">
                            <input type="text" placeholder="Email Address:" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="5" class="form-control">Hi, Im interested....</textarea>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i>
                                Send</button>
                        </div>
                    </div>
                </div> 
            </div>
            <div class="col-sm-8"> 
                <h3 class="price">&#8369;{{$item->price}}</h3>  
                <strong>Categories:</strong>
                @if ($item->categories != "")
                @foreach(explode('/', $item->categories) as $info) 
                    <a>{{$info}},</a>
                @endforeach
                @endif
                <hr>  
                <strong>Description:</strong><br> <br> 
                    {!! $item->description !!} 
                <br>                <br>
                
               
                <div class="row">
                        <div class="col-sm-2"> 
                                <strong for="">Quantity</strong> 
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <div class="input-group number-spinner">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" data-dir="dwn"><span class="glyphicon glyphicon-minus"></span></button>
                                        </span>
                                        <input type="text" class="form-control text-center" value="1">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" data-dir="up"><span class="glyphicon glyphicon-plus"></span></button>
                                        </span>
                                    </div>
                            </div>  
                        </div>
                        <div class="col-sm-3"> 
                            <button class="btn btn-primary  btn-block">Add to cart</button>
                        </div>
                </div>
                <hr>
                <strong>Specifications:</strong><br> 
                {{-- {!! {{$item->specifications}} !!} --}}.
                {!! $item->specifications !!}
            </div>
        </div> 
    </div> 
</div>  
<br>
@endsection