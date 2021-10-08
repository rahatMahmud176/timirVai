<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['districtName','publicationStatus'];

public static function saveDistrictInfo($request)
{
    $district = new District();
    $district->districtName         =$request->districtName;
    $district->publicationStatus    =$request->publicationStatus;
    $district->save();
}
   
}//Model
