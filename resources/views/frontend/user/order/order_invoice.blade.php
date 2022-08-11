<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Facture d'achat</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }

        .font {
            font-size: 15px;
        }

        .authority {
            /*text-align: center;*/
            float: right
        }

        .authority h5 {
            margin-top: -10px;
            color: green;
            /*text-align: center;*/
            margin-left: 35px;
        }

        .thanks p {
            color: green;
            ;
            font-size: 16px;
            font-weight: normal;
            font-family: serif;
            margin-top: 20px;
        }
    </style>

</head>

<body>

    <table width="100%" style="background: #F7F7F7; padding:0 20px 0 20px;">
        <tr>
            <td valign="top">
                <!-- {{-- <img src="" alt="" width="150"/> --}} -->
                <h2 style="color: green; font-size: 26px;"><strong>ElectroGalaxy</strong></h2>
            </td>
            <td align="right">
                <pre class="font">
                    ElectroGalaxy
               Email:electro@Galaxy.com <br>
               Mob: 1245454545 <br>
               Tetouan,Av abdelkhalek Torres <br>
              
            </pre>
            </td>
        </tr>

    </table>


    <table width="100%" style="background:white; padding:2px;""></table>

  <table width=" 100%" style="background: #F7F7F7; padding:0 5 0 5px;" class="font">
        <tr>
            <td>
                <p class="font" style="margin-left: 20px;">
                    <strong>Nom:</strong> {{ $order->name }}<br>
                    <strong>E-mail:</strong> {{ $order->email }} <br>
                    <strong>Téléphoner:</strong> {{ $order->phone }} <br>

                    @php
                    $div = $order->division->division_name;
                    $dis = $order->district->district_name;
                    $state = $order->state->state_name;
                    @endphp

                    <strong>Adresse:</strong> {{ $div }},{{ $dis }}.{{ $state }} <br>
                    <strong>code Postal:</strong> {{ $order->post_code }}
                </p>
            </td>
            <td>
                <p class="font">
                <h3><span style="color: green;">Invoice:</span> #{{ $order->invoice_no}}</h3>
                Date de commande: {{ $order->order_date }} <br>
                Date de livraison: {{ $order->delivered_date }} <br>
                Type de paiement : {{ $order->payment_method }} </span>
                </p>
            </td>
        </tr>
    </table>
    <br />
    <h3>Produits</h3>


    <table width="100%">
        <thead style="background-color: green; color:#FFFFFF;">
            <tr class="font">
                <th>Image</th>
                <th>Nom de produit</th>
                <th>Taille</th>
                <th>couleur</th>
                <th>code</th>
                <th>Quantité</th>
                <th>Unité Prix </th>
                <th>Totale </th>
            </tr>
        </thead>
        <tbody>

            @foreach($orderItem as $item)
            <tr class="font">
                <td align="center">
                    <img src="{{ public_path($item->product->product_thambnail)  }}" height="60px;" width="60px;"
                        alt="">
                </td>
                <td align="center"> {{ $item->product->product_name }}</td>
                <td align="center">

                    @if($item->size == NULL)
                    ----
                    @else
                    {{ $item->size }}
                    @endif

                </td>
                <td align="center">{{ $item->color }}</td>
                <td align="center">{{ $item->product->product_code }}</td>
                <td align="center">{{ $item->qty }}</td>
                <td align="center">${{ $item->price }}</td>
                <td align="center">${{ $item->price * $item->qty }} </td>
            </tr>
            @endforeach

        </tbody>
    </table>
    <br>
    <table width="100%" style=" padding:0 10px 0 10px;">
        <tr>
            <td align="right">
                <h2><span style="color: green;">Total:</span>${{ $order->amount }}</h2>
                {{-- <h2><span style="color: green;">Totale:</span> ${{ $order->amount }}</h2> --}}
                {{-- <h2><span style="color: green;">Full Payment PAID</h2> --}}
            </td>
        </tr>
    </table>
    <div class="thanks mt-3">
        <p>Merci d'avoir acheté des produits .. !!</p>
    </div>
    <div class="authority float-right mt-5">
        <p>-----------------------------------</p>
        <h5>Signature:</h5>
    </div>
</body>

</html>