<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name','product_image','category_id','brand_id','short_description','long_description','product_price','product_qty','publication_status'
    ];

    protected $casts = [
        'size_id' => 'array',
        'color_id' => 'array',
    ];


    public static function add_product_info($request,$size_id,$color_id)
    {
         $image         = $request->file('product_image');
         $image_name    = $image->getClientOriginalName();
         $directory     ='product-image/';
         $image->move($directory,$image_name);

        

         $product      = new Product();
         $product->product_name             =$request->product_name;
         $product->product_image            =$directory.$image_name;
         $product->category_id              =$request->category_id;
         $product->brand_id                 =$request->brand_id;
         $product->size_id                  =$size_id;
         $product->color_id                 =$color_id;
         $product->short_description        =$request->short_description;
         $product->long_description         =$request->long_description;
         $product->product_price            =$request->product_price;
         $product->product_qty              =$request->product_qty;
         $product->publication_status       =$request->publication_status;
         $product->save();
    }

public static function update_product_info_with_image($request,$size_id,$color_id)
{
        $product = Product::find($request->id);

        $previous_image = $product->product_image;
        unlink($previous_image);

        $image         = $request->file('product_image');
        $image_name    = $image->getClientOriginalName();
        $directory     ='product-image/';
        $image->move($directory,$image_name);

         $product->product_name             =$request->product_name;
         $product->product_image            =$directory.$image_name;
         $product->category_id              =$request->category_id;
         $product->brand_id                 =$request->brand_id;
         $product->size_id                  =$size_id;
         $product->color_id                 =$color_id;
         $product->short_description        =$request->short_description;
         $product->long_description         =$request->long_description;
         $product->product_price            =$request->product_price;
         $product->product_qty              =$request->product_qty;
         $product->publication_status       =$request->publication_status;
         $product->save();
}

public static function update_product_info_without_image($request,$size_id,$color_id)
{
    $product = Product::find($request->id);
    echo $product;
    $product->product_name             =$request->product_name;
  //$product->product_image            =$directory.$image_name;
    $product->category_id              =$request->category_id;
    $product->brand_id                 =$request->brand_id;
    $product->size_id                  =$size_id;
    $product->color_id                 =$color_id;
    $product->short_description        =$request->short_description;
    $product->long_description         =$request->long_description;
    $product->product_price            =$request->product_price;
    $product->product_qty              =$request->product_qty;
    $product->publication_status       =$request->publication_status;
    $product->save();
}


}//Model
