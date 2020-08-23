<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\Date;

class fun extends Controller
{
   
   public static function datesNum($id){

      return Date::where("p_id", $id)->count();

   }

   public static function Pname($id){

      return Patient::where("id", $id)->get()[0]->name;

   }

}