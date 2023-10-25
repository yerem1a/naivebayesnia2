<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function showBeranda(){
        return view('welcome');
    }
}
