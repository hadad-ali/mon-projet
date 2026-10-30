<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function afficherList()
    {
        // recuperer la liste des users depuis la BD
        $users =  User::all();
        // dd($users);
        return view("users.list"
        ,
        compact('users'));
    }
}
