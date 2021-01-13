<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashController extends Controller
{
    public function index(){

        if(Auth::user()->nivel == 'cliente'){
            return redirect('/');
        }
        return view('index');
    }
}
