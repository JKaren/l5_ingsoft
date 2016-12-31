@extends('layout')

@section('estilos')

    {!!Html::style('css/dataTables.bootstrap.css')!!}
    {!!Html::style('css/dataTables.responsive.css')!!}
@stop

@section('content')

    <div class="row">
        <div class="col-lg-12">
          <h3 class="page-header">Relacion de Contactos
              <button type="button" onClick = "location.href='contacto/create'">Nuevo</button>
          </h3>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="dataTable_wrapper">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                    <th>IdContacto</th>
                                    <th>Nombres</th>
                                    <th>Email</th>
                                    <th>Operaciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contactos as $contacto)
                                  <tr class = "odd gradeX">
                                    <td>{{$contacto->idcontacto}}</td>
                                    <td>{{$contacto->apellidos}}-{{$contacto->nombres}}</td>
                                    <td>{{$contacto->email}}</td>
                                    <td>
                                      <a href="contacto/{{ $contacto->idcontacto}}">VER</a> -
                                      <a href="contacto/{{ $contacto->idcontacto}}">EDITAR</a> -
                                      <form  action="contacto/{{$contacto->idcontacto}}" method="post">
                                        {{csrf_field()}}
                                        {{method_field('DELETE')}}
                                        <button  type = "button" class = "btn btn-danger" >ELIMINAR</button>
                                      </form>
                                    </td>
                                  </tr>
                               @endforeach
                            </tbody>
                        </table>
                        {{$contactos->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    {!!Html::script('js/jquery.dataTables.min.js')!!}
    {!!Html::script('js/dataTables.bootstrap.min.js')!!}
@stop

@section('jsope')

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

@stop
