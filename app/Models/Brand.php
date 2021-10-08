<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $fillable = ['brand_name','brand_short_description','brand_long_description','publication_status'];


    public static function band_info_save($request)
    {
         $brand = new Brand();
         $brand->brand_name                  =$request->brand_name;
         $brand->brand_short_description     =$request->brand_short_description;
         $brand->brand_long_description      =$request->brand_long_description;
         $brand->publication_status          =$request->publication_status;
         $brand->save();
    }

    public static function band_update($request)
    {
         $brand = Brand::find($request->id);
         $brand->brand_name                  =$request->brand_name;
         $brand->brand_short_description     =$request->brand_short_description;
         $brand->brand_long_description      =$request->brand_long_description;
         $brand->publication_status          =$request->publication_status;
         $brand->save();
    }
}
