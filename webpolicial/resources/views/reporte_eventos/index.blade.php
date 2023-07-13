<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'DEPENDENCIA')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
    <center>
        <h1>DEPENDENCIA</h1>
        <img class="logo_banner" src="../../img/LO1.png" alt="Image 2">
    </center>
</div>
<br>
<form method="POST"  action="{{route('buscarreport')}}" >
    @csrf
    <div class="form-group">


        <input type="text" name="filtro_nombre" placeholder="Nombre "class="form-control" >
    </div>

    <!-- Agrega más campos de filtro según tus necesidades -->
    <button type="submit" class="btn btn-info">Buscar</button>
</form>
<a href="{{route('reporte_eventos.create')}} " class="btn btn-primary">Crear Reporte</a>
<a href="{{route('reportes')}} " class="btn btn-danger">Reporte</a>
@if(session('user')->rol==2)
<div class="container ">
    <table class="table boder_bar btn_modulos">
        <thead>
            <tr>
                <th>ID</th>
                <th>Apellidos</th>
                <th>Nombres</th>
                <th>Contacto</th>
                <th>Tipo</th>
                <th>....Detalle....</th>
                <th>Circuito</th>
                <th>No.Circuito</th>
                <th>Co.Circuito</th>
                <th>Subcircuito</th>
                <th>No.Subcircuito</th>
                <th>Co.Subcircuito</th>
                <th>Fecha registro</th>
                <th>Fecha Actualizadas</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($datos as $dato)
            <tr>
                <td>{{ $dato['id'] }}</td>
                <td>{{ $dato['apellidos'] }}</td>
                <td>{{ $dato['nombres'] }}</td>
                <td>{{ $dato['contacto'] }}</td>
                <td>{{ $dato['tipo'] }}</td>
                <td>{{ $dato['detalle'] }}</td>
                <td>{{ $dato->Circuito['nombre_circuito'] }}</td>
                <td>{{ $dato->Circuito['numero_circuito'] }}</td>
                <td>{{ $dato->Circuito['codigo_circuito'] }}</td>
                <td>{{ $dato->Subcircuito['nombre_subcircuito'] }}</td>
                <td>{{ $dato->Subcircuito['numero_subcircuito'] }}</td>
                <td>{{ $dato->Subcircuito['codigo_subcircuito'] }}</td>
                <td>{{ $dato['created_at'] }}</td>
                <td>{{ $dato['updated_at'] }}</td>
                <td><a class="btn btn-primary" href="{{route('reporte_eventos.edit',$dato['id'])}}">Editar</a></td>
                <td>
                    <form id="deleteForm" action="{{route('reporte_eventos.destroy',$dato['id'])}}" method="POST">
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
