<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function show()
        {
           $characters = [
             'Test1' => 'Test2',
           ];

           return view('home')->withCharacters($characters);
        }
}

