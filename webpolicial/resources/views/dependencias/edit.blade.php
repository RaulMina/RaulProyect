


<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'EDITAR CIRCUITOS')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
<center>
<h1>CIRCUITOS</h1>
<img class="logo_banner"src="../../img/LO1.png" alt="Image 2">
</center>
</div>

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

                        <form method="post" action="{{ route('dependencias.update',$matriz['depen']->id) }}">
                            @method('PUT')
                             @csrf

                            <input type="hidden" name="id" value="{{$matriz['depen']->id}}">

                            <div class="form-group">
                                <label for="provincia">Selecciona una Provincia:</label>
                                <select class="form-control" id="provincia" name="provincia">

                                    <option value="{{ $matriz['depen']->provincia}}"selected>{{ $matriz['depen']->provincia}}</option>
                                    <option value="LOJA">LOJA</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label for="parroquia">Selecciona una Parroquia:</label>
                                <select class="form-control" id="parroquia" name="parroquia">
                                    <option value="{{ $matriz['depen']->parroquia}}"selected>{{ $matriz['depen']->parroquia}}</option>
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
                                <select name="id_distrito" id="id_distrito" class="form-control">
                                    @foreach ($matriz['datos']['Distrito'] as $dato)
                                        <option value="{{ $dato->id }}"
                                            {{ $matriz['depen']->id_distrito== $dato->id ? 'selected' : '' }}>
                                            {{ $dato->nombre_distrito}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_circuito">Selecciona un Circuito:</label>
                                <select name="id_circuito" id="id_circuito" class="form-control">
                                    @foreach ($matriz['datos']['Circuito']  as $dato)
                                        <option value="{{ $dato->id }}"
                                            {{ $matriz['depen']->id_circuito == $dato->id ? 'selected' : '' }}>
                                            {{ $dato->nombre_circuito }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_subcircuito">Selecciona un Subcircuito:</label>
                                <select name="id_subcircuito" id="id_subcircuito" class="form-control">
                                    @foreach ($matriz['datos']['Subcircuito'] as $dato)
                                        <option value="{{ $dato->id }}"
                                            {{ $matriz['depen']->id_subcircuito == $dato->id ? 'selected' : '' }}>
                                            {{ $dato->nombre_subcircuito}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <?php  $user = session('user') ?>
                            <div class="form-group">

                                <input type="hidden" id="id_usuario" name="id_usuario" class="form-control" value="{{$matriz['depen']->id_usuario}}"required style="display: none;"readonly>
                            </div>
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </form>
                        <a href="{{route('dependencias.index')}}" class="btn btn-defaul">Regresar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




  </tbody>
</table>

</div>
@endif


@endsection
