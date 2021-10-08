<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    use HasFactory;
    protected $fillable = ['name','short_description','long_description','publication_status'];

    public static function size_info_save($request)
    {
         $size = new Size();
         $size->name                  =$request->name;
         $size->short_description     =$request->short_description;
         $size->long_description      =$request->long_description;
         $size->publication_status    =$request->publication_status;
         $size->save();
    }

    public static function update_size_info($request)
    {
        $size =Size::find($request->id);
         $size->name                  =$request->name;
         $size->short_description     =$request->short_description;
         $size->long_description      =$request->long_description;
         $size->publication_status    =$request->publication_status;
         $size->save();
    }

















}//Model
