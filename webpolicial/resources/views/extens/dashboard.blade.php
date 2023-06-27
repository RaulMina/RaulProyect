<!-- DESPLEGANDO TODA LA PLATILLA REALIZADA--->
@extends('layouts.app')

<!-- DESPLEGANDO EL TITULO DE ESTA PAGINA-->
@section('title', 'POLICIA NACIONAL')

<!-- DESPLEGANDO TODO EL CONTENIDO DE ESTA PAGINA--->
@section('content')
<div class="containe  page_style">
<center>
<h2>PANEL DE CONTROL</h2>
<img class="logo_banner"src="img/LO1.png" alt="Image 2">
</center>
<style>
.square-button {
  display: inline-block;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  color: #000000;
  background-color: white;
  border: 1px solid #000000;
  border-radius: 0;
  cursor: pointer;
}
</style>

<div class="container">
  <div class="row">

  <?php  $user = session('user') ?>
  <?php  if ($user->__get('rol') >= 2)
  {?>
    <div class="col-sm square-button">
    <a href="{{route('usuarios.index')}}" class="btn_modulos">USUARIOS</a>
    </div>
    <div class="col-sm square-button">
    <a href="{{route('distritos.index')}}" class="btn_modulos">DISTRITO</a>
    </div>
    <div class="col-sm square-button">
    <a href="{{route('circuitos.index')}}" class="btn_modulos">CIRCUITOS</a>
    </div>
    <div class="col-sm square-button">
    <a href="" class="btn_modulos">SUBDISTRITOS </a>
    </div>
  <?php }?>
  <?php  if ($user->__get('rol') >= 0)
  {?>
    <div class="col-sm square-button">
    <a href="distrito" class="btn_modulos">REPORTES</a>
    </div>
    <?php }?>
    <?php  if ($user->__get('rol') >=1)
  {?>
    <div class="col-sm square-button">
    <a href="distrito" class="btn_modulos">DOCUMENTOS</a>
    </div>
    <?php }?>
  </div>
</div>
</div>
@endsection



