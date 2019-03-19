@extends('layouts.admin')
@section('breadcrumb')
<h1>
    Bienvenido
    <small>Sr(a). {{Auth::user()->nombres}}</small>
</h1>
<ol class="breadcrumb">
    <li class="active"><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
    <li><a>Usuarios</a></li>
</ol>
@endsection
@section('content')
<div class="alert alert-default alert-dismissible" style="background-color: #3c8dbc;font-size: 16px; color: #FFFFFF;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-info"></i> Detalles!</h4>
    Agregue usuarios al sistema y administre sus privilegios, gestione los usuarios, configure los grupos de usuarios(roles), así como también los módulos del sistema(opciones del menú principal), entre otras tareas.
</div>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">MENÚ SEGURIDAD & USUARIOS</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-4">
            <a href="{{route('modulo.index')}}" class="btn btn-info btn-raised btn-block btn-flat" style="background-color: #3c8dbc;"> MÓDULOS DEL SISTEMA</a>
        </div>
        <div class="col-md-4">
            <a href="{{route('pagina.index')}}" class="btn btn-info btn-raised btn-block btn-flat" style="background-color: #3c8dbc;"> PÁGINAS DEL SISTEMA</a>
        </div>
        <div class="col-md-4">
            <a href="{{route('grupousuario.index')}}" class="btn btn-info btn-raised btn-block btn-flat" style="background-color: #3c8dbc;"> GRUPOS DE USUARIOS(ROLES)</a>
        </div>
        <div class="col-md-4">
            <a href="{{route('grupousuario.privilegios')}}" class="btn btn-info btn-raised btn-block btn-flat" style="background-color: #3c8dbc;"> PRIVILEGIOS A PÁGINAS</a>
        </div>
        <div class="col-md-4">
            <a href="{{route('usuario.index')}}" class="btn btn-info btn-raised btn-block btn-flat" style="background-color: #3c8dbc;"> LISTAR TODOS LOS USUARIOS</a>
        </div>
        <div class="col-md-4">
            <a href="{{route('usuario.create')}}" class="btn btn-info btn-raised btn-block btn-flat" style="background-color: #3c8dbc;"> CREAR USUARIO</a>
        </div>
    </div>
</div>
@endsection
