<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller
{
   public function __contruct()
    {
        $this->middleware('auth');
    }
  public function index(){
    $usuarios = User::all();
    if(Auth::user()->nivel =='admin'){
      return view('cons_user')->with('usuario',$usuarios);  
    }
}
    
    public function store(Request $request){
        $validador = Validator::make($request->all(), [
            'name'=>'required|max:255|min:3',
            'ap'=>'required|max:255|min:3',
            'am'=>'required|max:255|min:3',
            'email'=>'required|email',
            'pass1'=>'required|max:255|min:5|required_with:pass2|same:pass2',
            'pass2'=>'required|max:255|min:5',
          ]);
          if($validador->fails()){
            return back()
              ->withInput()
              ->with('ErrorInsert', 'Favor de llenar todos los campos')
              ->withErrors($validador);
              
          } else {
    
            $usuario = User::create([
              'name' => $request->name,
              'ap' => $request->ap,
              'am' => $request->am,
              'img_perfil'=> 'default.jpg',
              'nivel'=> 'cliente',
              'email' => $request->email, 
              'password' =>Hash::make($request->pass1),
            ]);
            $usuario->save();
            return view('auth.login')->with('usuario',$usuario);
            return back()->with('Listo','Se ha insertado correctamente');
          }
    }
    public function edit(Request $request)
      {
        $usuario = User::find($request->id);
        $validador = Validator::make($request->all(), [
            'name'=>'required|max:255|min:3',
            'ap'=>'required|max:255|min:3',
            'am'=>'required|max:255|min:3',
            'email'=>'required|email',
            
          ]);
          if($validador->fails()){
            return back()
              ->withInput()
              ->with('ErrorInsert','Favor de llenar todos los campos')
              ->withErrors($validador);
          } else {

            $usuario->name = $request->name;
            $usuario->ap = $request->ap;
            $usuario->am = $request->am;
            $usuario->email = $request->email;
            
            $validator2 = Validator::make($request->all(),[
              'pass1'=>'required|min:5|required_with:pass2|same:pass2',
              'pass2'=>'required|min:5'
            ]);
            if(!$validator2->fails()){
            $usuario->password = Hash::make($request->pass1);   
            }
            $validator3 = Validator::make($request->all(),[
                'nivel'=>'required|min:5|max:7'
            ]);
            if(!$validator3->fails()){
                $usuario->nivel = $request->nivel;
            }

            $usuario->save();
            return back()->with('Listo','Se ha editado correctamente');
          }//llave else validator
      }//llave funcion
      public function destroy($id)
      {
        $usuario = User::find($id);
        if($usuario->img_perfil != 'default.jpg'){
          if(file_exists( public_path('users/'.$usuario->img_perfil) )){
            unlink( public_path('users/'.$usuario->img_perfil));
          }
        }
        $usuario->delete();
        return back()->with('Listo','El registro se eliminó correctamente');
      }
}
