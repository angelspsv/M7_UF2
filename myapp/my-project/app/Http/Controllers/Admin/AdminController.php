<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuaris(Request $request){
        $email_true = "marta@lopez.cat";
        $passwordHardCoded = "12345678";
        $emailRebut = $request->input('email');
        $passwdRebuda= $request->input('password');
        if ($email_true == $emailRebut && $password_true == $passwdRebuda){
         return view('Admin.admin');
        } else {
         return view('signin');
        }
     }
 
     public function usuarisget(){
         return view ('Admin.admin');
     }
}
