<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    public function inicio(){
        return view('welcome');
    }
    public function hello() {
        return 'Hello World';
    }
}
