<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Session;

class MyUser extends Model
{
    use HasFactory;
    protected $fillable = ['userFirstName','userLastName','userPhoneNumber','password','userType'];


public static function userRegisterInfoSubmit($request)
{
    $superAdmin  = MyUser::where('userType',1)->first();

     $user = new MyUser();
     $user->userFirstName       = $request->userFirstName;
     $user->userLastName        = $request->userLastName;
     $user->userPhoneNumber     = $request->userPhoneNumber;
     $user->password            = bcrypt($request->password);
     if ($superAdmin) {
        $user->userType            = 9;
     }else{
        $user->userType            = 1;
     } 
     $user->save(); 
}

public static function loginCheck()
{
    $id = Session::get('userId');
    $user = MyUser::find($id);

     if (Session::get('userId')) { 
         if ($user->userType!=9) {
              return $id;
         }
     }
}





















}//Model
