<?php

namespace App\Http\Controllers;
use App\Models\Circuito;
use Illuminate\Http\Request;
use Exception;


class CircuitoController extends Controller
{
    public function index()
    {
        try {
        $datos = Circuito::all();
        return view('circuitos.index', compact('datos'));
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }




    public function create()
    {
        try {
        return view('circuitos.create');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }


    }
    public function store(Request $request){
        try {
       if( Circuito::create($request->all())){
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
        $datos = Circuito::findOrFail($id);
        return view('circuitos.edit', compact('datos'));
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }

// esta funcion actualiza los datos en la base d
    public function update(Request $request, $id)
    {
        try {
        $dato = Circuito::findOrFail($id);
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
        $dato =  Circuito::findOrFail($id);
        $dato->delete();
        return redirect()->route('circuitos.index');
    } catch (Exception $e) {
        return   redirect()->back()->with('error', 'Error al Cargar');
        }
    }

}
