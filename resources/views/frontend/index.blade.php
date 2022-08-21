@extends('frontend.main_master')
@section('content')
@section('title')
ElectroGlaxay
@endsection



<div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
        <div class="row">
            <!-- ============================================== SIDEBAR ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar">





                <!-- === == TOP NAVIGATION == ==== -->
                @include('frontend.common.vertical_menu')
                <!-- ===== ==== TOP NAVIGATION : END ==== ===== -->


                <!-- === ===== HOT DEALS ======= ===== -->
                @include('frontend.common.hot_deals')
                <!-- === === HOT DEALS: END ====== ===== -->

                <!-- ============================================== SPECIAL OFFER ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Offre spéciale</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">



                            <div class="item">
                                <div class="products special-product">

                                    @foreach($special_offer as $product)
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a
                                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                                <img src="{{ asset($product->product_thambnail) }}"
                                                                    alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">{{
                                                                $product->product_name }} </a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> MAD{{
                                                                $product->selling_price }} </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    @endforeach
                                    <!-- // end special offer foreach -->





                                </div>
                            </div>










                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL OFFER : END ============================================== -->



                <!-- ===== ===== PRODUCT TAGS ==== ====== -->
                @include('frontend.common.product_tags')
                <!-- ==== ===== PRODUCT TAGS : END ======= ==== -->




                <!-- ============================================== SPECIAL DEALS ============================================== -->

                <div class="sidebar-widget outer-bottom-small wow fadeInUp">
                    <h3 class="section-title">Special Deals</h3>
                    <div class="sidebar-widget-body outer-top-xs">
                        <div class="owl-carousel sidebar-carousel special-offer custom-carousel owl-theme outer-top-xs">


                            <div class="item">
                                <div class="products special-product">

                                    @foreach($special_deals as $product)
                                    <div class="product">
                                        <div class="product-micro">
                                            <div class="row product-micro-row">
                                                <div class="col col-xs-5">
                                                    <div class="product-image">
                                                        <div class="image"> <a
                                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                                <img src="{{ asset($product->product_thambnail) }}"
                                                                    alt=""> </a> </div>
                                                        <!-- /.image -->

                                                    </div>
                                                    <!-- /.product-image -->
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-xs-7">
                                                    <div class="product-info">
                                                        <h3 class="name"><a
                                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">{{
                                                                $product->product_name }} </a></h3>
                                                        <div class="rating rateit-small"></div>
                                                        <div class="product-price"> <span class="price"> MAD{{
                                                                $product->selling_price }} </span> </div>
                                                        <!-- /.product-price -->

                                                    </div>
                                                </div>
                                                <!-- /.col -->
                                            </div>
                                            <!-- /.product-micro-row -->
                                        </div>
                                        <!-- /.product-micro -->

                                    </div>
                                    @endforeach
                                    <!-- // end special deals foreach -->




                                </div>
                            </div>



                        </div>
                    </div>
                    <!-- /.sidebar-widget-body -->
                </div>
                <!-- /.sidebar-widget -->
                <!-- ============================================== SPECIAL DEALS : END ============================================== -->




            </div>
            <!-- /.sidemenu-holder -->
            <!-- ============================================== SIDEBAR : END ============================================== -->

            <!-- ============================================== CONTENT ============================================== -->
            <div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">




                <!-- === ========= SECTION – HERO ==== ======= -->

                <div id="hero">
                    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

                        @foreach($sliders as $slider)
                        <div class="item" style="background-image: url({{ asset($slider->slider_img) }});">
                            <div class="container-fluid">
                                <div class="caption bg-color vertical-center text-left">

                                    <div class="big-text fadeInDown-1"> </div>
                                    <div class="excerpt fadeInDown-2 hidden-xs"> <span></span>
                                    </div>
                                    
                                </div>
                                <!-- /.caption -->
                            </div>
                            <!-- /.container-fluid -->
                        </div>
                        <!-- /.item -->
                        @endforeach


                    </div>
                    <!-- /.owl-carousel -->
                </div>

                <!-- ==== ===== SECTION – HERO : END === ============== -->










                <!-- ============================================== INFO BOXES ============================================== -->
                <div class="info-boxes wow fadeInUp">
                    <div class="info-boxes-inner">
                        <div class="row">
                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">revanche</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Garantie de remboursement de 30 jours</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="hidden-md col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">livraison gratuite</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">Expédition sur les commandes de plus de 99 DH</h6>
                                </div>
                            </div>
                            <!-- .col -->

                            <div class="col-md-6 col-sm-4 col-lg-4">
                                <div class="info-box">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <h4 class="info-box-heading green">Vente spéciale</h4>
                                        </div>
                                    </div>
                                    <h6 class="text">100 DH de réduction sur tous les articles </h6>
                                </div>
                            </div>
                            <!-- .col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.info-boxes-inner -->

                </div>
                <!-- /.info-boxes -->
                <!-- ============================================== INFO BOXES : END ============================================== -->








                <!-- = ===== SCROLL TABS =============== ========== -->

                <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
                    <div class="more-info-tab clearfix ">
                        <h3 class="new-product-title pull-left">Nouveaux produits</h3>
                        <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
                            <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a>
                            </li>

                            @foreach($categories as $category)
                            <li><a data-transition-type="backSlide" href="#category{{ $category->id }}"
                                    data-toggle="tab">{{ $category->category_name }}</a></li>
                            @endforeach
                            <!-- <li><a data-transition-type="backSlide" href="#laptop" data-toggle="tab">Electronics</a></li>

              <li><a data-transition-type="backSlide" href="#apple" data-toggle="tab">Shoes</a></li> -->
                        </ul>
                        <!-- /.nav-tabs -->
                    </div>
                    <div class="tab-content outer-top-xs">



                        <div class="tab-pane in active" id="all">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                                    @foreach($products as $product)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a
                                                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}"><img
                                                                src="{{ asset($product->product_thambnail) }}"
                                                                alt=""></a> </div>
                                                    <!-- /.image -->

                                                    @php
                                                    $amount = (float)$product->selling_price -
                                                    (float)$product->discount_price;
                                                    $discount = ((float)$amount/(float)$product->selling_price) * 100;
                                                    @endphp

                                                    <div>
                                                        @if ($product->discount_price == NULL)
                                                        <div class="tag new"><span>new</span></div>
                                                        @else
                                                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name"><a
                                                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                            {{$product->product_name }} </a></h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    @if ($product->discount_price == NULL)
                                                    <div class="product-price"> <span class="price"> MAD{{
                                                            $product->selling_price }} </span> </div>
                                                    @else
                                                    <div class="product-price"> <span class="price"> MAD{{
                                                            $product->discount_price }} </span> <span
                                                            class="price-before-discount">MAD {{ $product->selling_price
                                                            }}</span> </div>
                                                    @endif


                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">


                                                                <button class="btn btn-primary icon" type="button"
                                                                    title="Add Cart" data-toggle="modal"
                                                                    data-target="#exampleModal" id="{{ $product->id }}"
                                                                    onclick="productView(this.id)"> <i
                                                                        class="fa fa-shopping-cart"></i> </button>

                                                                <button class="btn btn-primary cart-btn"
                                                                    type="button">Ajouter au panier</button>
                                                            </li>



                                                            <button class="btn btn-primary icon" type="button"
                                                                title="Wishlist" id="{{ $product->id }}"
                                                                onclick="addToWishList(this.id)"> <i
                                                                    class="fa fa-heart"></i> </button>


                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                    @endforeach
                                    <!--  // end all optionproduct foreach  -->




                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->




                        @foreach($categories as $category)
                        <div class="tab-pane" id="category{{ $category->id }}">
                            <div class="product-slider">
                                <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">

                                    @php
                                    $catwiseProduct =
                                    App\Models\Product::where('category_id',$category->id)->orderBy('id','DESC')->get();
                                    @endphp


                                    @forelse($catwiseProduct as $product)
                                    <div class="item item-carousel">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image"> <a
                                                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}"><img
                                                                src="{{ asset($product->product_thambnail) }}"
                                                                alt=""></a> </div>
                                                    <!-- /.image -->

                                                    @php
                                                    $amount = (float)$product->selling_price -
                                                    (float)$product->discount_price;
                                                    $discount = ((float)$amount/(float)$product->selling_price) * 100;
                                                    @endphp

                                                    <div>
                                                        @if ($product->discount_price == NULL)
                                                        <div class="tag new"><span>new</span></div>
                                                        @else
                                                        <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <!-- /.product-image -->

                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <a
                                                            href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                            {{ $product->product_name }}
                                                        </a>
                                                    </h3>
                                                    <div class="rating rateit-small"></div>
                                                    <div class="description"></div>

                                                    @if ($product->discount_price == NULL)
                                                    <div class="product-price"> <span class="price"> MAD{{
                                                            $product->selling_price }} </span> </div>
                                                    @else
                                                    <div class="product-price"> <span class="price"> MAD{{
                                                            $product->discount_price }} </span> <span
                                                            class="price-before-discount">MAD{{ $product->selling_price
                                                            }}</span> </div>
                                                    @endif


                                                    <!-- /.product-price -->

                                                </div>
                                                <!-- /.product-info -->
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">

                                                                <button class="btn btn-primary icon" type="button"
                                                                    title="Add Cart" data-toggle="modal"
                                                                    data-target="#exampleModal" id="{{ $product->id }}"
                                                                    onclick="productView(this.id)"> <i
                                                                        class="fa fa-shopping-cart"></i> </button>

                                                                <button class="btn btn-primary cart-btn"
                                                                    type="button">Add to cart</button>
                                                            </li>



                                                            <button class="btn btn-primary icon" type="button"
                                                                title="Wishlist" id="{{ $product->id }}"
                                                                onclick="addToWishList(this.id)"> <i
                                                                    class="fa fa-heart"></i> </button>



                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                            </div>
                                            <!-- /.product -->

                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->

                                    @empty
                                    <h5 class="text-danger">Aucun produit trouvé</h5>

                                    @endforelse
                                    <!--  // end all optionproduct foreach  -->




                                </div>
                                <!-- /.home-owl-carousel -->
                            </div>
                            <!-- /.product-slider -->
                        </div>
                        <!-- /.tab-pane -->
                        @endforeach
                        <!-- end categor foreach -->





                    </div>
                    <!-- /.tab-content -->
                </div>
                <!-- /.scroll-tabs -->
                <!-- ============================================== SCROLL TABS : END ============================================== -->
                <!-- ============================================== WIDE PRODUCTS ============================================== -->

                <!-- /.wide-banners -->

                <!-- ============================================== WIDE PRODUCTS : END ============================================== -->




                <!-- == === FEATURED PRODUCTS == ==== -->

                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">Featured produits</h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


                        @foreach($featured as $product)
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}"><img
                                                    src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
                                        <!-- /.image -->

                                        @php
                                        $amount = (float)$product->selling_price - (float)$product->discount_price;
                                        $discount = ((float)$amount/(float)$product->selling_price) * 100;
                                        @endphp

                                        <div>
                                            @if ($product->discount_price == NULL)
                                            <div class="tag new"><span>new</span></div>
                                            @else
                                            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name">
                                            <a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                {{ $product->product_name }}
                                            </a>
                                        </h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        @if ($product->discount_price == NULL)
                                        <div class="product-price"> <span class="price"> MAD{{ $product->selling_price }}
                                            </span> </div>
                                        @else
                                        <div class="product-price"> <span class="price"> MAD{{ $product->discount_price }}
                                            </span> <span class="price-before-discount">MAD{{ $product->selling_price
                                                }}</span> </div>
                                        @endif


                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">

                                                    <button class="btn btn-primary icon" type="button" title="Add Cart"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        id="{{ $product->id }}" onclick="productView(this.id)"> <i
                                                            class="fa fa-shopping-cart"></i> </button>

                                                    <button class="btn btn-primary cart-btn" type="button">Add to
                                                        cart</button>
                                                </li>



                                                <button class="btn btn-primary icon" type="button" title="Wishlist"
                                                    id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i
                                                        class="fa fa-heart"></i> </button>




                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                        @endforeach


                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- == ==== FEATURED PRODUCTS : END ==== === -->





                <!-- == === skip_product_0 PRODUCTS == ==== -->

                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">
                        {{ $skip_category_0->category_name }}
                    </h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


                        @foreach($skip_product_0 as $product)
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}"><img
                                                    src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
                                        <!-- /.image -->

                                        @php
                                        $amount = (float)$product->selling_price - (float)$product->discount_price;
                                        $discount = ((float)$amount/(float)$product->selling_price) * 100;
                                        @endphp

                                        <div>
                                            @if ($product->discount_price == NULL)
                                            <div class="tag new"><span>new</span></div>
                                            @else
                                            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                {{ $product->product_name }}
                                            </a>
                                        </h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        @if ($product->discount_price == NULL)
                                        <div class="product-price"> <span class="price"> MAD{{ $product->selling_price }}
                                            </span> </div>
                                        @else
                                        <div class="product-price"> <span class="price"> MAD{{ $product->discount_price }}
                                            </span> <span class="price-before-discount">MAD{{
                                                $product->selling_price}}</span> </div>
                                        @endif


                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">

                                                    <button class="btn btn-primary icon" type="button"
                                                                                        title="Add Cart" data-toggle="modal"
                                                                                        data-target="#exampleModal" id="{{ $product->id }}"
                                                                                        onclick="productView(this.id)"> <i
                                                                                            class="fa fa-shopping-cart"></i> </button>
                    
                                                    <button class="btn btn-primary cart-btn" type="button">Ajouter à
                                                        Chariot</button>
                                                </li>



                                                <button class="btn btn-primary icon" type="button" title="Wishlist"
                                                    id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i
                                                        class="fa fa-heart"></i> </button>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                        @endforeach


                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- == ==== skip_product_0 PRODUCTS : END ==== === -->








                <!-- == === skip_product_1 PRODUCTS == ==== -->

                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">
                        {{$skip_category_1->category_name }}
                    </h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


                        @foreach($skip_product_1 as $product)
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}"><img
                                                    src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
                                        <!-- /.image -->

                                        @php
                                        $amount = (float)$product->selling_price - (float)$product->discount_price;
                                        $discount = ((float)$amount/(float)$product->selling_price) * 100;
                                        @endphp

                                        <div>
                                            @if ($product->discount_price == NULL)
                                            <div class="tag new"><span>new</span></div>
                                            @else
                                            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                {{ $product->product_name }}
                                            </a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        @if ($product->discount_price == NULL)
                                        <div class="product-price"> <span class="price"> MAD{{ $product->selling_price }}
                                            </span> </div>
                                        @else
                                        <div class="product-price"> <span class="price"> MAD{{ $product->discount_price }}
                                            </span> <span class="price-before-discount">MAD{{ $product->selling_price
                                                }}</span> </div>
                                        @endif


                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">


                                                    <button class="btn btn-primary icon" type="button" title="Add Cart"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        id="{{ $product->id }}" onclick="productView(this.id)"> <i
                                                            class="fa fa-shopping-cart"></i> </button>

                                                    <button class="btn btn-primary cart-btn" type="button">Ajouter à
                                                        carte</button>
                                                </li>



                                                <button class="btn btn-primary icon" type="button" title="Wishlist"
                                                    id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i
                                                        class="fa fa-heart"></i> </button>

                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                        @endforeach


                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- == ==== skip_product_1 PRODUCTS : END ==== === -->















                <!-- ============================================== WIDE PRODUCTS ============================================== -->

                <!-- /.wide-banners -->
                <!-- == ===== WIDE PRODUCTS : END ====== ====== -->






                <!-- == === skip_brand_product_1 PRODUCTS == ==== -->

                <section class="section featured-product wow fadeInUp">
                    <h3 class="section-title">
                        {{$skip_brand_1->brand_name_en }}
                    </h3>
                    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">


                        @foreach($skip_brand_product_1 as $product)
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image"> <a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}"><img
                                                    src="{{ asset($product->product_thambnail) }}" alt=""></a> </div>
                                        <!-- /.image -->

                                        @php
                                        $amount = (float)$product->selling_price - (float)$product->discount_price;
                                        $discount = ((float)$amount/(float)$product->selling_price) * 100;
                                        @endphp

                                        <div>
                                            @if ($product->discount_price == NULL)
                                            <div class="tag new"><span>new</span></div>
                                            @else
                                            <div class="tag hot"><span>{{ round($discount) }}%</span></div>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- /.product-image -->

                                    <div class="product-info text-left">
                                        <h3 class="name"><a
                                                href="{{ url('product/details/'.$product->id.'/'.$product->product_slug ) }}">
                                                {{ $product->product_name }}
                                            </a></h3>
                                        <div class="rating rateit-small"></div>
                                        <div class="description"></div>

                                        @if ($product->discount_price == NULL)
                                        <div class="product-price"> <span class="price"> MAD{{ $product->selling_price }}
                                            </span> </div>
                                        @else
                                        <div class="product-price"> <span class="price"> MAD{{ $product->discount_price }}
                                            </span> <span class="price-before-discount">MAD {{ $product->selling_price
                                                }}</span> </div>
                                        @endif


                                        <!-- /.product-price -->

                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">

                                                    <button class="btn btn-primary icon" type="button" title="Add Cart"
                                                        data-toggle="modal" data-target="#exampleModal"
                                                        id="{{ $product->id }}" onclick="productView(this.id)"> <i
                                                            class="fa fa-shopping-cart"></i> </button>

                                                    <button class="btn btn-primary cart-btn" type="button">Ajouter à
                                                        Carte</button>
                                                </li>



                                                <button class="btn btn-primary icon" type="button" title="Wishlist"
                                                    id="{{ $product->id }}" onclick="addToWishList(this.id)"> <i
                                                        class="fa fa-heart"></i> </button>


                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->

                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                        @endforeach


                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
                <!-- /.section -->
                <!-- == ==== skip_brand_product_1 PRODUCTS : END ==== === -->
















            </div>
            <!-- /.homebanner-holder -->
            <!-- ============================================== CONTENT : END ============================================== -->
        </div>
        <!-- /.row -->
        <!-- ============================================== BRANDS CAROUSEL ============================================== -->
        @include('frontend.body.brands')
        <!-- /.logo-slider -->
        <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->
    </div>
    <!-- /.container -->
</div>
<!-- /#top-banner-and-menu -->


@endsection