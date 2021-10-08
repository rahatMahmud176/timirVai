<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\reSeller;
use Illuminate\Http\Request;
use Session;

class reSellerController extends Controller
{
     
public function dashbord()
{ 
        return view('reSeller.home.dashbord',[
            'products'        =>Product::where('publication_status',1)->get()
        ]); 
}

public function register()
{
    return view('reSeller.login.register');
}

public function reSellerSingUpInfoValidate($request)
{
     $this->validate($request,[
         'reSellerName'           =>'required',
         'reSellerPhoneNumber'    =>'required | min:11 | max:11 | unique:App\Models\reSeller,reSellerPhoneNumber',
         'password'               =>'required',
         'rePassword'             =>'required',
     ],
     [
         'reSellerName.required'          => 'Must be given a User Name',
         'reSellerPhoneNumber.required'   => 'Please give a Phone number',
         'reSellerPhoneNumber.min'        => 'Re seller Phone number minimum 11 digit.',
         'reSellerPhoneNumber.max'        => 'Re seller Phone number Maximum 11 digit.',
         'reSellerPhoneNumber.unique'     => 'This Phone number already Exists.',
         'password.required'              => 'Type your Password.',
         'rePassword.required'            => 'Type your Re-password.',
     ]
    );
}

public function reSellerSingUpInfoSubmit(Request $request)
{

    $this->reSellerSingUpInfoValidate($request);
      $password = $request->password;
      $rePassword = $request->rePassword; 
      if ($password==$rePassword) {
            reSeller::reSellerSingUpInfoSubmit($request);
            return redirect('reSeller/register')->with(['msg'=>'Success! Wait for Aprove.','msgType'=>'success']);
      }else{
          return redirect('reSeller/register')->with(['msg'=>'Password Wong','msgType'=>'error']);
      }

}
public function login()
{
    return view('reSeller.login.login');
}
public function reSellerLogin(Request $request)
{
        $this->validate($request,[
             'reSellerPhoneNumber'    =>'required | min:11 | max:11',
             'password'               =>'required',
        ],
        [
         'reSellerPhoneNumber.required'   => 'Please give a Phone number',
         'reSellerPhoneNumber.min'        => 'Re seller Phone number minimum 11 digit.',
         'reSellerPhoneNumber.max'        => 'Re seller Phone number Maximum 11 digit.',
         'password.required'              => 'Type your Password.',
        ]);
        
        $reSeller = reSeller::where('reSellerPhoneNumber',$request->reSellerPhoneNumber)->first();
        
        if ($reSeller) {
            if ($reSeller->reSellerType==9) {
                return redirect('reSeller/login')->with(['msg'=>'Please Wait for Aprove.','msgType'=>'warning']); 

            }else{
                if (password_verify($request->password,$reSeller->password)) {
                    Session::put('reSellerId',$reSeller->id);
                    Session::put('reSellerName',$reSeller->reSellerName);
                    return redirect('reSeller/dashbord')->with(['msg'=>'LogIn Successfully.','msgType'=>'success']); 
               } else {
                   return redirect('reSeller/login')->with(['msg'=>'Password Invalid.','msgType'=>'error']); 
               }
            } 
        }else{
          return redirect('reSeller/login')->with(['msg'=>'Phone Number Not valid','msgType'=>'error']); 
        } 
}
public function reSellerLogout()
{
    Session::forget('reSellerId');
    Session::forget('reSellerName');
    return redirect('reSeller/login')->with(['msg'=>'loged Out','msgType'=>'error']);
}  
public function reSellerManage(Type $var = null)
{
    return view('back-end.reSeller.manageReSeller',[
        'reSellers'         => reSeller::all(),
    ]);
}
public function approvingReSeller($id)
{
    $reSeller = reSeller::find($id);
    $reSeller->reSellerType = 1;
    $reSeller->save();
    return redirect('reseller/reSellerManage')->with(['msg'=>'Aproved Successfully.','msgType'=>'success']);
}





}//Controller
