<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    function index(){
         $this->data['name'] = "Hello world";
          return view('login.index',$this->data);
    }
}
