<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class menuController extends Controller
{
     
public function addMenuPage( )
{
     return view('back-end.menu.addMenuPage',[
         'menus'    => Menu::all()
     ]);
}
public function validateMenuInfo($request)
{
     $this->validate($request,[
         'menuTitle'           =>'required | max:10 | regex:/(^([a-zA-z]+)(\d+)?$)/u',
         'menuLink'            =>'nullable',
         'dropdownableStatus'  =>'required',
         'activationStatus'    =>'required',
     ]);
} 
public function saveMenuInfo(Request $request)
{
     $this->validateMenuInfo($request);
     $menuItemCount = Menu::all()->count();
     if ($menuItemCount>=5) {
        return redirect('menu/addMenuPage')->with('deleteMassage','You do not Create More Then 5 Menus !!!');
     } else {
        Menu::saveMenuInfo($request);
        return redirect('menu/addMenuPage')->with('massage','Menu Add Successfully');
     }
     
    
}
public function inactiveMenu($id)
{
    $menu   = Menu::find($id);
    $menu->activationStatus=0;
    $menu->save();
    return redirect('menu/addMenuPage')->with('massage','Menu Inactived Successfully');
}
public function activeMenu($id)
{
    $menu   = Menu::find($id);
    $menu->activationStatus=1;
    $menu->save();
    return redirect('menu/addMenuPage')->with('massage','Menu Actived Successfully');
}
public function deleteMenu($id)
{
    $menu   = Menu::find($id); 
    $menu->delete();
    return redirect('menu/addMenuPage')->with('deleteMassage','Menu Deleted Successfully');
}
public function nonDropdownMenu($id)
{
    $menu   = Menu::find($id);
    $menu->dropdownableStatus=0;
    $menu->save();
    return redirect('menu/addMenuPage')->with('massage','Menu NOT_Dropdownable Successfully');
}


public function dropdownableMenu($id)
{
    $menu   = Menu::find($id);
    $menu->dropdownableStatus=1;
    $menu->save();
    return redirect('menu/addMenuPage')->with('massage','Menu Dropdownable Successfully');
}
public function editMenuPage($id)
{
    return view('back-end.menu.editMenuPage',[
        'editableMenu'    => Menu::find($id),
        'menus'           => Menu::all()
    ]);
}
public function updateMenuInfo(Request $request)
{
       $this->validateMenuInfo($request); 
       Menu::updateMenuInfo($request);
       return redirect('menu/addMenuPage')->with('massage','Menu Update Successfully');
   
}
















}//Controller
