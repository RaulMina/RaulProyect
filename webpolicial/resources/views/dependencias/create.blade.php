<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'CREAR DEPENDENCIA')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
    <center>
        <h1>CREAR DEPENDENCIA</h1>
        <img class="logo_banner" src="../img/LO1.png" alt="Image 2">
    </center>


<div class="container">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">

                    <div class="card-body">
                        @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form method="POST" action="{{route('dependencias.store')}}">
                            @csrf

                            <div class="form-group">
                                <label for="provincia">Selecciona una Provincia:</label>
                                <select class="form-control" id="provincia" name="provincia">

                                    <option value="LOJA">LOJA</option>


                                </select>
                            </div>
                            <div class="form-group">
                                <label for="parroquia">Selecciona una Parroquia:</label>
                                <select class="form-control" id="parroquia" name="parroquia">

                                    <option value="LOJA">LOJA</option>
                                    <option value="VILCABAMBA (VICTORIA)">VILCABAMBA (VICTORIA)</option>
                                    <option value="QUINARA">QUINARA</option>
                                    <option value="MALACATOS (VALLADOLID)">MALACATOS (VALLADOLID)</option>
                                    <option value="CHUQUIRIBAMBA">CHUQUIRIBAMBA</option>
                                    <option value="TAQUIL (MIGUEL RIOFRIO)">TAQUIL (MIGUEL RIOFRIO)</option>
                                    <option value="EL TAMBO">EL TAMBO</option>
                                    <option value="CATAMAYO (LA TOMA)">CATAMAYO (LA TOMA)</option>
                                    <option value="ZAMBI">ZAMBI</option>
                                    <option value="SAN PEDRO DE LA BENDITA">SAN PEDRO DE LA BENDITA</option>
                                    <option value="CHAGUARPAMBA">CHAGUARPAMBA</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_distrito">Selecciona un Distrito:</label>
                                <select class="form-control" id="id_distrito" name="id_distrito">
                                    @foreach($datos['Distrito'] as $dato)
                                    <option value="{{ $dato->id }}">{{ $dato->nombre_distrito}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_circuito">Selecciona un Circuito:</label>
                                <select class="form-control" id="id_circuito" name="id_circuito">
                                    @foreach($datos['Circuito'] as $dato2)
                                    <option value="{{ $dato2->id }}">{{ $dato2->nombre_circuito}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_subcircuito">Selecciona un Subcircuito:</label>
                                <select class="form-control" id="id_subcircuito" name="id_subcircuito">
                                    @foreach($datos['Subcircuito'] as $dato3)
                                    <option value="{{ $dato3->id }}">{{ $dato3->nombre_subcircuito}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <?php  $user = session('user') ?>
                            <div class="form-group">

                                <input type="hidden" id="id_usuario" name="id_usuario" class="form-control" value="<?php echo $user->__get('id');?>"required style="display: none;"readonly>
                            </div>

                            <button type="submit" class="btn btn-primary">Crear</button>
                        </form>
                        <a href="{{route('dependencias.index')}}" class="btn btn-defaul">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
@endsection
