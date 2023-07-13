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
<button onclick="imprimirDiv()" class="btn btn-success">Imprimir Reporte</button>

    <script>
        function imprimirDiv() {
            var contenidoDiv = document.getElementById("reportid").innerHTML;
            var ventanaImpresion = window.open('', '', 'width=800,height=600');
            ventanaImpresion.document.write('<html><head><title>Imprimir Div</title></head><body>');
            ventanaImpresion.document.write(contenidoDiv);
            ventanaImpresion.document.write('</body></html>');
            ventanaImpresion.document.close();
            ventanaImpresion.print();
        }
    </script>
@if(session('user')->rol==2)
<div class="container ">

    <form action="{{ route('buscarrepfech') }}" method="POST">
        @csrf
        <label for="fecha_inicial">Fecha Inicial:</label>
        <input type="datetime-local"  name="fecha_inicial" id="fecha_inicial" value="{{ date('Y-m-d\TH:i:s', strtotime('2023-07-0 23:59:59')) }}">
        <label for="fecha_final">Fecha Final:</label>

        <input type="datetime-local" name="fecha_final" id="fecha_final" value="{{ date('Y-m-d\TH:i:s', strtotime('2023-07-31 23:59:59')) }}">

        <button type="submit" class="btn btn-secondary" >Mostrar Reporte</button>
    </form>
<div class="container pdfrepor" id="reportid">
    <table class="table boder_bar btn_modulos">
        <thead>
            <tr>
                <th>Fecha Nincial</th>
                <th>Fecha Final</th>
                <th>#</th>
                <th>Tipo</th>
                <th>Circuito</th>
                <th>Subcircuito</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $registro)
                <tr>
                    <td>{{ $fechaInicial }}</td>
                    <td>{{ $fechaFinal }}</td>
                    <td>{{ $registro->total }}</td>
                    <td>{{ $registro->tipo }}</td>
                    <td>{{ $registro->Circuito->nombre_circuito }}</td>
                    <td>{{ $registro->Subcircuito->nombre_subcircuito}}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

</div>

</div>
@endif


@endsection
