<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Customer;
use App\Models\District;
use Illuminate\Http\Request;
use Session;
class CustomerController extends Controller
{
     public function register_page()
     {
        $customerId= Session::get('customerId'); 
        if($customerId){
            return view('front-end.customer.shipping-address-page',[
                'customer'  => Customer::find($customerId),
                'districts' => District::where('publicationStatus',1)->orderBy('id','desc')->get(),
                'areas'      => Area::where('publicationStatus',1)->orderBy('id','desc')->get(),
            ]);
        }else{
            return view('front-end.customer.register',[
                'districts' =>District::where('publicationStatus',1)->orderBy('id','desc')->get(),
            ]);
        }
       


     }

 public function customer_register_info_validation($request)
 {
    $this->validate($request,[
        'name'             =>'required',
        'email'            =>'required',
        'phone_number'     =>'required',
        'distric'          =>'required',
        'password'         =>'required',
        're_password'      =>'required',
   ]);

 }    

public function customer_register_info_submit(Request $request)
{
  $this->customer_register_info_validation($request);
    $password   = $request->password;
    $rePassword = $request->re_password;
    if($password==$rePassword){
        Customer::customer_register_info_save($request);
        return redirect('customer/shipping-address-page');
    }else{
        return redirect('customer/register_page')->with('massege','Password Wrong');
    }
}

public function customerLoginInfoValidation($request)
{
   $this->validate($request,[
        'emailOrPhone' =>'required',
        'password'     =>'required'
   ]);
}

public function customer_login(Request $request)
{
     $this->customerLoginInfoValidation($request);
        $emailOrPhone = $request->emailOrPhone;
        $password     = $request->password; 
        $customer  = Customer::where('phone_number',$emailOrPhone)->first();
        if($customer){ 

            if (password_verify($password, $customer->password)) {
                Session::put('customerId',$customer->id);
                Session::put('customerName',$customer->name);  
                return redirect('customer/shipping-address-page');
           } else {
               return redirect('customer/register_page')->with('message','Invalid password.');
           }

        }else{
            return redirect('customer/register_page')->with('message','Please register First.');
        } 
        
}
public function logout(Type $var = null)
{
    Session::forget('customerId');
    Session::forget('customerName');

    return redirect('/');
}

public function register_page_home(Request $request)
{
    $customerId= Session::get('customerId'); 
    if($customerId){
        return view('front-end.customer.shipping-address-page',[
            'customer'  => Customer::find($customerId),
            'districts' => District::where('publicationStatus',1)->orderBy('id','desc')->get(),
            'areas'      => Area::where('publicationStatus',1)->orderBy('id','desc')->get(),
        ]);
    }else{
        return view('front-end.customer.register_page_home',[
            'districts' =>District::where('publicationStatus',1)->orderBy('id','desc')->get(),
        ]);
    }
}
public function customer_login_home(Request $request)
{
     $this->customerLoginInfoValidation($request);
        $emailOrPhone = $request->emailOrPhone;
        $password     = $request->password; 
        $customer  = Customer::where('phone_number',$emailOrPhone)->first();
        if($customer){ 

            if (password_verify($password, $customer->password)) {
                Session::put('customerId',$customer->id);
                Session::put('customerName',$customer->name);  
                return redirect('/');
           } else {
               return redirect('customer/register_page')->with('message','Invalid password.');
           }

        }else{
            return redirect('customer/register_page')->with('message','Please register First.');
        } 
        
}





}// Controller
