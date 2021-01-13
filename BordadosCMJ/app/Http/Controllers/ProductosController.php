<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use Validator;
use App\Models\Producto;

class ProductosController extends Controller
{
  
    public function index()
      {
        $prod = Producto::all();
        $categorias = Categoria::all();
        
        return view('/cons_prod', compact('prod','categorias'));
      }
    public function store(Request $request){
        $validador = Validator::make($request->all(),[
            'nombre'=>'required|max:255|min:4',
            'imagen'=>'required|image|max:900|min:3',
            'descripcion'=>'required|max:255|min:4',
            'stock'=>'required|max:255|min:1',
            'precio'=>'required|max:255|min:1',
            'talla'=>'required|max:255|min:1',
            'idCategoria'=>'required|max:255|min:1',
        ]);
        if($validador->fails()){
            return back()->withInput()
            ->with('ErrorInsert', 'Favor de llenar todos los campos')
            ->withErrors($validador);
          } else {
            //CODIGO PARA SUBIR LA IMAGEN
            $imagen = $request->file('imagen');
            $nombre = time().".".$imagen->getClientOriginalExtension();
            $destino = public_path('/prods');
            $request->imagen->move($destino,$nombre);

            $prod = Producto::create([
              'nombre'=>$request->nombre,
              'imagen'=>$nombre,
              'descripcion'=>$request->descripcion,
              'stock'=>$request->stock,
              'precio'=>$request->precio,
              'talla'=>$request->talla,
              'idCategoria'=>$request->idCategoria,
            ]);
            $prod->save();
            return back()
              ->with('Listo','Se ha insertado correctamente');
          }
    }
    public function edit(Request $request)
      {
        $prod = Producto::find($request->id);
        $validador = Validator::make($request->all(), [
            'nombre'=>'required|max:255|min:3',
            'imagen'=>'required|image|max:900|min:3',
            'descripcion'=>'required|max:255|min:4',
            'stock'=>'required|max:255|min:1',
            'precio'=>'required|max:255|min:1',
            'talla'=>'required|max:255|min:1',
            'idCategoria'=>'required',
            
          ]);
          if($validador->fails()){
            return back()
              ->withInput()
              ->with('ErrorInsert','Favor de llenar todos los campos')
              ->withErrors($validador);
          } else {
            //CODIGO PARA SUBIR LA IMAGEN
            $imagen = $request->file('imagen');
            $nombre = time().".".$imagen->getClientOriginalExtension();
            $destino = public_path('/prods');
            $request->imagen->move($destino,$nombre);
            
            $prod->nombre = $request->nombre;
            $prod->imagen = $request->imagen;
            $prod->descripcion = $request->descripcion;
            $prod->stock = $request->stock;
            $prod->precio = $request->precio;
            $prod->talla = $request->talla;
            $prod->idCategoria = $request->idCategoria;

            $prod->save();
            return back()->with('Listo','Se ha editado correctamente');
          }//llave else validator
      }//llave funcion
      public function destroy($id)
  {
    $prod = Producto::find($id);
    if($prod->imagen != 'default.jpg'){
      if(file_exists( public_path('users/'.$prod->imagen) )){
        unlink( public_path('users/'.$prod->imagen));
      }
    }
    $prod->delete();
    return back()->with('Listo','El registro se eliminó correctamente');
  }
}
