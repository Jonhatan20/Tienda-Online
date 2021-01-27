<?php

namespace App\Http\Controllers;

use App\Models\Mensaje;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactoController extends Controller
{
    public function index(){
        return view('/contacto');
    }
    public function store(Request $request){
        $validador = Validator::make($request->all(),[
            'nombre'=>'required|max:255|min:4',
            'mensaje'=>'required|max:255|min:4',
            'correo'=>'required|email',
    ]);
    if($validador->fails()){
        return back()->withInput()
        ->with('ErrorInsert', 'Favor de llenar todos los datos')
        ->withErrors($validador);
      } else {

        $msj = Mensaje::create([
            'nombre'=>$request->nombre,
            'correo'=>$request->correo,
            'mensaje'=>$request->mensaje,
        ]);
        $msj->save();
        return back()
          ->with('Listo','Se ha enviado satisfactoriamente');
        }
    }
}