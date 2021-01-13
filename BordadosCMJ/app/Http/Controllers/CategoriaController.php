<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function index(){

        $cates = Categoria::all();
        return view('/cons_cate',compact('cates'));
    }
    public function categorias(){
      return view('/shop',compact('categorias'));
    }
    public function store(Request $request){
        $validador = Validator::make($request->all(),[
            'nombre'=>'required|max:255|min:4',
            
        ]);
        if($validador->fails()){
            return back()->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validador);
          } else {

            $cate = Categoria::create([
              'nombre'=>$request->nombre,
            ]);
            $cate->save();
            return back()
              ->with('Listo','Se ha insertado correctamente');
          }
    }
    public function edit(Request $request)
      {
        $cate = Categoria::find($request->id);
        $validador = Validator::make($request->all(), [
            'nombre'=>'required|max:255|min:3',
            
          ]);
          if($validador->fails()){
            return back()
              ->withInput()
              ->with('ErrorInsert','Favor de llenar todos los campos')
              ->withErrors($validador);
          } else {

            $cate->nombre = $request->nombre;

            $cate->save();
            return back()->with('Listo','Se ha editado correctamente');
          }//llave else validator
      }//llave funcion
    public function destroy($id)
      {
        $cate = Categoria::find($id);
        $cate->delete();
        return back()->with('Listo','El registro se eliminó correctamente');
      }
}
