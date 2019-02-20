<script type="text/javascript" src="scripts/home.js"></script>
@extends('layouts.master')
@section('content')
                <div class="page-content-wrap">
                    <!-- PAGE TITLE -->
                    <div class="page-title">
                        <h2 class="naranja"><span class="fa fa-users"></span>Ordenes de compras</h2>
                    </div>
                    <!-- END PAGE TITLE -->
                    <!-- START WIDGETS -->
                    <div class="col-md-3">

                        <!-- START WIDGET MESSAGES -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-file-text-o"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{$counttotal}}</div>
                                <div class="widget-title">total</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                    data-placement="bottom" title="Remove Widget"><span style=" margin: 2 0 0 0;
    padding: 5px 8px" class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET MESSAGES -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{$countentregadas}}</div>
                                <div class="widget-title">entregadas</div>                          
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                    data-placement="bottom" style=" margin: 2 0 0 0;
    padding: 5px 8px" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-3">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-exclamation-circle"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{$countpendientes}}</div>
                                <div class="widget-title">Pendientes</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-3">
                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-times"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{$countcanceladas}}</div>
                                <div class="widget-title">Canceladas</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->
                    </div>

                    <div class="col-md-12">
                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="defModalHead">Tipo de usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <form class="form-horizontal">
                                                        <div class="form-group">
                                                            <div>
                                                                <label class="col-md-3 col-xs-12 control-label ">Tipo
                                                                    de usuario</label>
                                                                <div class="col-md-8 col-xs-12">

                                                                    <input type="text" class="form-control" />
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Activo</label>
                                                            <div class="col-md-6 col-xs-12">
                                                                <label class="switch switch-small">
                                                                    <input type="checkbox" checked value="0" />
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Protegido</label>
                                                            <div class="col-md-6 col-xs-12">
                                                                <label class="switch switch-small">
                                                                    <input type="checkbox" checked value="0" />
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Guardar<span
                                                    class="fa fa-floppy-o fa-right"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table crece-head table-striped">
                                    <thead>
                                        <tr>
                                        <th>No. Orden</th>
                                            <th> Fecha</th>                                           
                                            <th>Descripción</th>
                                            <th>Emisión</th>
                                            <th>Requerida</th>
                                            <th>Almacen</th>
                                            <th>Importe</th>
                                            <th>Descuento</th>
                                            <th>Total</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($top3compras as $ordencomprax)          
                                        <tr>
                                        <td>{{$ordencomprax->MovID}}</td>
                                        <TD>{{$ordencomprax->UltimoCambio}}</TD>                                        
                                        <td>{{$ordencomprax->Mov}}</td>                                                                           
                                        <td class="resalta">{{$ordencomprax->FechaEmision}}</td>
                                        <td>{{$ordencomprax->FechaRequerida}}</td>
                                        <td class="resalta">{{$ordencomprax->Almacen}}</td>                                       
                                        <td>{{$ordencomprax->Importe}}</td>
                                        <td>{{$ordencomprax->Impuestos}}</td>                                        
                                        <td>{{$ordencomprax->Impuestos+$ordencomprax->Importe-$ordencomprax->DescuentoTotal}}</td>                                                                              
                                    </tr>
            
             
                         
        @endforeach
                                       

                                    </tbody>
                                </table>
                                <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Permisos de tipo de
                                                    usuario</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <form class="form-horizontal">
                                                            <table class="table table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class=" col-md-4 col-xs-12">
                                                                            Pantalla
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Acceder
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Guardar
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Editar
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Imprimir
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Eliminar
                                                                        </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td>Parametros</td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tipo de usuario</td>

                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Usuarios</td>

                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END DEFAULT DATATABLE -->
                    <div class="page-title">
                        <h2 class="naranja"><span class="fa fa-users"></span> Cuentas por pagar</h2>
                    </div>
                    <div class="col-md-4">

                        <!-- START WIDGET MESSAGES -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-file-text-o"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{$counttotal2}}</div>
                                <div class="widget-title">total</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET MESSAGES -->

                    </div>
                    <div class="col-md-4">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{$countpagado2}}</div>
                                <div class="widget-title">pagado</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->

                    </div>
                    <div class="col-md-4">

                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-exclamation-circle"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">{{$countpendientes2}}</div>
                                <div class="widget-title">Pendientes</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->


                    </div>

                    <div class="col-md-12">
                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                    class="sr-only">Close</span></button>
                                            <h4 class="modal-title" id="defModalHead">Tipo de
                                                usuario</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <form class="form-horizontal">
                                                        <div class="form-group">
                                                            <div>
                                                                <label class="col-md-3 col-xs-12 control-label ">Tipo
                                                                    de usuario</label>
                                                                <div class="col-md-8 col-xs-12">

                                                                    <input type="text" class="form-control" />
                                                                </div>

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Activo</label>
                                                            <div class="col-md-6 col-xs-12">
                                                                <label class="switch switch-small">
                                                                    <input type="checkbox" checked value="0" />
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Protegido</label>
                                                            <div class="col-md-6 col-xs-12">
                                                                <label class="switch switch-small">
                                                                    <input type="checkbox" checked value="0" />
                                                                    <span></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-success" data-dismiss="modal">Guardar<span
                                                    class="fa fa-floppy-o fa-right"></span></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <table class="table crece-head table-striped">
                                    <thead>
                                        <tr>
                                            <th>No. Pago</th>
                                            <th>Proveedor</th>
                                            <th>Fecha</th>
                                            <th>Forma de pago</th>
                                            <th>Total</th>
                                            <th>Estatus</th>


                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($top3pagos as $ordencomprax2)          
                                        <tr>
                                        <TD></TD>
                                        <td>{{$ordencomprax2->MovID}}</td>
                                        <td>{{$ordencomprax2->Mov}}</td>                                                                           
                                        <td class="resalta">{{$ordencomprax2->FechaEmision}}</td>
                                        <td>{{$ordencomprax2->FechaRequerida}}</td>
                                        <td class="resalta">{{$ordencomprax2->Almacen}}</td>                                       
                                                                                                                    
                                    </tr>
            
             
                         
        @endforeach

                                    </tbody>
                                </table>
                                <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><span
                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                                <h4 class="modal-title" id="largeModalHead">Permisos de
                                                    tipo de usuario</h4>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col-md-12">

                                                        <form class="form-horizontal">
                                                            <table class="table table-condensed">
                                                                <thead>
                                                                    <tr>
                                                                        <th class=" col-md-4 col-xs-12">
                                                                            Pantalla
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Acceder
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Guardar
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Editar
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Imprimir
                                                                        </th>
                                                                        <th>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>Eliminar
                                                                        </th>

                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                                    <tr>
                                                                        <td>Parametros</td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>

                                                                    </tr>
                                                                    <tr>
                                                                        <td>Tipo de usuario</td>

                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Usuarios</td>

                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                        <td>
                                                                            <label class="switch switch-small">
                                                                                <input type="checkbox" checked value="0" />
                                                                                <span></span>
                                                                            </label>
                                                                        </td>
                                                                    </tr>

                                                                </tbody>
                                                            </table>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-success" data-dismiss="modal">Guardar<span
                                                        class="fa fa-floppy-o fa-right"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END DEFAULT DATATABLE -->
                    </div>
                    <div class="page-title">
                        <h2 class="naranja"><span class="fa fa-users"></span> Aclaraciones</h2>
                    </div>
                    <div class="col-md-3">
                        <!-- START WIDGET MESSAGES -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-file-text-o"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">520</div>
                                <div class="widget-title">total</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET MESSAGES -->
                    </div>
                    <div class="col-md-3">
                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-check"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">375</div>
                                <div class="widget-title">Abiertas</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->
                    </div>
                    <div class="col-md-3">
                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-exclamation-circle"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">145</div>
                                <div class="widget-title">En proceso</div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->
                    </div>
                    <div class="col-md-3">
                        <!-- START WIDGET REGISTRED -->
                        <div class="widget widget-default widget-item-icon">
                            <div class="widget-item-left">
                                <span class="fa fa-times"></span>
                            </div>
                            <div class="widget-data">
                                <div class="widget-int num-count">85</div>
                                <div class="widget-title">Canceladas</div>

                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                style=" margin: 2 0 0 0;
    padding: 5px 8px"  data-placement="middle" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        <!-- END WIDGET REGISTRED -->
                    </div>
                    <div class="col-md-12">
                        <!-- START DEFAULT DATATABLE -->
                        <div class="panel panel-default">
                            <div class="panel-body">

                                <table class="table crece-head table-striped">
                                    <thead>
                                        <tr>
                                            <th>Folio</th>
                                            <th>Origen</th>
                                            <th>Tipo de reclamo</th>
                                            <th>No. Orden</th>
                                            <th>Proveedor</th>
                                            <th>Fecha</th>
                                            <th>Referencia</th>
                                            <th>Estatus</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>A89374-1</td>
                                            <td>Orden Compra</td>
                                            <td>Inconsistencia</td>
                                            <td>C738724</td>
                                            <td>Henkel capital</td>
                                            <td>10/08/2018</td>
                                            <td>289938992834</td>
                                            <td>Abierta</td>


                                        </tr>
                                        <tr>
                                            <td>A89374-1</td>
                                            <td>Orden Compra</td>
                                            <td>Inconsistencia</td>
                                            <td>C738724</td>
                                            <td>Henkel capital</td>
                                            <td>10/08/2018</td>
                                            <td>289938992834</td>
                                            <td>En proceso</td>

                                        </tr>
                                        <tr>
                                            <td>A89374-1</td>
                                            <td>Orden Compra</td>
                                            <td>Inconsistencia</td>
                                            <td>C738724</td>
                                            <td>Henkel capital</td>
                                            <td>10/08/2018</td>
                                            <td>289938992834</td>
                                            <td>En proceso</td>

                                        </tr>




                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END DEFAULT DATATABLE -->
                    </div>
                    <!-- PAGE CONTENT WRAPPER -->
                    <!-- END PAGE CONTENT -->

                </div>
                <!-- END PAGE CONTAINER -->
                
            </div>

           
@endsection