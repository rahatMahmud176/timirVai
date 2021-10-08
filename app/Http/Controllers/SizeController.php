<?php

namespace App\Http\Controllers;

use App\Models\Size;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    public function add_size_page()
    {
         return view('back-end.size.add-size');

    } 


    public function size_info_validate($request)
    {
         $this->validate($request,[
            'name'                  =>'required',
            'short_description'     =>'required',
            'long_description'      =>'required',
            'publication_status'    =>'required',
         ]);
    } 

    public function save_size_info(Request $request)
    {
       
       $this->size_info_validate($request);
       Size::size_info_save($request);       
       return  redirect('size/add-size-page')->with('message','Size info save successfully');
    }
    public function manage_size_page(Type $var = null)
    {
        return view('back-end.size.manage-size',[
            'sizes'         => Size::all(),
        ]);
    }
    public function edit_size_page($id)
    {
         return view('back-end.size.edit-size',[
             'size'     =>Size::find($id),
         ]);
    }
    public function update_size_info(Request $request)
    {
        $this->size_info_validate($request);
        Size::update_size_info($request);       
        return  redirect('size/manage-size-page')->with('message','Size info Update successfully');
    }
    public function delete_size(Request $request)
    {
         $size = Size::find($request->id); 
         $size->delete();
         return redirect('size/manage-size-page')->with('message','Size info Delete successfully');
    }













    
}// Model
