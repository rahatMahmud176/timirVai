<?php

namespace App\Http\Controllers;

use App\Models\MyUser;
use Illuminate\Http\Request;
use Session;

class myUserController extends Controller
{

public function register()
{
    return view('back-end.users.register');
}
public function userRegisterInfoValidate($request)
{
     $this->validate($request,[
         'userFirstName'            =>'required',
         'userLastName'             =>'required',
         'userPhoneNumber'          =>'required | min:11 | max:11 | unique:App\Models\MyUser,userPhoneNumber',
         'password'                 =>'required',
         'rePassword'               =>'required',
     ],[
         'userFirstName.required'   =>'First Name is required',
         'userLastName.required'    =>'Last Name is required',
         'userPhoneNumber.required' =>'Phone Number is required',
         'password.required'        =>'password is required',
         'rePassword.required'      =>'Re-password is required',
     ]);
}

public function userRegisterInfoSubmit(Request $request)
{
      $this->userRegisterInfoValidate($request);
      if($request->password==$request->rePassword){
           MyUser::userRegisterInfoSubmit($request);
           return redirect('user/register')->with(['msg'=>'Successfull.Please wait for Appove.','msgType'=>'success']);
      }else{
           return redirect('user/register')->with(['msg'=>'Password is invalid','msgType'=>'error']);
      }
}

public function loginInfoSubmit(Request $request)
{
    $user = MyUser::where('userPhoneNumber',$request->phoneNumber)->first();
    if ($user) {
          if ($user->userType==9) {
           return redirect('user/register')->with(['msg'=>'Please wait for Appove.','msgType'=>'error']); 
          }else{
            if (password_verify($request->password, $user->password)) {
                Session::put('userId',$user->id);
                Session::put('userName',$user->userFirstName);
                 return redirect('dashbord')->with(['msg'=>'logIn successfull.','msgType'=>'success']);
            } else {
                return redirect('user/register')->with(['msg'=>'Invalid Password','msgType'=>'error']);  
            }
           
          }
    }else{
        return redirect('user/register')->with(['msg'=>'Invalid Phone Number','msgType'=>'error']); 
    }
}

public function userLogout()
{
    Session::forget('userId');
    Session::forget('userName');
    return redirect('user/register')->with(['msg'=>'Loged Out.','msgType'=>'error']);  
}
public function userManage()
{
     return view('back-end.user.userManage');
}





}//Controller 
