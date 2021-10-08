<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    use HasFactory;
    protected $fillable = ['color_name','color_image','short_description','long_description','publication_status'];
 

    public static function save_color_info($request)
    {
        
        $color_image = $request->file('color_image');
        $image_name  = $color_image->getClientOriginalName();
        $directory   ='color-image/';
        $color_image->move($directory,$image_name);

        $color = new Color();
        $color->color_name                  =$request->color_name;
        $color->color_image                 =$directory.$image_name;
        $color->short_description           =$request->short_description;
        $color->long_description            =$request->long_description;
        $color->publication_status          =$request->publication_status;
        $color->save();

    }
    public static function update_color_with_image($request)
    {   
        $color = Color::find($request->id);

        $previous_image = $color->color_image;
        unlink($previous_image);

        $color_image = $request->file('color_image');
        $image_name  = $color_image->getClientOriginalName();
        $directory   ='color-image/';
        $color_image->move($directory,$image_name);
 
        $color->color_name                  =$request->color_name;
        $color->color_image                 =$directory.$image_name;
        $color->short_description           =$request->short_description;
        $color->long_description            =$request->long_description;
        $color->publication_status          =$request->publication_status;
        $color->save();

    }


    public static function update_color_without_image($request)
    {
        $color = Color::find($request->id);
        $color->color_name                  =$request->color_name; 
        $color->short_description           =$request->short_description;
        $color->long_description            =$request->long_description;
        $color->publication_status          =$request->publication_status;
        $color->save();
    }



























}//Model
