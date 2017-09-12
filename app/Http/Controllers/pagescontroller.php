<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function getindex()
    {
        return view('welcome');
    }
}
