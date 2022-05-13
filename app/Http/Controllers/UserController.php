<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }
    
    public function connexion()
    {
        return view('user.connexion');
    }

    public function create()
    {
        return view('user.create');
    }
}
