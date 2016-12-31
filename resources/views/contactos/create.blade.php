@extends('layout')

@section('content')

<div class="row">
    <div class="col-lg-12">
    </div>
    <!-- /.col-lg-12 -->
</div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            Ingrese los datos del Contacto
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="/alumnos" autocomplete="off">
                                        <div class="form-group">
                                            <label>IdContacto</label>
                                            <input type="text" class="form-control" name="idcontacto" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">

                                        </div>
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" placeholder="Abel Gabriel" name="nombres">
                                        </div>
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" placeholder="Zapata Ttito" name="apellidos" style="text-transform:uppercase;" onkeyup="javascript:this.value=this.value.toUpperCase();">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="nombre@email.com" name="email" >
                                        </div>


                                        <button type="submit" class="btn btn-success">Guardar</button>
                                        <button type="reset" class="btn btn-warning">Limpiar</button>
                                        <button type="button" class="btn btn-danger"
                                        onClick="location.href='/contacto'">Volver</button>
                                    </form>
                                </div>
@stop
