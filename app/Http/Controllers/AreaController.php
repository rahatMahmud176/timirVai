<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{


public function addAndManageAreaPage(Type $var = null)
{
    return view('back-end.area.add-and-manage-area',[
        'areas' =>Area::all(),
    ]);
}
    

public function saveAreaInfo(Request $request)
{
    $this->validate($request,[
    'areaName'          =>'required',
    'publicationStatus' =>'required',
    ]);

Area::saveAreaInfo($request);
    return redirect('area/addAndManageAreaPage')->with('massage','Area Save Successfully');


}

public function deleteArea($id)
{
    $area = Area::find($id);
    $area->delete();
    return redirect('area/addAndManageAreaPage')->with('msg','Area Delete Successfully');
}
















}//controller
