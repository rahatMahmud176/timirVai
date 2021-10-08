<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;
    protected $fillable = ['sliderHeader','sliderTitle','short_description','buttonText','sliderImage'];


public static function saveSlider($request)
{
    $sliderImage    = $request->file('sliderImage');
    $imageName      = $sliderImage->getClientOriginalName();
    $directory      ='sliderImage/';
    $sliderImage->move($directory,$imageName);

    $slider = new Slider();
    $slider->sliderHeader           = $request->sliderHeader;
    $slider->sliderTitle            = $request->sliderTitle;
    $slider->short_description      = $request->short_description;
    $slider->buttonText             = $request->buttonText;
    $slider->sliderImage            = $directory.$imageName;
    $slider->save();
}

public static function makeFirstSlider($id)
{
    $slider = Slider::where('sliderType',1)->first();
    if ($slider) {
        $slider->sliderType = 0;
        $slider->save(); 
    } 
        $slider = Slider::find($id);
        $slider->sliderType = 1;
        $slider->save();
      
}






}//Model
