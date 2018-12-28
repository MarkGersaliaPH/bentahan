 <footer class="padding-y">
        <section>
                {{-- <section>
                <div class="upper-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                    <h4>Newsletter</h4> 
                                    Subcribe to get information about products and coupons
                            </div>
                            <div class="col-sm-6"> 
                            <div class="input-group">
                                    <input type="text" class="form-control input-lg" placeholder="Email address..">
                                    <span class="input-group-addon" style="background:#e74c3c;color:#fff;border:0">Search</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </section> --}}
                <section>
                        <div class="container">
                <div class="main-footer">
                    <div class="row">
                        <div class="col-sm-4">
                            <h4 class="">Categories</h4>
                            
                            <ul class="list-unstyled" style="margin:0">
                                @foreach($categories as $category)
                                <li><a href="">{{$category->category}}</a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h4 class="">Quick Links</h4>
                            
                            <ul class="list-unstyled"> 
                                <li><a href="">My Account</a></li> 
                                <li><a href="">Order History</a></li> 
                                <li><a href="">My Shoppingcart</a></li> 
                                <li><a href="">Check out</a></li> 
                                <li><a href="">Sell your items</a></li> 
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h4>Contact Us</h4>
                            <p>Call us</p>
                            <h3 class="text-danger">1800 97 97 69</h3>
                            <p>502 New Design Str, Melbourne, Australia </p>
                            <p>contact@laracart.co</p>
                        </div>
                </div>
            </section>
            </div></div>
        </section> 
    <div class="lower-footer">
        <center>
            All rights reserved &copy; 2018
        </center>
    </div>
</footer>