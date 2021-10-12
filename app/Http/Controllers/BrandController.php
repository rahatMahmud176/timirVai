<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
     public function add_brand_page(Type $var = null)
     {
         return view('back-end.brand.add-brand');
     }
     public function brand_info_valided($request)
     {
         $this->validate($request,[
            'brand_name'              =>'required | max:30',
            'brand_short_description' =>'required | max:100',
            'brand_long_description'  =>'required | max:300',
            'publication_status'      =>'required',

         ]);
     }


     public function band_info_save(Request $request)
     {
         $this->brand_info_valided($request);

          Brand::band_info_save($request); 
        //   return redirect('brand/add-brand-page')->with('message','');
          return redirect('/brand/add-brand-page')->with(['msg'=>'Brand Save Successfully','msgType'=>'success']);
     }

     public function manage_brand_page(Type $var = null)
     {
          return view('back-end.brand.manage-brand',[
              'brands' =>Brand::all(),
          ]);
     }

     public function edit_brand_page($id)
     {
          return view('back-end.brand.edit-brand',[
              'brand' => Brand::find($id),
          ]);
     }
     public function band_update(Request $request)
     {
        $this->brand_info_valided($request);
         Brand::band_update($request);
         return redirect('brand/manage-brand-page')->with('msg','Brand Update Successfully');
     }
     public function delete_brand(Request $request)
     {
         $brand = Brand::find($request->id); 
         $brand->delete();
         return redirect('brand/manage-brand-page')->with('msg','Brand Delete Successfully');
     }














}//Brand
