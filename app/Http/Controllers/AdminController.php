<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return 'Admin Home';
    }
    public function image(Request $request)
    {
        return dd ($request);
        return 'Admin Home';
    }

}
