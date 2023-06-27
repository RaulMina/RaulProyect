<?php

namespace App\Http\Controllers;

use App\Models\Distrito;
use Illuminate\Http\Request;
use Exception;
use App\Models\Usuario;
class DsitritoController extends Controller
{
    public function index()
    {
        try {
        $datos = Distrito::all();
        return view('distritos.index', compact('datos'));
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }




    public function create()
    {
        try {
        return view('distritos.create');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }


    }
    public function store(Request $request){
        try {
       if( Distrito::create($request->all())){
        return   redirect()->back()->with('error', 'Creado con exito');
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
        $datos = Distrito::findOrFail($id);
        return view('distritos.edit', compact('datos'));
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }

// esta funcion actualiza los datos en la base d
    public function update(Request $request, $id)
    {
        try {
        $dato = Distrito::findOrFail($id);
        if($dato->update($request->all())){
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
        $dato =  Distrito::findOrFail($id);
        $dato->delete();
        return redirect()->route('distritos.index');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }


}
