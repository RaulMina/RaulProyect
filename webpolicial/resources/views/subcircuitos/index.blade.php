<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'SUBCIRCUITO')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
    <center>
        <h1>SUBCIRCUITOS</h1>
        <img class="logo_banner" src="../../img/LO1.png" alt="Image 2">
    </center>
</div>
<style>


</style>
<br>
<form method="POST"  action="{{route('buscarsubc')}}" >
    @csrf
    <div class="form-group">

        <input type="text" name="filtro_nombre" placeholder="Codigo de Circuito"class="form-control" >
    </div>

    <!-- Agrega más campos de filtro según tus necesidades -->
    <button type="submit" class="btn btn-info">Buscar</button>
</form>
<a href="{{route('subcircuitos.create')}} " class="btn btn-primary">Crear Subcircuito</a>
@if(session('user')->rol==2)
<div class="container ">
    <table class="table boder_bar btn_modulos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre de circuito</th>
                <th>Codigo de circuito</th>
                <th>Numero de circuito</th>
                <th>Id de Usuario que lo creo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato['id'] }}</td>
                <td>{{ $dato['nombre_subcircuito'] }}</td>
                <td>{{ $dato['codigo_subcircuito'] }}</td>
                <td>{{ $dato['numero_subcircuito'] }}</td>
                <td>{{ $dato['id_usuario'] }}</td>
                <td><a class="btn btn-primary" href="{{route('subcircuitos.edit',$dato['id'])}}">Editar</a></td>
                <td>
                    <form id="deleteForm" action="{{route('subcircuitos.destroy',$dato['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"onclick="confirmDelete(event)">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $datos->links() }}
</div>
@endif


@endsection
