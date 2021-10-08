<?php

namespace App\Models;

 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['customerId','shippingId','orderTolal','orderStatus'];

    public static function submitOrderInfo($request)
    {
        $order = new Order();
        $order->customerId          =Session::get('customerId');
        $order->shippingId          =Session::get('shippingId'); 
        $order->orderTolal          =Session::get('orderTotal'); 
        $order->save();

        Session::put('orderId',$order->id);
    }

   
}//Model 
