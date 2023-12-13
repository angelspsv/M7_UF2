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

    public function centres(){
        //creem l'array d'arrays associatius amb la info hardcodejada
        $totsCentres = array(
            array("id"=>"1",
                "name"=>"Institut TIC de Barcelona",
                "address"=>"C/de Sancho de Ávila,133",
                "cp"=>"08018",
                "city"=>"Barcelona"
            ),
            array("id"=>"2",
                "name"=>"Jaume Balmes",
                "address"=>"C/Diputació,150",
                "cp"=>"08013",
                "city"=>"Barcelona"
            )
        );
                       
        // return view('Admin.admin')->with(['result'=>'Aqui es mostraran els centres que el rol admin pot veure']);
        return view('Admin.centres')-> with('totsCentres',$totsCentres);// retorna la vista amb l'array 
    }

    public function alumnat(){
        //creem l'array d'arrays associatius amb la info hardcodejada
        $totsAlumnes = array(
            array("id"=>"1",
                "name"=>"Carles",
                "surname"=>"Canals",
                "rol"=>"Alumne",
                "email"=>"c@rles.com"
            ),
            array("id"=>"2",
                "name"=>"Sofia",
                "surname"=>"Taraco",
                "rol"=>"Alumne",
                "email"=>"sofi@tar.com"
            ),
            array("id"=>"3",
                "name"=>"Francesc",
                "surname"=>"Riugal",
                "rol"=>"Alumne",
                "email"=>"fran@riu.com"
            ),
            array("id"=>"4",
                "name"=>"Laia",
                "surname"=>"Manresa",
                "rol"=>"Alumne",
                "email"=>"laia@manresa.com"
            ),
        );
                       
        return view('Admin.alumnat')-> with('totsAlumnes',$totsAlumnes);// retorna la vista amb l'array 
    }

    public function professorat(){
        //creem l'array d'arrays associatius amb la info hardcodejada
        $totsProfes = array(
            array("id"=>"1",
                "name"=>"Roger",
                "surname"=>"Sobrino",
                "rol"=>"Professor",
                "email"=>"roger@roger.com"
            ),
            array("id"=>"2",
                "name"=>"Sofia",
                "surname"=>"Taraco",
                "rol"=>"Professora",
                "email"=>"sofia@taraco.com"
            ),
            array("id"=>"3",
                "name"=>"Pere",
                "surname"=>"Guitart",
                "rol"=>"Professor",
                "email"=>"pere@guitard.com"
            ),
            array("id"=>"4",
                "name"=>"Oriol",
                "surname"=>"Xisco",
                "rol"=>"Professor",
                "email"=>"oriol@xisco.com"
            ),
        );
                       
       
        return view('Admin.professorat')-> with('totsProfes',$totsProfes);// retorna la vista amb l'array 
    }
}
?>