<!--resources/views/child.blade.php-->
<!--Llamas a la plantilla padre-->
@extends('layout.app')
<!--Personalizamos el titulo-->
@section('titulo','Pagina Hija')
<!--Personalizamos la section menu observa las diferencias-->
@section('menu')
  @parent
  <p>parent -  hace que incluya el contenido del Padre</p>
  <p>Desde aqui se describe la pagina Hija.</p>
  <h1>Aqui mostramos el parametro:{{$nombre}} ;enviado desde el Route.</h1>
  <h2> Route{$nombre}-->DemoController-->child.blade</h2>
  <h3>FOR en BLADE</h3>
  @for ($i=0;$i<10;$i++)
    <li>El valor actual es:{{$i}}</li>
  @endfor
@endsection
<!--endsection - es porque definimos contenido -->
@section('contenido')
    <p>Aqui va el body de la Pagina.</p>
@endsection
