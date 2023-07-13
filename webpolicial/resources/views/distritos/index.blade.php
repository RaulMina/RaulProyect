


<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'DISTRITOS')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
<center>
<h1>DISTRITOS</h1>
<img class="logo_banner"src="../../img/LO1.png" alt="Image 2">
</center>
</div>
<br>
<form method="POST"  action="{{route('buscardis')}}" >
    @csrf
    <div class="form-group">

        <input type="text" name="filtro_nombre" placeholder="Codigo de Distrito"class="form-control" >
    </div>

    <!-- Agrega más campos de filtro según tus necesidades -->
    <button type="submit" class="btn btn-info">Buscar</button>
</form>
<a href="{{route('distritos.create')}} " class="btn btn-primary">Crear Distrito</a>
@if(session('user')->rol==2)
<div class="container ">
<table class="table boder_bar btn_modulos">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre de distrito</th>
      <th>Codigo de distrito</th>
      <th>Numero de distrito</th>
      <th>Id de Usuario que lo creo</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <td>{{ $dato['id'] }}</td>
      <td>{{ $dato['nombre_distrito'] }}</td>
      <td>{{ $dato['codigo_distrito'] }}</td>
      <td>{{ $dato['numero_distrito'] }}</td>
      <td>{{ $dato['id_usuario'] }}</td>
      <td><a  class="btn btn-primary" href="{{route('distritos.edit',$dato['id'])}}">Editar</a></td>
      <td>
        <form id="deleteForm" action="{{route('distritos.destroy',$dato['id'])}}" method="POST">
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
