<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $no = 2;
        $names  = ['Ahad','Mosa','Hanzla'];
        return view ('welcome' ,compact ('names','no') );
    }
}
