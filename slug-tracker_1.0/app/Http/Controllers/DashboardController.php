<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class DashboardController extends Controller
{
     function __construct() {
          
     }
     
     public function index(){
          
          $this->data['name'] = "Name";
//          print_r(\Auth::guard());
          if(\Auth::guard()){
               return view('dashboard.index',$this->data);
          }
          else{
               \Redirect::to('/')->send();
          }
     }
}
