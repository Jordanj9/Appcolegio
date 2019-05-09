
@extends('layouts.admin')
@section('breadcrumb')
<h1>
    Bienvenido
    <small>Sr(a). {{Auth::user()->nombres}}</small>
</h1>
<ol class="breadcrumb">
    <li class="active"><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
    <li><a>Matrícula</a></li>
</ol>
@endsection
@section('content')
<div class="alert alert-primary alert-dismissible" style="opacity: .65; font-size: 16px; color: #FFFFFF;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-info"></i> Detalles!</h4>
    Configure todo lo necesario para que el proceso de matrícula se lleve a cabo de manera práctica y correcta, gestione la información de los datos necesarios para el proceso, realice la asignación de carga académica, entre otras tareas.
</div>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">MENÚ MÓDULO MATRÍCULA</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="col-md-12">
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#tab_1" data-toggle="tab"><i class="fa fa-cogs"></i> DATOS BÁSICOS</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">
                            @if(session()->exists('PAG_MATRICULA-AREAS'))
                            <div class="col-md-3">
                                <a href="{{route('area.index')}}" class="btn btn-primary btn-raised btn-block btn-flat"> ÁREAS</a>
                            </div>
                            @endif
                            @if(session()->exists('PAG_MATRICULA-CATEGORIA-ESTUDIANTE'))
                            <div class="col-md-3">
                                <a href="{{route('categoria.index')}}" class="btn btn-primary btn-raised btn-block btn-flat"> CATEGORÍA ESTUDIANTE</a>
                            </div>
                            @endif
                            @if(session()->exists('PAG_MATRICULA-SITUACION-ESTUDIANTE'))
                            <div class="col-md-3">
                                <a href="{{route('situacionestudiante.index')}}" class="btn btn-primary btn-raised btn-block btn-flat"> SITUACIÓN ESTUDIANTE</a>
                            </div>
                            @endif
                            @if(session()->exists('PAG_MATRICULA-NATURALEZA'))
                            <div class="col-md-3">
                                <a href="{{route('naturaleza.index')}}" class="btn btn-primary btn-raised btn-block btn-flat"> NATURALEZA DE MATERIAS</a>
                            </div>
                            @endif
                            @if(session()->exists('PAG_MATRICULA-MATERIAS'))
                            <div class="col-md-3">
                                <a href="{{route('materias.index')}}" class="btn btn-primary btn-raised btn-block btn-flat"> MATERIAS</a>
                            </div>
                            @endif
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
            </div>
            <!-- nav-tabs-custom -->
        </div>
    </div>
</div>
@endsection
