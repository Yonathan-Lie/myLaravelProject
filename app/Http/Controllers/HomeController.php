<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        return view('pages/welcome');
    }

    public function pagetwo()
    {
        return view('pages/pagetwo');
    }
}
