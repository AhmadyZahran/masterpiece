{{-- @extends('frontend.footer') --}}
@extends('frontend.header')
<!-- Font Awesome -->


@section('title', 'single product')


@section('content')

    <!-- BREADCRUMB -->
    <div id="breadcrumb" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb-tree">
                        <li><a href="./">Home</a></li>
                        <li><a href="./category">Categories</a></li>
                        <li><a href="./product">Product</a></li>
                        <li class="active">Product name goes here</li>
                    </ul>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /BREADCRUMB -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="/img/content masterpiece/Refrigerator/{{ $Product['image'] }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="/img/content masterpiece/Refrigerator/{{ $Product['image'] }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="/img/content masterpiece/Refrigerator/{{ $Product['image'] }}"alt="">
                        </div>

                        <div class="product-preview">
                            <img src="/img/content masterpiece/Refrigerator/{{ $Product['image'] }}"alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="/img/content masterpiece/Refrigerator/{{ $Product['image'] }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="/img/content masterpiece/Refrigerator/{{ $Product['image'] }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="/img/content masterpiece/Refrigerator/{{ $Product['image'] }}"alt="">
                        </div>


                    </div>
                </div>
                <!-- /Product thumb imgs -->
                {{-- {{$Product}} --}}

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{ $Product->name }}</h2>
                        <div>
                            <!-- review stars -->
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <a class="review-link" href="#">10 Review(s) | Add your review</a>
                        </div>
                        <div>
                            <h3 class="product-price">${{ $Product->price }}
                            </h3>

                        </div>
                        <p>{{ $Product->description }}</p>



                        <div class="add-to-cart">
                            <div class="qty-label">
                                Qty
                                <div class="input-number">
                                    <input type="number">
                                    <span class="qty-up">+</span>
                                    <span class="qty-down">-</span>
                                </div>
                            </div>
                            <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                        </div>







                    </div>
                </div>
                <!-- /Product details -->








            </div>
        </div>
        <!-- /tab3  -->
    </div>
    <!-- /product tab content  -->
    </div>
    </div>
    <!-- /product tab -->
    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>
    <!-- /SECTION -->



    </div>
    <!-- /row -->
    </div>
    <!-- /container -->
    </div>

    <!-- jQuery Plugins -->
    <script src="..../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/nouislider.min.js"></script>
    <script src="../js/jquery.zoom.min.js"></script>
    <script src="../js/main.js"></script>

    <script src="../https://netdna.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <!-- /Section -->
@endsection
