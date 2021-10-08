<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Shipping;
use Darryldecode\Cart\Cart;
use Illuminate\Http\Request;
use DB;
use PDF;

class OrderController extends Controller
{
    public function submitOrder(Request $request)
    {
         if($request->paymentMethod == 'cashOnDelivery'){
            
            Order::submitOrderInfo($request);
            Payment::submitPaymentInfo($request); 
            OrderDetails::submitOrderDetailsInfo($request);
            \Cart::clear();
            
            return view('front-end.home.order-successfull');

         }elseif($request->paymentMethod == 'sureCash'){
            return 'Sure Cash';
         }elseif($request->paymentMethod == 'nagad'){
            return 'Nagad';
         }elseif($request->paymentMethod == 'bKash'){
            return 'bKash';
         }elseif($request->paymentMethod == 'rocket'){
            return 'rocket';
         }   
    }//function

public function ordersShow()
{
   return view('back-end.order.orderShow',[
      'orders' =>DB::table('orders')
               ->join('customers','orders.customerId','=','customers.id')
               ->join('payments','orders.id','=','payments.ordeId')
               ->select('orders.*','customers.name','payments.paymentStatus','payments.paymentMethod')
               ->orderBy('id','desc')
               ->get()
   ]);
}
public function orderDetails($id)
{
   $order = Order::find($id);
   return view('back-end.order.orderDetails',[
      'order'       => Order::find($id),
      'customer'    => Customer::find($order->customerId)->first(),
      'shiping'     => DB::table('shippings')
                     ->join('districts','districts.id','=','shippings.districtId')
                     ->join('areas','areas.id','=','shippings.areaId')
                     ->select('shippings.*','districts.districtName','areas.areaName')->first(),
      'products'  => OrderDetails::where('orderId',$order->id)->get(),
   ]);
}

public function invoicePdf($id)
{
    
   return view('back-end.invoice.invoicePdf');
   // $pdf = PDF::loadView('back-end.order.invoicePdf');
   // return $pdf->stream('invoice.pdf');
}
















}//OrderController
