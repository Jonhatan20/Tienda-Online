<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
use App\Models\Producto;

class IndexController extends Controller
{
    public function index(){
        $prods=\DB::table("productos")
            ->select("productos.*")
            ->orderBy('id','DESC')
            ->take(30)
            ->get();
  
  
        return view('index')
        ->with('prods',$prods);
      }
    
}
