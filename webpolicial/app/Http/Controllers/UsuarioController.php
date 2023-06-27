<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Usuario;
use Exception;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\HelpFuntionController;
class UsuarioController extends Controller
{

    public function Index()
    {
         try {
            $this->sessionstar();
                $datos = Usuario::all();
                return view('usuarios.index', compact('datos'));


          } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
         }
    }
    public  function Sessionstar(){
        if (empty(session('user'))) {
            return redirect()->route('home');
        }
    }
  // Esta funcion llama a la vista crear usuarios

// esta funcion llama a la creacion de un registro nuevo desde la seccion de registrar usuarios
    public function Registrar_usuario(Request $request){
        try {

            $user = new Usuario();
            $user->nombre_apellido =$request->input('nombre_apellido');
            $user->correo =$request->input('correo');
            $user->usuario =$request->input('usuario');
            $user->rol =$request->input('rol');
            $user->clave = Hash::make($request->input('clave'));

            if ($user->save()) {
                return redirect()->back()->with('error', 'Creado con éxito');
            }

        return   redirect()->back()->with('error', 'Error al Crear');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar '.$e);
         }
    }
    public function Login(Request $request)
    {
        try {
        $correo = $request->input('correo');
        $clave = $request->input('clave');

        // Busca el usuario en la base de datos
        $user = Usuario::where('correo', $correo)->first();

        // Verifica si se encontró un usuario y si la contraseña es correcta

       if ($user && Hash::check($clave, $user->clave)) {
            // Inicia la sesión para el usuario
            session(['user' => $user]);

            // Redirecciona a la página de inicio después del inicio de sesión exitoso
            return redirect()->route('dashboard');
        }
        // Si las credenciales son inválidas, redirecciona de vuelta al formulario de inicio de sesión con un mensaje de error
        return redirect()->back()->with('error', 'Credenciales inválidas');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
         }

    }





    public function create()
    {
        try {
        return view('usuarios.create');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }


    }
    public function store(Request $request){
        try {
            $user = new Usuario();
            $user->nombre_apellido =$request->input('nombre_apellido');
            $user->correo =$request->input('correo');
            $user->usuario =$request->input('usuario');
            $user->rol =$request->input('rol');
            $user->clave = Hash::make($request->input('clave'));

            if ($user->save()) {
                return redirect()->back()->with('error', 'Creado con éxito');
            }


       return   redirect()->back()->with('error', 'Error al Crear');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }
// esta funcion llama a la vista editar
    public function edit($id)
    {
        try {
        $datos = Usuario::findOrFail($id);
        return view('usuarios.edit', compact('datos'));
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }

// esta funcion actualiza los datos en la base d
    public function update(Request $request, $id)
    {
        try {
        $user =Usuario::findOrFail($id);
        $user->nombre_apellido =$request->input('nombre_apellido');
        $user->correo =$request->input('correo');
        $user->usuario =$request->input('usuario');
        $user->rol =$request->input('rol');
        $clave=$request->input('clave');
        if($user && Hash::check($clave, $user->clave)){
            $user->clave = $request->input('clave');
        }else{
            $user->clave = Hash::make($request->input('clave'));
        }

        if($user->save()){
            return   redirect()->back()->with('error', 'Actualizado con exito');
        }
        return   redirect()->back()->with('error', 'Error al Actualizar');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }

// esta funcion elimina datos de la tabla
    public function destroy($id)
    {
        try {
        $dato = Usuario::findOrFail($id);
        $dato->delete();
        return redirect()->route('usuarios.index');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }

    // login
// esta funcion realiza una verificacion y un login





}
