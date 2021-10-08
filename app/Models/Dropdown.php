<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dropdown extends Model
{
    use HasFactory;
    protected $fillabel = ['parentMenuId','dropdownTitle','dropdownLink','activationStatus'];


public static function saveDropdownInfo($request)
{
     $dropdown =new Dropdown();
     $dropdown->parentMenuId                =$request->parentMenuId;
     $dropdown->dropdownTitle               =$request->dropdownTitle;
     $dropdown->dropdownLink                =$request->dropdownLink;
     $dropdown->activationStatus            =$request->activationStatus;
     $dropdown->save();
}
public static function updateDropdownInfo($request)
{
    $dropdown = Dropdown::find($request->id);
    $dropdown->parentMenuId                =$request->parentMenuId;
    $dropdown->dropdownTitle               =$request->dropdownTitle;
    $dropdown->dropdownLink                =$request->dropdownLink;
    $dropdown->activationStatus            =$request->activationStatus;
    $dropdown->save();
}

}//Model
