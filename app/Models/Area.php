<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;
    protected $fillable = ['areaName','publicationStatus'];

    public static function saveAreaInfo($request) 
    {
        $area = new Area();
        $area->areaName             = $request->areaName;
        $area->publicationStatus    = $request->publicationStatus;
        $area->save();
    }









}//MOdel
