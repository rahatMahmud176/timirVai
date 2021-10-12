<?php

namespace App\Http\Controllers;

use App\Models\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{

    public function add_color_page(Type $var = null)
    {
         return view('back-end.color.add-color');
    } 


    public function color_info_validate($request)
    {
         $this->validate($request,[
            'color_name'             =>'required',
            'color_image'            =>'required |image',
            'short_description'      =>'required',
            'long_description'       =>'required',
            'publication_status'     =>'required',
         ]);
    }


    public function save_color(Request $request)
    {
        $this->color_info_validate($request);
        Color::save_color_info($request);
        // return redirect('color/add-color-page')->with('message','Color save Successfully');
        return redirect('/color/add-color-page')->with(['msg'=>'Color save Successfully','msgType'=>'success']);


    }
    public function manage_color_page()
    {
        return view('back-end.color.manage-color',[
            'colors'     =>Color::all(),
        ]);

    }


    public function edit_color_page($id)
    {
       return view('back-end.color.edit-color',[
           'color'  =>Color::find($id),
       ]);

    }
    public function color_update(Request $request)
    {

         
        $color_image = $request->file('color_image');

         if($color_image){
            $this->color_info_validate($request);

             Color::update_color_with_image($request);
            // return redirect('')->with('message','Color Update Successfully');
             return redirect('/color/manage-color-page')->with(['msg'=>'Color Update Successfully','msgType'=>'success']);

             
         }else{
            $this->validate($request,[
                'color_name'             =>'required', 
                'short_description'      =>'required',
                'long_description'       =>'required',
                'publication_status'     =>'required', 
             ]);
             
             Color::update_color_without_image($request);
            //  return redirect('color/manage-color-page')->with('message','Color Update Successfully');
             return redirect('/color/manage-color-page')->with(['msg'=>'Color Update Successfully','msgType'=>'success']);

         }

    }

    public function color_delete(Request $request)
    {
        $color = Color::find($request->id); 
        $color->delete();
        // return redirect('color/manage-color-page')->with('message','Color delete Successfully');
        return redirect('/color/manage-color-page')->with(['msg'=>'Color Delete Successfully','msgType'=>'error']);

    }














}//Model
