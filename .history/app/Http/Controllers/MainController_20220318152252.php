<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //Methode pour la page d'accueuil

    public function home(){
        echo "Bonjour";
    }
}
