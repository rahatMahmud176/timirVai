<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['ordeId','paymentMethod','paymentStatus'];

    public static function submitPaymentInfo($request)
    {
        $payment = new Payment();
        $payment->ordeId           = Session::get('orderId');
        $payment->paymentMethod    = $request->paymentMethod;
        $payment->save();
    }














}// Model
