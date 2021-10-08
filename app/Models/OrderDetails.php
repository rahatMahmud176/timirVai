<?php

namespace App\Models;

use Darryldecode\Cart\Cart;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class OrderDetails extends Model
{
    use HasFactory;
    protected $fillable = ['orderId','productId','productName','productPrice','productQuantity'];


    public static function submitOrderDetailsInfo($request)
    {
        $cartProducts = \Cart::getContent();

        foreach($cartProducts as $cartProduct){
            $orderDetails  = new OrderDetails();
            $orderDetails->orderId           = Session::get('orderId');
            $orderDetails->productId         = $cartProduct->id;
            $orderDetails->productName       = $cartProduct->name;
            $orderDetails->productPrice      = $cartProduct->price;
            $orderDetails->productQuantity   = $cartProduct->quantity;
            $orderDetails->save();

        }

         
    }






}//Model
