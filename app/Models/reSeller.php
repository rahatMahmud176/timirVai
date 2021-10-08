<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class reSeller extends Model
{
    use HasFactory;
    protected $fillable = ['reSellerName','reSellerPhoneNumber','password','reSellerType'];


public static function reSellerSingUpInfoSubmit($request)
{
     $reSeller = new reSeller();
     $reSeller->reSellerName             =$request->reSellerName;
     $reSeller->reSellerPhoneNumber      =$request->reSellerPhoneNumber;
     $reSeller->password                 =bcrypt($request->password);
     $reSeller->reSellerType                 =9;
     $reSeller->save();

     Session::put('reSellerId',$reSeller->id);
     Session::put('reSellerName',$reSeller->reSellerName);
}
public static function loginCheck()
{
     if(Session::get('reSellerId')){
         $id    = Session::get('reSellerId');
         return $id;
     }
}
 









}//Model
