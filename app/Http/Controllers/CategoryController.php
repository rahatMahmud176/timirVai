<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request; 

class CategoryController extends Controller
{
     public function add_category_page(Type $var = null)
     {
          return view('back-end.category.add-category');
     }


     public function category_info_validate($request)
     {
          $this->validate($request,[
               'category_name'               =>'required',
               'category_short_description'  =>'required',
               'category_long_description'   =>'required',
               'publication_status'          =>'required'
          ]);
     }




     public function categeoy_info_save(Request $request)
     {

          $this->category_info_validate($request);
         Category::categeoy_info_save($request);
         //return redirect('category/add-category-page')->with('message','Category Save Successfully');
         return redirect('category/add-category-page')->with(['notification'=>'Category Save Successfully','msgType'=>'success']);
     }

     public function manage_category_page(Type $var = null)
     {
          return view('back-end.category.manage-category',[
               'categories'  =>Category::all()
          ]);
     }
     public function edit_category_page($id)
     {
          return view('back-end.category.edit-category',[
              'category'       =>Category::find($id),
          ]);
     }
     public function category_update(Request $request)
     {
          $this->category_info_validate($request);
           Category::category_update($request);
           return redirect('category/manage-category-page')->with('message','Category Update Successfully');
     }

     public function delete_category(Request $request)
     {
         $category = Category::find($request->id); 
         $category->delete();
         return redirect('category/manage-category-page')->with('message','Category Delete Successfully');
     }





     
}//Controller
