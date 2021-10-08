<?php

namespace App\Http\Controllers;

use App\Models\District;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
public function add_district_page()
{
    return view('back-end.district.add-district',[
        'districts' =>District::all(),
    ]);
}

public function saveDistrictInfoValidate($request)
{
    $this->validate($request,[
        'districtName'      =>'required',
        'publicationStatus' =>'required',
    ]);
}

public function saveDistrictInfo(Request $request)
{
    $this->saveDistrictInfoValidate($request); 
    District::saveDistrictInfo($request);

    return redirect('district/add-distric-page')->with('massege','District Save Successfully'); 
}

public function deleteDistrict($id)
{
     $district = District::find($id);
     $district->delete();
     return redirect('district/add-distric-page')->with('msg','District Delete Successfully');
}












}//Controller 
