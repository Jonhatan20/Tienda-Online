<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Reg_LogController extends Controller
{
    public function index(){
        return view('registro');
    }
    public function store(){
        return view('iniciarSesion');
    }
}
