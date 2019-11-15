@extends ('master.header')

@section('content')
    @if(Entrust::can('acceder-inventario'))

        <h1 class="page-title"> Inventario
        </h1>
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="{{ route('home') }}">Home</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <span>Inventario</span>
                </li>
            </ul>
        </div>

        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase"> Inventario Actual</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="table-toolbar">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="btn-group">
                                        <a href="{{ route('inventario.index') }}">
                                        <button id="sample_editable_1_new" class="btn sbold green"> Actualizar                                       
                                            <i class="fa fa-refresh"></i> 
                                        </button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="btn-group pull-right">
                                        <button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Herramientas
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-print"></i> Print </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-pdf-o"></i> Guardar PDF </a>
                                            </li>
                                            <li>
                                                <a href="javascript:;">
                                                    <i class="fa fa-file-excel-o"></i>Exportar a Excel </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                            <thead>
                                <tr>
                                    <th style="visibility: hidden"> Numero </th>
                                    <th> Producto </th>
                                    <th> Cantidad </th>
                                    <th> Precio </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd gradeX"> 
                                    <td style="visibility: hidden" width="1" height="1"> 
                                        {{ $inventario->Id }} 
                                    </td>                                   
                                    <td> {{ $inventario }} </td>
                                    <td class="center"> {{ $inventario }} </td>

                                    <td>
                                        <div class="btn-group">
                                            <button class="btn btn-xs green dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false"> Acciones
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-left" role="menu">
                                                <li>
                                                    {{-- <a href="{{ route('usuario.show', ['id' => $user->id]) }}">
                                                        <i class="icon-docs"></i> Editar </a> --}}
                                                </li>
                                                <li>
                                                    {{-- <form action="{{ route('usuario.destroy', ['id' => $user->id]) }}" method="POST">
                                                        {{ csrf_field() }}
                                                        {{ method_field('DELETE') }}
                                                        &nbsp&nbsp
                                                        <i class="icon-tag"></i>
                                                        <button type="submit"> Eliminar </button>
                                                    </form> --}}
                                                </li>

                                            </ul>
                                        </div>
                                    </td>
                                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
               
            </div>
        </div>

    @endif
@endsection