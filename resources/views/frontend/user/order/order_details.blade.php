@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')

            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Détails d'expédition</h4>
                    </div>
                    <hr>
                    <div class="card-body" style="background: #E9EBEC;">
                        <table class="table">
                            <tr>
                                <th> Nom pour la livraison : </th>
                                <th> {{ $order->name }} </th>
                            </tr>

                            <tr>
                                <th> Téléphone d'expédition : </th>
                                <th> {{ $order->phone }} </th>
                            </tr>

                            <tr>
                                <th> E-mail d'expédition : </th>
                                <th> {{ $order->email }} </th>
                            </tr>

                            <tr>
                                <th> Ville : </th>
                                <th> {{ $order->district->district_name }} </th>
                            </tr>

                            <tr>
                                <th> Province : </th>
                                <th> {{ $order->state->state_name }}</th>
                            </tr>

                            <tr>
                                <th> Région : </th>
                                <th> {{ $order->division->division_name }}</th>
                            </tr>

                            <tr>
                                <th> Code postal : </th>
                                <th> {{ $order->post_code }} </th>
                            </tr>

                            <tr>
                                <th> Date de commande: </th>
                                <th> {{ $order->order_date }} </th>
                            </tr>

                        </table>


                    </div>

                </div>

            </div> <!-- // end col md -5 -->



            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        <h4>Order Details de
                            <span class="text-danger"> Facture d'achat : {{ $order->invoice_no }}</span>
                        </h4>
                    </div>
                    <hr>
                    <div class="card-body" style="background: #E9EBEC;">
                        <table class="table">
                            <tr>
                                <th> Nom : </th>
                                <th> {{ $order->user->name }} </th>
                            </tr>

                            <tr>
                                <th> Téléphoner : </th>
                                <th> {{ $order->user->phone }} </th>
                            </tr>

                            <tr>
                                <th> Type de paiement : </th>
                                <th> {{ $order->payment_method }} </th>
                            </tr>

                            <tr>
                                <th> tranxId : </th>
                                <th> {{ $order->transaction_id }} </th>
                            </tr>

                            <tr>
                                <th> Facture d'achat : </th>
                                <th class="text-danger"> {{ $order->invoice_no }} </th>
                            </tr>

                            <tr>
                                <th> Total de la commande: </th>
                                <th>{{ $order->amount }} </th>
                            </tr>

                            <tr>
                                <th> Ordre : </th>
                                <th>
                                    <span class="badge badge-pill badge-warning" style="background: #418DB9;">{{
                                        $order->status }} </span>
                                </th>
                            </tr>



                        </table>


                    </div>

                </div>

            </div> <!-- // 2ND end col md -5 -->


            <div class="row">



                <div class="col-md-12">

                    <div class="table-responsive">
                        <table class="table">
                            <tbody>

                                <tr style="background: #e2e2e2;">
                                    <td class="col-md-1">
                                        <label for=""> Image</label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Nom de produit </label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> Code produit</label>
                                    </td>


                                    <td class="col-md-2">
                                        <label for=""> Couleur </label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> Taille </label>
                                    </td>

                                    <td class="col-md-1">
                                        <label for=""> Quantité </label>
                                    </td>

                                    <td class="col-md-1">
                                        <label for=""> Prix Unitaire </label>
                                    </td>

                                    <td class="col-md-1">
                                        <label for=""> Prix de Quantité </label>
                                    </td>

                                    <td class="col-md-1">
                                        <label for=""> Télécharger </label>
                                    </td>

                                </tr>


                                @foreach($orderItem as $item)
                                <tr>
                                    <td class="col-md-1">
                                        <label for=""><img src="{{ asset($item->product->product_thambnail) }}"
                                                height="50px;" width="50px;"> </label>
                                    </td>

                                    <td class="col-md-3">
                                        <label for=""> {{ $item->product->product_name }}</label>
                                    </td>


                                    <td class="col-md-3">
                                        <label for=""> {{ $item->product->product_code }}</label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> {{ $item->color }}</label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> {{ $item->size }}</label>
                                    </td>

                                    <td class="col-md-2">
                                        <label for=""> {{ $item->qty }}</label>
                                    </td>

                                    <td class="col-md-6">
                                        <label for=""> {{ $item->price }} <span>MAD</span>
                                        </label>
                                    </td>
                                    <td class="col-md-6">
                                        <label for="">{{ $item->price * $item->qty}} <span>MAD</span>
                                        </label>
                                    </td>


                                    @php

                                    $file = App\Models\Product::where('id',$item->product_id)->first();
                                    @endphp

                                    <td class="col-md-1">
                                        @if($order->status == 'pending')
                                        <strong>
                                            <span class="badge badge-pill badge-success" style="background: #418DB9;">
                                                Pas de fichier</span> </strong>

                                        @elseif($order->status == 'confirm')

                                        <a target="_blank" href="{{ asset('upload/pdf/'.$file->digital_file) }}">
                                            <strong>
                                                <span class="badge badge-pill badge-success"
                                                    style="background: #FF0000;"> Télécharger </span> </strong> </a>
                                        @endif


                                    </td>





                                </tr>
                                @endforeach





                            </tbody>

                        </table>

                    </div>


                </div> <!-- / end col md 8 -->

            </div> <!-- // END ORDER ITEM ROW -->

            @if($order->status !== "delivered")

            @else

            @php
            $order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
            @endphp


            @if($order)
            <form action="{{ route('return.order',$order->id) }}" method="post">
                @csrf

                <div class="form-group">
                    <label for="label"> Raison de retour de commande:</label>
                    <textarea name="return_reason" id="" class="form-control" cols="30"
                        rows="05">Retour Raison</textarea>
                </div>

                <button type="submit" class="btn btn-danger">Déclaration de commande</button>

            </form>
            @else

            <span class="badge badge-pill badge-warning" style="background: red">Vous avez envoyé une demande de retour
                pour cela
                produit</span>

            @endif



            @endif
            <br><br>




        </div> <!-- // end row -->

    </div>

</div>


@endsection