<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function usuaris(Request $request){
        $email_true = "marta@lopez.cat";
        $password_true = "12345678";
        $email_entrada = $request->input('email');
        $passwd_entrada= $request->input('password');
        if ($email_true == $email_entrada && $password_true == $passwd_entrada){
            return view('Admin.admin');
        } else {
            return view('signin');
        }
    }
 
    public function usuarisget(){
        return view ('Admin.admin');
    }
}
?>