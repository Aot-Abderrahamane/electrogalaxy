<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Pending Orders 
    public function PendingOrders()
    {
        
        $orders = Order::where('status', 'en attendant')->orderBy('id', 'DESC')->get();
        return view('backend.orders.pending_orders', compact('orders'));
    } // end mehtod
    public function PendingOrdersDetails($order_id)
    {

        $order = Order::with('division', 'district', 'state', 'user')->where('id', $order_id)->first();
        $orderItem = OrderItem::with('product')->where('order_id', $order_id)->orderBy('id', 'DESC')->get();
        return view('backend.orders.pending_orders_details', compact('order', 'orderItem'));
    } // end method 
    public function OrderDelete($id)
    {

        Order::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Supprimé avec succès',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }


    // Confirmed Orders 
    public function ConfirmedOrders()
    {
        $orders = Order::where('status', 'confirmer')->orderBy('id', 'DESC')->get();
        return view('backend.orders.confirmed_orders', compact('orders'));
    } // end mehtod 


    // Processing Orders 
    public function ProcessingOrders()
    {
        $orders = Order::where('status', 'En traitement')->orderBy('id', 'DESC')->get();
        return view('backend.orders.processing_orders', compact('orders'));
    } // end mehtod 


    // Picked Orders 
    public function PickedOrders()
    {
        $orders = Order::where('status', 'sortant')->orderBy('id', 'DESC')->get();
        return view('backend.orders.picked_orders', compact('orders'));
    } // end mehtod 



    // Shipped Orders 
    public function ShippedOrders()
    {
        $orders = Order::where('status', 'expédié')->orderBy('id', 'DESC')->get();
        return view('backend.orders.shipped_orders', compact('orders'));
    } // end mehtod 


    // Delivered Orders 
    public function DeliveredOrders()
    {
        $orders = Order::where('status', 'livré')->orderBy('id', 'DESC')->get();
        return view('backend.orders.delivered_orders', compact('orders'));
    } // end mehtod 


    // Cancel Orders 
    public function CancelOrders()
    {
        $orders = Order::where('status', 'annuler')->orderBy('id', 'DESC')->get();
        return view('backend.orders.cancel_orders', compact('orders'));
    } // end mehtod 

    public function PendingToConfirm($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'confirmer']);

        $notification = array(
            'message' => 'Commande Confirmer avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('pending-orders')->with($notification);
    } // end method
    public function ConfirmToProcessing($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'En traitement']);

        $notification = array(
            'message' => 'Traitement des commandes',
            'alert-type' => 'success'
        );

        return redirect()->route('confirmed-orders')->with($notification);
    } // end method



    public function ProcessingToPicked($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'sortant']);

        $notification = array(
            'message' => 'commande préparée avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('processing-orders')->with($notification);
    } // end method


    public function PickedToShipped($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'expédié']);

        $notification = array(
            'message' => 'expédié avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('picked-orders')->with($notification);
    } // end method


    public function ShippedToDelivered($order_id)
    {

        Order::findOrFail($order_id)->update(['status' => 'livré']);

        $notification = array(
            'message' => 'Commande livrée avec succès',
            'alert-type' => 'success'
        );

        return redirect()->route('shipped-orders')->with($notification);
    } // end method


}
