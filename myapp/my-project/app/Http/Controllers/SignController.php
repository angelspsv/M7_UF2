<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignController extends Controller
{
    public function signin($v1, $v2, $v3, $v4){   
        return view('signin')->with(['v1' => $v1, 'v2' => $v2, 'v3' => $v3, 'v4' => $v4]);   
    }

    public function signup($v1, $v2, $v3){  
        return view('signup')->with(['v1' => $v1, 'v2' => $v2, 'v3' => $v3]);  
    }
}
?>