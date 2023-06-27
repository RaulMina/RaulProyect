


<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'EDITAR USUARIO')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
<center>
<h1>USUARIOS</h1>
<img class="logo_banner"src="../../img/LO1.png" alt="Image 2">
</center>


@if(session('user')->rol==2)
<div class="container ">
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>

                        @endif

                        <form method="post" action="{{ route('usuarios.update',$datos['id']) }}">
                            @method('PUT')
                             @csrf

                            <input type="hidden" name="id" value="{{$datos['id']}}">
                            <div class="form-group">
                                <label for="nombre_apellido">Nombres y Apellidos</label>
                                <input type="text" name="nombre_apellido" id="nombre_apellido" class="form-control" value="{{$datos['nombre_apellido'] }}" required autofocus>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Nombre de Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control" value="{{$datos['usuario'] }}">
                            </div>
                            <div class="form-group">
                                <label for="correo">Email</label>
                                <input type="email" id="correo" name="correo" class="form-control" value="{{$datos['correo'] }}" required>
                            </div>

                            <div class="form-group">
                                <label for="clave">Password</label>
                                <input type="password" id="clave" name="clave" class="form-control" value="{{$datos['clave'] }}" required>
                            </div>
                            <div class="form-group">
                                <label for="rol">Selecciona una opción:</label>
                                <select class="form-control" id="rol" name="rol">
                                    @if($datos['rol']==2)
                                        <option value="2">Tecnico Administrativo</option>
                                        @endif
                                     @if($datos['rol']==1)
                                        <option value="1">Tecnico Auxiliar</option>
                                        @endif
                                     @if($datos['rol']==0)
                                        <option value="0">Usuario</option>
                                     @endif

                                    <option value="0">Usuario</option>
                                    <option value="1">Tecnico Auxiliar</option>
                                    <option value="2">Tecnico Administrativo</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                        <a href="{{route('usuarios.index')}}" class="btn btn-defaul">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




  </tbody>
</table>
</div>
</div>
@endif


@endsection
