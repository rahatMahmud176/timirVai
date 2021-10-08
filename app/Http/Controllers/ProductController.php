<?php

namespace App\Http\Controllers;

use App\Models\Brand; 
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use DB;
 

class ProductController extends Controller
{
     public function add_product_page()
     {
          return view('back-end.product.add-product',[
               'colors'       =>Color::where('publication_status',1)->get(),
               'sizes'        =>Size::where('publication_status',1)->get(),
               'categories'   =>Category::where('publication_status',1)->get(),
               'brands'       =>Brand::where('publication_status',1)->get(),
          ]);
     }


public function product_info_validate($request)
{
      $this->validate($request,[
          'product_name'           =>'required | max:50',
          'product_image'          =>'required',
          'category_id'            =>'required',
          'brand_id'               =>'required',
          'size_id'                =>'required',
          'color_id'               =>'required',
          'short_description'      =>'required',
          'long_description'       =>'required',
          'product_price'          =>'required',
          'product_qty'            =>'required',
          'publication_status'     =>'required',
      ]);
} 
public function product_info_validate_without_image($request)
{
      $this->validate($request,[
          'product_name'           =>'required | max:50',
        //'product_image'          =>'required',
          'category_id'            =>'required',
          'brand_id'               =>'required',
          'size_id'                =>'required',
          'color_id'               =>'required',
          'short_description'      =>'required',
          'long_description'       =>'required',
          'product_price'          =>'required',
          'product_qty'            =>'required',
          'publication_status'     =>'required',
      ]);
}    

public function add_product_info(Request $request)
{ 
     $this->product_info_validate($request);
     
     $size_id       = implode(',',$request->size_id); 
     $color_id = implode(',',$request->color_id); 

      Product::add_product_info($request,$size_id,$color_id);
      return redirect('product/add-product-page')->with('message','Product Save Successfully');
}

public function manage_product_page()
{      

      return view('back-end.product.manage-product',[
           'products'       =>Product::all(),
           
            
      ]);
}
public function edit_product_page($id){
     return view('back-end.product.edit-product',[ 
          'colors'       =>Color::where('publication_status',1)->get(),
          'sizes'        =>Size::where('publication_status',1)->get(),
          'categories'   =>Category::where('publication_status',1)->get(),
          'brands'       =>Brand::where('publication_status',1)->get(), 
          'product'      =>Product::find($id),
     ]);
}

public function update_product_info(Request $request)
{
     

     if($request->product_image){ 
       $this->product_info_validate($request); 
       $size_id       = implode(',',$request->size_id); 
       $color_id = implode(',',$request->color_id);
       Product::update_product_info_with_image($request,$size_id,$color_id);
          
     }else{
         
          $this->product_info_validate_without_image($request);
          $size_id       = implode(',',$request->size_id); 
          $color_id = implode(',',$request->color_id);
          Product::update_product_info_without_image($request,$size_id,$color_id); 
     }  
     return redirect('product/manage-product-page')->with('message','Product update Successfully');
}


public function delete_product(Request $request)
{
     $product = Product::find($request->id); 
     $product->delete();
     return redirect('product/manage-product-page')->with('delete_message','Product Delete Successfully');
}


public function single_product_page($id)
{    
     $product = Product::find($id);
     $click   = $product->clickCount;
     $product->clickCount =$click+1;
     $product->save();
     
     $categoryId              = $product->category_id;
     $category                = Category::find($categoryId);
     $categoryClickCount      = $category->clickCount;
     $category->clickCount    = $categoryClickCount+1;
     $category->save();

      
    return view('front-end.product.single-product',[
          'product'                =>DB::table('products')
                                   ->where('products.id',$id)
                                   ->join('brands','products.brand_id','=','brands.id')
                                   ->select('products.*','brands.brand_name')
                                   ->first(), 
           

          'category_products'       =>Product::where('category_id',$categoryId)
                                    ->orderBy('id','desc')   
                                    ->take(4)
                                    ->get(), 
          'category_active_products'=>Product::where('category_id',$categoryId)
                                    ->orderBy('id','desc')   
                                    ->take(3) 
                                    ->get(),
          'category_inactive_products'=>Product::where('category_id',$categoryId) 
                                    ->take(3) 
                                    ->get()
    ]);
}















}//Controller
