<?php

namespace App\Http\Controllers;

use App\Models\Dropdown;
use App\Models\Menu;
use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
    
public function addDropdownPage( )
{
   return view('back-end.menu.addDropdownPage',[
       'menus'      => Menu::where('dropdownableStatus',1)->get(),
       'dropdowns'  => DB::table('dropdowns')
                    ->join('menus','menus.id','=','dropdowns.parentMenuId')
                    ->select('dropdowns.*','menus.menuTitle')
                    ->paginate(10),
   ]);
}
public function validateDropdownInfo($request)
{
     $this->validate($request,[
         'parentMenuId'               =>'required',
         'dropdownTitle'              =>'required | max:15 |regex:/(^([a-zA-z ]+)(\d+)?$)/u',
         'dropdownLink'               =>'required',
         'activationStatus'           =>'required',
     ]);
}



public function saveDropdownInfo(Request $request)
{
    $this->validateDropdownInfo($request); 
    Dropdown::saveDropdownInfo($request);  
    return redirect('menu/addDropdownPage')->with('massage','Dropdown Added Seccessfully !!');
}

public function inactiveDropdown($id)
{
     $dropdown = Dropdown::find($id);
     $dropdown->activationStatus = 0;
     $dropdown->save();
     return redirect('menu/addDropdownPage')->with('massage','Dropdown Inactived Seccessfully !!');
}
public function activeDropdown($id)
{
     $dropdown = Dropdown::find($id);
     $dropdown->activationStatus = 1;
     $dropdown->save();
     return redirect('menu/addDropdownPage')->with('massage','Dropdown Actived Seccessfully !!');
}
public function deleteDropdown($id)
{
     $dropdown = Dropdown::find($id); 
     $dropdown->delete();
     return redirect('menu/addDropdownPage')->with('deleteMassage','Dropdown Deleted Seccessfully !!');
}
public function editDropdown($id)
{
     return view('back-end.menu.editDropdownPage',[
         'dropdown'         => Dropdown::find($id),
         'menus'      => Menu::where('dropdownableStatus',1)->get(),
         'dropdowns'  => DB::table('dropdowns')
                    ->join('menus','menus.id','=','dropdowns.parentMenuId')
                    ->select('dropdowns.*','menus.menuTitle')
                    ->paginate(10),
     ]);
}
public function updateDropdownInfo(Request $request)
{
    $this->validateDropdownInfo($request);
    Dropdown::updateDropdownInfo($request);
    return redirect('menu/addDropdownPage')->with('massage','Dropdown Update Seccessfully !!');
}









}//Controller 
