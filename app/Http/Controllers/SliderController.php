<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{


public function addSlidersPage( )
{
    return view('back-end.slider.addSlider');
}

public function sliderInfoValidate($request)
{
    
     $this->validate($request,[
        'sliderHeader'          =>'required', 
        'sliderTitle'           =>'required',
        'short_description'     =>'required',
        'buttonText'            =>'required',
        'sliderImage'           =>'required', 
     ]);
}


public function saveSlider(Request $request)
{ 
    $this->sliderInfoValidate($request); 
    $sliderCount = Slider::all()->count();
    
    if ($sliderCount>=3) {
        return redirect('slider/addSlidersPage')->with('massage','Slider Limit 3 items');
     }else{
        Slider::saveSlider($request);
        return redirect('slider/addSlidersPage')->with('message','Slider Save Successfully');
     }
   
}

public function manageSlider(Type $var = null)
{
   return view('back-end.slider.manageSlider',[
       'sliders'       => Slider::all(),
   ]);
}

public function sliderDelete($id)
{
     $slider = Slider::find($id);
     $slider->delete();
     return redirect('slider/manageSlider')->with('massage','Slider Delete Successfully');
}
public function makeFirstSlider($id)
{
     
    Slider::makeFirstSlider($id);
   
    
     
     return redirect('slider/manageSlider')->with('message','Slider update Successfully');
}
























    
}//Controller
