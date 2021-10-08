<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class Shipping extends Model
{
    use HasFactory;
    protected $fillable = ['customerName','districtId','areaId','phoneNumber','description'];

    public static function saveShippingAddress($request)
    {
         $shipping = new Shipping();
         $shipping->customerName           =$request->customerName;
         $shipping->districtId             =$request->districtId;
         $shipping->areaId                 =$request->areaId;
         $shipping->phoneNumber            =$request->phoneNumber;
         $shipping->description            =$request->description;
         $shipping->save();

         Session::put('shippingId',$shipping->id);
         
    }


}//Model
