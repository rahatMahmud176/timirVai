<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Cart;

class CartController extends Controller
{

public function add_to_cart(Request $request)
{
     $product = Product::find($request->id);
     $click   = $product->clickCount;
     $product->clickCount =$click+1;
     $product->save();
     
     $categoryId              = $product->category_id;
     $category                = Category::find($categoryId);
     $categoryClickCount      = $category->clickCount;
     $category->clickCount    = $categoryClickCount+1;
     $category->save();

    Cart::add([
        'id'        => $product->id,  
        'name'      =>$product->product_name,
        'price'     =>$product->product_price,
        'quantity'  =>$request->qty,
        'attributes'=> array(
        'image'     =>$product->product_image, 
          )
    ]);
    return redirect('cart/show');
}
public function add_to_cart_by_get_method($id)
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
     Cart::add([
        'id'        =>$product->id,  
        'name'      =>$product->product_name,
        'price'     =>$product->product_price,
        'quantity'  =>1,
        'attributes'=> array(
        'image'     =>$product->product_image, 
          )
    ]);
    return redirect('cart/show');
}



public function cart_show(Type $var = null)
{
    
    return view('front-end.cart.cart-show',[
        'cart_products' =>Cart::getContent(),
    ]);
}
public function update_cart(Request $request,$id)
{
     Cart::update($id,[
        'quantity'=>[
            'relative'=>false,
            'value'   =>$request->qty,
        ]
     ]);
     return redirect('cart/show');
}
 public function cart_item_delete($id)
 {
    Cart::remove($id); 
    return redirect('cart/show');
 }
public function clear_cart(Type $var = null)
{
    Cart::clear();
    return redirect('cart/show');
}


}//Controller
