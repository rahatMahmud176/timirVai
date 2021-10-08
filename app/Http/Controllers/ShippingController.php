<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Customer;
use App\Models\District;
use App\Models\Shipping;
use Illuminate\Http\Request;
use Session;

class ShippingController extends Controller
{ 


public function shipping_address_page(Type $var = null)
{
    $customerId= Session::get('customerId');
    return view('front-end.customer.shipping-address-page',[
        'customer'  => Customer::find($customerId),
        'districts' => District::where('publicationStatus',1)->orderBy('id','desc')->get(),
        'areas'      => Area::where('publicationStatus',1)->orderBy('id','desc')->get(),
        
    ]);
} 
public function ShippingAddressValidate($request)
{
        $this->validate($request,[
        'customerName'          =>'required',
        'districtId'            =>'required',
        'areaId'                =>'required',
        'phoneNumber'           =>'required',
        'description'           =>'required',
        ]);
}
public function saveShippingAddress(Request $request)
{
     
    $this->ShippingAddressValidate($request);
    Shipping::saveShippingAddress($request);

    return redirect('customer/payment-method');
    

}
public function payment_method(Type $var = null)
{
    return view('front-end.payment-method.payment-method');
    
}














}//Controller
