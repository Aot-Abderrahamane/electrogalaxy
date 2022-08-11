@extends('frontend.main_master')
@section('content')

@section('title')
page de panier
@endsection


<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="home.html">Home</a></li>
                <li class='active'>Mycart</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
    <div class="container">
        <div class="row ">
            <div class="shopping-cart">
                <div class="shopping-cart-table ">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="cart-romove item">image</th>
                                    <th class="cart-description item">Nom</th>
                                    <th class="cart-product-name item">Couleur</th>
                                    <th class="cart-edit item">Taille</th>
                                    <th class="cart-qty item">Quantité</th>
                                    <th class="cart-sub-total item">Total</th>
                                    <th class="cart-total last-item">Supprimer</th>
                                </tr>
                            </thead><!-- /thead -->
                            <tbody id="cartPage">


                            </tbody>
                        </table>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.sigin-in-->



        <br>
        @include('frontend.body.brands')
    </div>







    @endsection