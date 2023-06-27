

<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'USUARIOS')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
<center>
<h1>USUARIOS</h1>
<img class="logo_banner"src="../../img/LO1.png" alt="Image 2">
</center>
</div>

<a href="{{route('usuarios.create')}} " class="btn btn-primary">Crear Usuario</a>
@if(session('user')->rol==2)
<div class="container ">
<table class="table boder_bar btn_modulos">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Usuario</th>
      <th>Rol</th>
      <th>Editar</th>
      <th>Eliminar</th>
    </tr>
  </thead>
  <tbody>
    @foreach($datos as $dato)
    <tr>
      <td>{{ $dato['id'] }}</td>
      <td>{{ $dato['nombre_apellido'] }}</td>
      <td>{{ $dato['correo'] }}</td>
      <td>{{ $dato['usuario'] }}</td>
      <td>{{ $dato['rol'] }}
            @if($dato['rol']==2)
            Tecnico Administrativo
            @endif
            @if($dato['rol']==1)
            Tecnico Auxiliar
            @endif
            @if($dato['rol']==0)
            Usuario
            @endif
      </td>
      <td><a  class="btn btn-primary" href="{{route('usuarios.edit',$dato['id'])}}">Editar</a></td>
      <td>
        <form id="deleteForm" action="{{route('usuarios.destroy',$dato['id'])}}" method="POST">
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
