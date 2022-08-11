@extends('frontend.main_master')
@section('content')

<div class="body-content">
    <div class="container">
        <div class="row">
            @include('frontend.common.user_sidebar')



            <div class="col-md-8"><br>

                <div class="table-responsive">
                    <table class="table">
                        <tbody>

                            <tr style="background: #9b6af7;">
                                <td class="col-md-3">
                                    <label for=""> Date</label>
                                </td>

                                <td class="col-md-3">
                                    <label for=""> Totale</label>
                                </td>

                                <td class="col-md-1">
                                    <label for=""> Paiement</label>
                                </td>


                                <td class="col-md-2">
                                    <label for=""> Facture d'achat</label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> Ordre</label>
                                </td>

                                <td class="col-md-1">
                                    <label for=""> Action </label>
                                </td>

                            </tr>


                            @foreach($orders as $order)
                            <tr>
                                <td class="col-md-3" style='padding:1rem'>
                                    <label for=""> {{ date('d-m-Y', strtotime($order->order_date)) }}</label>
                                </td>

                                <td class="col-md-3">
                                    <label for=""> MAD{{ $order->amount }}</label>
                                </td>


                                <td class="col-md-1">
                                    <label for=""> {{ $order->payment_method }}</label>
                                </td>

                                <td class="col-md-2">
                                    <label for=""> {{ $order->invoice_no }}</label>
                                </td>

                                <td class="col-md-2">
                                    <label for="">

                                        @if($order->status == 'en attendant')
                                        <span class="badge badge-pill badge-warning" style="background: #800080;">
                                            En attente </span>
                                        @elseif($order->status == 'confirmer')
                                        <span class="badge badge-pill badge-warning" style="background: #0000FF;">
                                            Confirmer </span>

                                        @elseif($order->status == 'En traitement')
                                        <span class="badge badge-pill badge-warning" style="background: #FFA500;">
                                            Traitement </span>

                                        @elseif($order->status == 'sortant')
                                        <span class="badge badge-pill badge-warning" style="background: #808000;">
                                            sortant </span>

                                        @elseif($order->status == 'expédié')
                                        <span class="badge badge-pill badge-warning" style="background: #808080;">
                                            Expédié </span>

                                        @elseif($order->status == 'livré')
                                        <span class="badge badge-pill badge-warning" style="background: #008000;">
                                            Livré </span>

                                        @if($order->return_order == 1)
                                        <span class="badge badge-pill badge-warning" style="background:red;">Retour
                                            Demandé </span>

                                        @endif

                                        @else
                                        <span class="badge badge-pill badge-warning" style="background: #FF0000;">
                                            Annuler </span>

                                        @endif
                                    </label>
                                </td>

                                <td class="col-md-1">
                                    <a href="{{ url('user/order_details/'.$order->id ) }}"
                                        class="btn btn-sm btn-primary"><i class="fa fa-eye"></i> Voir</a>

                                    <a target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}"
                                        class="btn btn-sm btn-danger" style="margin-top: 5px;"><i class="fa fa-download"
                                            style="color: white;"></i> Facture d'achat </a>

                                </td>

                            </tr>
                            @endforeach





                        </tbody>

                    </table>

                </div>





            </div> <!-- / end col md 8 -->





        </div> <!-- // end row -->

    </div>

</div>


@endsection