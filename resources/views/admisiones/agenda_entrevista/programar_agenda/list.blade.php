@extends('layouts.admin')
@section('breadcrumb')
<h1>
    Bienvenido
    <small>Sr(a). {{Auth::user()->nombres}}</small>
</h1>
<ol class="breadcrumb">
    <li><a href="{{route('home')}}"><i class="fa fa-home"></i> Inicio</a></li>
    <li><a href="{{route('menu.admisiones')}}"><i class="fa fa-users"></i> Admisiones</a></li>
    <li><a href="{{route('menu.admisiones')}}"><i class="fa fa-calendar-plus-o"></i> Agenda $ Entrevista</a></li>
    <li class="active"><a>Programar Agenda</a></li>
</ol>
@endsection
@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">LISTADO DE PERÍODOS PROGRAMADOS EN LAS UNIDADES</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-toggle="modal" data-target="#modal" title="Ayuda">
                <i class="fa fa-question"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Minimizar">
                <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Cerrar">
                <i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped table-hover">
                <thead>
                    <tr class="info">
                        <th>UNIDAD</th>
                        <th>JORNADA</th>
                        <th>PERIODO</th>
                        <th>AÑO</th>
                        <th>FECHA INICIO</th>
                        <th>FECHA FIN</th>
                        <th>CONTINUAR</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($perunid as $per)
                    <tr>
                        <td>{{$per->unidad->nombre}}</td>
                        <td>{{$per->jornada->descripcion}}</td>
                        <td>{{$per->periodoacademico->etiqueta}}</td>
                        <td>{{$per->periodoacademico->anio}}</td>
                        <td>
                            <label class="label label-success">{{$per->periodoacademico->fecha_inicio}}</label>
                        </td>
                        <td>
                            <label class="label label-danger">{{$per->periodoacademico->fecha_fin}}</label>
                        </td>
                        <td>
                            <a href="{{route('agendacita.edit',$per->id)}}" style="margin-left: 10px;" data-toggle="tooltip" title="Continuar" style="margin-left: 10px;"><i class="fa fa-arrow-right"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Información de Ayuda</h4>
            </div>
            <div class="modal-body">
                <p>Asociación de períodos académicos, unidades y jornadas para la programación de la agenda de entrevistas.</p><p>Seleccione la relación a la que desea programar rango de fecha y disponibilidad para entrevistas de admisión.</p>
            </div>
            <div class="modal-footer" style="background-color: #d2d6de !important; opacity: .65;">
                <button type="button"  class="btn btn-block btn-danger btn-flat pull-right" data-dismiss="modal"> <i class="fa fa-reply"></i> Regresar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function () {
        $('#example1').DataTable();
    });
</script>
@endsection