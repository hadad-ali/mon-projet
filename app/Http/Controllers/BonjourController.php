<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BonjourController extends Controller
{
    function bonjourVide()
    {
        return view('bonjour');
    }

    function bonjourNom($nom)
    {
        return view(
            'bonjour',
            compact("nom")
        );
    }

    //cmd> php artisan make:controller
    // BonjourController
    function bonjourGender($ggg, $nom)
    {
        if($ggg == "h"){
            $gender = "monsieur";
        }elseif($ggg == "f"){
            $gender = "madame";
        }else{
            $gender = "";
        }
        return view(
            'bonjour', compact(
                "gender",
                "nom"
            )
        );
    }
}
