<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['menuTitle','menuLink','dropdownableStatus','activationStatus'];


public static function saveMenuInfo($request)
{
     $menu = new Menu();
     $menu->menuTitle               = $request->menuTitle;
     $menu->menuLink                = $request->menuLink;
     $menu->dropdownableStatus      = $request->dropdownableStatus;
     $menu->activationStatus        = $request->activationStatus;
     $menu->save();

}

public static function updateMenuInfo($request)
{
     $menu = Menu::find($request->id);
     $menu->menuTitle               = $request->menuTitle;
     $menu->menuLink                = $request->menuLink;
     $menu->dropdownableStatus      = $request->dropdownableStatus;
     $menu->activationStatus        = $request->activationStatus;
     $menu->save();

}




}//Model
