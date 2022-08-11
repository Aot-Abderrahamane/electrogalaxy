<header class="header-style-1">

    <!-- ============================================== TOP MENU ============================================== -->
    <div class="top-bar animate-dropdown">
        <div class="container">
            <div class="header-top-inner">
                <div class="cnt-account">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('wishlist') }}"><i class="icon fa fa-heart"></i>Liste de souhaits</a></li>
                        <li><a href="{{ route('mycart') }}"><i class="icon fa fa-shopping-cart"></i>Mon chariot</a></li>
                        <li><a href="{{ route('checkout') }}"><i class="icon fa fa-check"></i>Checkout</a></li>

                        <li>

                            @auth
                                <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>Votre Profile</a>
                            </li>
                        @else
                            <a href="{{ route('login') }}"><i class="icon fa fa-lock"></i>S'identifier/S'enregistrer</a>
                            </li>
                        @endauth

                    </ul>
                </div>
                <!-- /.cnt-account -->

                <div class="cnt-account">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">MAD </a></li>

                        </li>

                    </ul>
                    <!-- /.list-unstyled -->
                </div>
                <!-- /.cnt-cart -->
                <div class="clearfix"></div>
            </div>
            <!-- /.header-top-inner -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.header-top -->
    <!-- ============================================== TOP MENU : END ============================================== -->
    <div class="main-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                    <!-- ============================================================= LOGO ============================================================= -->
                    <div class="logo"> <a href="{{ url('/') }}"> <img
                                src="{{ asset('frontend/assets/images/logo1.png') }}" alt="logo">
                        </a> </div>
                    <!-- /.logo -->
                    <!-- ============================================================= LOGO : END ============================================================= -->
                </div>
                <!-- /.logo-holder -->

                <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                    <!-- /.contact-row -->
                    <!-- ============================================================= SEARCH AREA ============================================================= -->
                    <div class="search-area">
                        <form method="post" action="{{ route('product.search') }}">
                            @csrf
                            <div class="control-group">
                                <ul class="categories-filter animate-dropdown">
                                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown"
                                            href="category.html">Categories <b class="caret"></b></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li class="menu-header">Computer</li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Clothing</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Electronics</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Shoes</a></li>
                                            <li role="presentation"><a role="menuitem" tabindex="-1"
                                                    href="category.html">- Watches</a></li>
                                        </ul>
                                    </li>
                                </ul>
                                <input class="search-field" name="search" id="search" onfocus="search_result_show()"
                                    onblur="search_result_hide()" placeholder="Search here..." />
                                <button class="search-button" type="submit"></button>
                            </div>
                    </div>

                    </form>
                    <div id="searchProducts"></div>
                </div>
                <!-- /.search-area -->
                <!-- ============================================================= SEARCH AREA : END ============================================================= -->
            </div>
            <!-- /.top-search-holder -->

            <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->


                <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart"
                        data-toggle="dropdown">
                        <div class="items-cart-inner">
                            <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
                            <div class="basket-item-count"><span class="count" id="cartQty"> </span></div>
                            <div class="total-price-basket"> <span class="lbl">Carte </span>

                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <!--   // Mini Cart Start with Ajax -->

                            <div id="miniCart">

                            </div>

                            <!--   // End Mini Cart Start with Ajax -->


                            <div class="clearfix cart-total">
                                <div class="pull-right"> <span class="text">totale:</span>
                                    <span class='price' id="cartSubTotal"> </span>
                                </div>
                                <div class="clearfix"></div>
                                <a href="{{ route('checkout') }}"
                                    class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                            </div>
                            <!-- /.cart-total-->

                        </li>
                    </ul>
                    <!-- /.dropdown-menu-->
                </div>
                <!-- /.dropdown-cart -->
                <!-- /.dropdown-cart -->

                <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->
            </div>
            <!-- /.top-cart-row -->
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    </div>
    <!-- /.main-header -->

    <!-- ============================================== NAVBAR ============================================== -->
    <div class="header-nav animate-dropdown">
        <div class="container">
            <div class="yamm navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                        class="navbar-toggle collapsed" type="button">
                        <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span
                            class="icon-bar"></span>
                        <span class="icon-bar"></span> </button>
                </div>
                <div class="nav-bg-class">
                    <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                        <div class="nav-outer">
                            <ul class="nav navbar-nav">
                                <li class="active dropdown yamm-fw"> <a href="{{ url('/') }}">Home</a> </li>
                                <!--   // Obtenez les données de la table de catégorie-->
                                @php
                                    $categories = App\Models\Category::orderBy('category_name', 'ASC')->get();
                                @endphp


                                @foreach ($categories as $category)
                                    <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown"
                                            class="dropdown-toggle"
                                            data-toggle="dropdown">{{ $category->category_name }}</a>
                                        <ul class="dropdown-menu container">
                                            <li>
                                                <div class="yamm-content ">
                                                    <div class="row">

                                                        <!--   // Obtenez les données de la table de sous-catégorie -->
                                                        @php
                                                            $subcategories = App\Models\SubCategory::where('category_id', $category->id)
                                                                ->orderBy('subcategory_name', 'ASC')
                                                                ->get();
                                                        @endphp

                                                        @foreach ($subcategories as $subcategory)
                                                            <div class="col-xs-12 col-sm-6 col-md-2 col-menu">
                                                                <a
                                                                    href="{{ url('subcategory/product/' . $subcategory->id . '/' . $subcategory->subcategory_slug) }}">

                                                                    <h2 class="title">
                                                                        {{ $subcategory->subcategory_name }}</h2>
                                                                </a>


                                                                <!--   // Obtenir les données de la table sous-souscatégories -->
                                                                @php
                                                                    $subsubcategories = App\Models\SubSubCategory::where('subcategory_id', $subcategory->id)
                                                                        ->orderBy('subsubcategory_name', 'ASC')
                                                                        ->get();
                                                                @endphp

                                                                @foreach ($subsubcategories as $subsubcategory)
                                                                    <ul class="links">
                                                                        <li><a
                                                                                href="{{ url('subsubcategory/product/' . $subsubcategory->id . '/' . $subsubcategory->subsubcategory_slug) }}">{{ $subsubcategory->subsubcategory_name }}</a>
                                                                        </li>

                                                                    </ul>
                                                                @endforeach
                                                                <! - // Terminer la sous-souscatégorie foreach ->

                                                            </div>
                                                            <!-- /.col -->
                                                        @endforeach
                                                        <! - // terminer la sous-catégorie foreach ->


                                                            <div
                                                                class="col-xs-12 col-sm-6 col-md-4 col-menu banner-image">
                                                                <img class="img-responsive"
                                                                    src="{{ asset('frontend/assets/images/banners/top-menu-banner1.jpg') }}"
                                                                    alt="">
                                                            </div>
                                                            <!-- /.yamm-content -->
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                @endforeach
                                <!-- // End Category Foreach -->
                                <li class="dropdown  navbar-right special-menu"> <a href="#">Offre
                                        d'aujourd'hui</a> </li>
                            </ul>
                            <!-- /.navbar-nav -->
                            <div class="clearfix"></div>
                        </div>
                        <!-- /.nav-outer -->
                    </div>
                    <!-- /.navbar-collapse -->

                </div>
                <!-- /.nav-bg-class -->
            </div>
            <!-- /.navbar-default -->
        </div>
        <!-- /.container-class -->

    </div>
    <!-- /.header-nav -->
    <!-- ============================================== NAVBAR : END ============================================== -->

</header>
<style>
    .search-area {
        position: relative;
    }

    #searchProducts {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>


<script>
    function search_result_hide() {
        $("#searchProducts").slideUp();
    }

    function search_result_show() {
        $("#searchProducts").slideDown();
    }
</script>