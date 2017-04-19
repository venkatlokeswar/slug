<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

use App\UserAuth;

class LoginController extends Controller
{
    function index(){
         $this->data['name'] = 'Slug';
         return view('login.index',$this->data);
    }
    
    function getLogin(Request $request){

          $credentials = $request->only('email', 'password');

          if (Auth::attempt($credentials)) {
               return response()->json([
                   'status'=>'success'
               ]);
          }
          else{
               return response()->json([
                   'status'=>'fail',
                   'username' => Input::get('email')
               ]);
          }

    }
    
    function doRegister(){
         $user = new UserAuth;
         $user->email = "admin@ggk.com";
         $user->password = Hash::make('admin');
         $user->save();
    }
}
