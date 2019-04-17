@extends('layouts.admin')
@section('breadcrumb')
<h1>
    Bienvenido
    <small>Sr(a). {{Auth::user()->nombres}}</small>
</h1>
<ol class="breadcrumb">
    <li class="active"><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
    <li><a>Admisiones</a></li>
</ol>
@endsection
@section('content')
<div class="alert alert-success alert-dismissible" style="opacity: .65; font-size: 16px; color: #FFFFFF;">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
    <h4><i class="icon fa fa-info"></i> Detalles!</h4>
    Configure todo lo necesario para que el proceso de admisión se lleve a cabo de manera práctica y correcta, gestione la información de los inscritos, realice las entrevistas de admisión, entre otras tareas.
</div>
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">MENÚ MÓDULO ADMISIONES</h3>
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
                    <li><a href="#tab_2" data-toggle="tab">Tab 2</a></li>
                    <li><a href="#tab_3" data-toggle="tab">Tab 3</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_1">
                        <div class="row">
                            <!--                        @if(session()->exists('PAG_MODULOS'))-->
                            <div class="col-md-3">
                                <a href="{{route('pais.index')}}" class="btn btn-success btn-raised btn-block btn-flat"> PAÍSES</a>
                            </div>
                            <!--                        @endif-->
                            <!--                        @if(session()->exists('PAG_PAGINAS'))-->
                            <div class="col-md-5">
                                <a href="{{route('estado.index')}}" class="btn btn-success btn-raised btn-block btn-flat"> DEPARTAMENTOS, ESTADOS Ó PROVINCIAS</a>
                            </div>
                            <!--                        @endif-->
                            <!--                        @if(session()->exists('PAG_GRUPOS-ROLES'))-->
                            <div class="col-md-4">
                                <a href="{{route('ciudad.index')}}" class="btn btn-success btn-raised btn-block btn-flat"> CIUDADES</a>
                            </div>
                            <!--                        @endif-->
                            <!--                        @if(session()->exists('PAG_GRUPOS-ROLES'))-->
                            <div class="col-md-4">
                                <a href="{{route('tipodoc.index')}}" class="btn btn-success btn-raised btn-block btn-flat"> TIPOS DE DOCUMENTOS</a>
                            </div>
                            <!--                        @endif-->
                            <!--                        @if(session()->exists('PAG_GRUPOS-ROLES'))-->
                            <div class="col-md-4">
                                <a href="{{route('sexo.index')}}" class="btn btn-success btn-raised btn-block btn-flat"> SEXO</a>
                            </div>
                            <!--                        @endif-->
                            <!--                        @if(session()->exists('PAG_GRUPOS-ROLES'))-->
                            <div class="col-md-4">
                                <a href="{{route('entidadsalud.index')}}" class="btn btn-success btn-raised btn-block btn-flat"> ENTIDADES DE SALUD</a>
                            </div>
                            <!--                        @endif-->
                            <!--                        @if(session()->exists('PAG_GRUPOS-ROLES'))-->
                            <div class="col-md-4">
                                <a href="{{route('etnia.index')}}" class="btn btn-success btn-raised btn-block btn-flat"> ETNIAS</a>
                            </div>
                            <!--                        @endif-->
                        </div>
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_2">
                        The European languages are members of the same family. Their separate existence is a myth.
                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                        new common language would be desirable: one could refuse to pay expensive translators. To
                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                        words. If several languages coalesce, the grammar of the resulting language is more simple
                        and regular than that of the individual languages.
                    </div>
                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="tab_3">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
                        sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                        like Aldus PageMaker including versions of Lorem Ipsum.
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
