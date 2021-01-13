<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\ProductoVenta;

class TiendaController extends Controller
{
    public function index(){
        $prods = Producto::all();
        $cates = Categoria::all();
        return view('shop', compact('prods', 'prods','cates'));
    }
    public function detallesProducto($id){
        $prods = Producto::find($id);
        return view('prod_detalles',compact('prods'));
    }
    public function carrito(){
        return view('carritoCompras');
    }
    public function agregarCarrito($id)
    {
    //LOGICA PARA AGREGAR PRODUCTO
        $prods = Producto::find($id);
        $carritoCompras = session()->get('carritoCompras');

        //si el carrito esta vacío, entonces este es el primer producto
        if($carritoCompras){
            $carritoCompras = [
                $id=> [
                    "nombre" => $prods->nombre,
                    "cantidad" => 1,
                    "precio" => $prods->precio,
                    "imagen" => $prods->imagen,
                ]
            ];
            session()->put('carritoCompras', $carritoCompras);
            
            return back()->with('success', 'Producto agregado al carrito satisfactoriamente');
        }
        //si el carrito no esta vacío, entonces checar si este productos existe, entonces incrementar la cantidad
        if(isset($carritoCompras[$id])){

            $carritoCompras[$id]['cantidad']++;
            
            session()->put('carritoCompras', $carritoCompras);

            return back()->with('success', 'Producto agregado al carrito satisfactoriamente');
        }
            //si el item no existe en el carrito, entonces agregarlo con la cantidad igual a 1
            $carritoCompras[$id] = [
                "nombre" => $prods->nombre,
                "cantidad" => 1,
                "precio" => $prods->precio,
                "imagen" => $prods->imagen,
            ];
            session()->put('carritoCompras', $carritoCompras);

            return back()->with('success', 'Producto agregado al carrito satisfactoriamente');
        
    }
}