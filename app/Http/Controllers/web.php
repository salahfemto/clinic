<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Patient;
use App\Models\Date;

class web extends Controller
{
   
   public function home(Request $request){

      return view("home", [
         "user"=>User::where("id", $request->session()->get("user"))->get()[0],
         "pnum"=>Patient::count(),
         "todaydates"=>Date::where("date", date("Y-m-d"))->count(),
         "todaydatesinfo"=>Date::where("date", date("Y-m-d"))->where("info", "!=", "")->count(),
         "todaydatesnotinfo"=>Date::where("date", date("Y-m-d"))->where("info", "")->count(),
      ]);

   }

   public function login(Request $request){

      return view('login');
      
   }

   public function login_post(Request $request){

      $username = filter_var($request->username, FILTER_SANITIZE_STRING);
      $password = sha1($request->password);

      $check = User::where("username", $username)->where("password", $password);

      $count = $check->count();

      if($count > 0){

         $request->session()->put("user", $check->get()[0]->id);

         return redirect('/');

      }else{

         return redirect()->back()->with("error", "عفواً، كلمة المرور غير صحيحة.");

      }

   }

   public function logout(Request $request){

      $request->session()->forget("user");

      return redirect('/');
      
   }

   public function add(Request $request){

      return view("add", [
         "user"=>User::where("id", $request->session()->get("user"))->get()[0]
      ]);

   }

   public function add_post(Request $request){

      $create = Patient::create([
         "name"=>$request->name,
         "phone"=>$request->phone,
         "address"=>$request->address,
         "age"=>$request->age,
         "create_date"=>date("Y-m-d"),
         "notes"=>$request->notes,
         "added_by"=>$request->session()->get("user")
      ]);

      $last_id = Patient::orderby("id", "desc")->limit(1)->get()[0]->id;

      if($create){

         return redirect()->back()->with("success", "تم إضافة المريض بنجاح. <a class='btn btn-primary' href='add-date?p_id=$last_id'>إضغط هنا لحجز موعد له</a>.");

      }

   }

   public function add_date(Request $request){

      if(isset($_GET['p_id'])){

         $patients = Patient::where("id", $_GET['p_id'])->orderby("id", "desc")->get();

      }else{

         $patients = Patient::orderby("id", "desc")->get();
         
      }

      return view("add-date", [
         "user"=>User::where("id", $request->session()->get("user"))->get()[0],
         "patients"=>$patients
      ]);

   }

   public function add_date_post(Request $request){

      $count = Date::where("date", $request->date)->count();

      if($count == 0){
         $number = 1;
      }else{
         $number = $count + 1;
      }

      $create = Date::create([
         "p_id"=>$request->p_id,
         "d_id"=>1,
         "date_number"=>$number,
         "notes"=>$request->notes,
         "date"=>$request->date,
         "time"=>$request->time,
         "type"=>$request->type,
         "money"=>$request->money,
         "adddate"=>date("Y-m-d")
      ]);

       return redirect()->back()->with("success", "تم إضافة الحجز بنجاح. <br><br> رقم الحجز: $number");

   }

   public function view(Request $request){


      $patients = Patient::orderby("id", "desc")->get();

      return view("view", [
         "user"=>User::where("id", $request->session()->get("user"))->get()[0],
         "patients"=>$patients
      ]);

   }

   public function view_today(Request $request){

      $dates = Date::where("date", date("Y-m-d"))->orderby("time", "ASC")->get();

      return view("view-today", [
         "user"=>User::where("id", $request->session()->get("user"))->get()[0],
         "dates"=>$dates
      ]);

   }

   public function getInfo($id){

      return Date::where("id", $id)->get()[0]->info;

   }

   public function add_info(Request $request){

      Date::where("id", $request->id)->update(["info"=>$request->info]);

      return redirect()->back()->with("success", "تم التشخيص بنجاح.");

   }

   public function patient($id, Request $request){

      $dates = Date::where("p_id", $id)->orderby("id", "DESC")->get();

      return view("patient", [
         "user"=>User::where("id", $request->session()->get("user"))->get()[0],
         "dates"=>$dates,
         "patient"=>Patient::where("id", $id)->get()[0]
      ]);

   }
   
}