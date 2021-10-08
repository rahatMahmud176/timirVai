<?php

namespace App\Models;

use Session;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name','email','phone_number','distric','password'];

public static function customer_register_info_save($request)
{
    $customer = new Customer();
    $customer->name             =$request->name;
    $customer->email            =$request->email;
    $customer->phone_number     =$request->phone_number;
    $customer->distric          =$request->distric;
    $customer->password         =bcrypt($request->password); 
    $customer->save();
    
    $customerID = $customer->id;
    Session::put('customerId',$customerID);
    Session::put('customerName',$customer->name);

}









}//MOdel
