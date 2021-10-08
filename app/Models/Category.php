<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category_name','category_short_description','category_long_description','publication_status','clickCount'];


    public static function categeoy_info_save($request)
    {
         $category = new Category();
         $category->category_name                 =$request->category_name;
         $category->category_short_description    =$request->category_short_description;
         $category->category_long_description     =$request->category_long_description;
         $category->publication_status            =$request->publication_status;
         $category->clickCount                     =0;
         $category->save();
    }
    public static function category_update($request)
    {
        $category = Category::find($request->id);
         $category->category_name                 =$request->category_name;
         $category->category_short_description    =$request->category_short_description;
         $category->category_long_description     =$request->category_long_description;
         $category->publication_status            =$request->publication_status;
         $category->save();
         
    }






}//Model
