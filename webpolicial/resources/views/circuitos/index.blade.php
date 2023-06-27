<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'DISTRITOS')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
    <center>
        <h1>CIRCUITOS</h1>
        <img class="logo_banner" src="../../img/LO1.png" alt="Image 2">
    </center>
</div>

<a href="{{route('circuitos.create')}} " class="btn btn-primary">Crear Circuito</a>
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
                <td>{{ $dato['nombre_circuito'] }}</td>
                <td>{{ $dato['codigo_circuito'] }}</td>
                <td>{{ $dato['numero_circuito'] }}</td>
                <td>{{ $dato['id_usuario'] }}</td>
                <td><a class="btn btn-primary" href="{{route('circuitos.edit',$dato['id'])}}">Editar</a></td>
                <td>
                    <form id="deleteForm" action="{{route('circuitos.destroy',$dato['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"onclick="confirmDelete(event)">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endif


@endsection
