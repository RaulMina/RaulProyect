<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'VEHICULO')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
    <center>
        <h1>VEHICULO</h1>
        <img class="logo_banner" src="../../img/LO1.png" alt="Image 2">
    </center>
</div>
<br>
<form method="POST"  action="{{route('buscarvh')}}" >
    @csrf
    <div class="form-group">

        <input type="text" name="filtro_nombre" placeholder="Placa"class="form-control" >
    </div>

    <!-- Agrega más campos de filtro según tus necesidades -->
    <button type="submit" class="btn btn-info">Buscar</button>
</form>
<a href="{{route('vehiculos.create')}} " class="btn btn-primary">Crear Vehiculo</a>
@if(session('user')->rol==2)
<div class="container ">
    <table class="table boder_bar btn_modulos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo Vehiculo</th>
                <th>Placa</th>
                <th>Chasis</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Motor</th>
                <th>Kilometraje</th>
                <th>Cilindraje</th>
                <th>Capacidad Carga</th>
                <th>Capacidad Pasajeros</th>
                <th>Id de Usuario que lo creo</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato['id'] }}</td>
                <td>{{ $dato['tipo_vehiculo'] }}</td>
                <td>{{ $dato['placa'] }}</td>
                <td>{{ $dato['chasis'] }}</td>
                <td>{{ $dato['marca'] }}</td>
                <td>{{ $dato['modelo'] }}</td>
                <td>{{ $dato['motor'] }}</td>
                <td>{{ $dato['kilometraje'] }}</td>
                <td>{{ $dato['cilindraje'] }}</td>
                <td>{{ $dato['capacidad_carga'] }}</td>
                <td>{{ $dato['capacidad_pasajeros'] }}</td>
                <td>{{ $dato['id_usuario'] }}</td>
                <td><a class="btn btn-primary" href="{{route('vehiculos.edit',$dato['id'])}}">Editar</a></td>
                <td>
                    <form id="deleteForm" action="{{route('vehiculos.destroy',$dato['id'])}}" method="POST">
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
