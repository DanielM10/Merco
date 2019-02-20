@extends('layouts.master')

@section('content')
  <div class="col-md-3 pull-right">
                    <br>
                    <form action="" class="form-horizontal">
                            <div class="input-group">
                                <input type="text" class="form-control"
                                    placeholder="Introduzca folio" />
                                <div class="input-group-addon">
                                    <span class="fa fa-search"></span>
                                </div>
                            </div>
                        </form>
            </div>
            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><span class="fa fa-users"></span> Compras</h2>
            </div>
            <!-- END PAGE TITLE -->
            <!-- START WIDGETS -->
            <div class="row">
                <!--<div class="col-md-3">

                         START WIDGET SLIDER
                        <div class="widget widget-default widget-carousel">
                            <div class="owl-carousel" id="owl-example">
                                <div>
                                    <div class="widget-title">Total </div>

                                    <div class="widget-int">548</div>
                                </div>
                                <div>
                                    <div class="widget-title">Atendidas</div>

                                    <div class="widget-int">250</div>
                                </div>
                                <div>
                                    <div class="widget-title">Pendientes</div>

                                    <div class="widget-int">298</div>
                                </div>
                            </div>
                            <div class="widget-controls">
                                <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                            </div>
                        </div>
                        END WIDGET SLIDER -->


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
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top"
                                title="Remove Widget"><span class="fa fa-times"></span></a>
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
                            <div class="widget-title">entregadas</div>

                        </div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top"
                                title="Remove Widget"><span class="fa fa-times"></span></a>
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
                            <div class="widget-title">Pendientes</div>

                        </div>
                        <div class="widget-controls">
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top"
                                title="Remove Widget"><span class="fa fa-times"></span></a>
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
                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top"
                                title="Remove Widget"><span class="fa fa-times"></span></a>
                        </div>
                    </div>
                    <!-- END WIDGET REGISTRED -->
                </div>
                <div class="page-content-wrap">

                    <div class="">
                        <div class="col-md-12">
                            <!-- START DEFAULT DATATABLE -->
                            <div class="panel panel-default">
                                <div class="panel-heading">

                                    <div class="modal" id="modal_basic" tabindex="-1" role="dialog" aria-labelledby="defModalHead"
                                        aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><span
                                                            aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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


                                </div>
                                <div class="panel-body">

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th class="col-md-4 col-xs-12">Fecha</th>
                                                <th>Proveedor</th>
                                                <th>Monto</th>
                                                <th>Opción1</th>
                                                <th>Opción2</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>08/08/2018</td>
                                                <td>Henkel Capital</td>
                                                <td>$54,524.26</td>
                                                <td></td>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <td>30/08/2018</td>
                                                <td>Comencializadora del Bajío</td>
                                                <td>$85,695.48</td>
                                                <td></td>
                                                <td></td>

                                            </tr>

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
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>Acceder
                                                                            </th>
                                                                            <th>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>Guardar
                                                                            </th>
                                                                            <th>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>Editar
                                                                            </th>
                                                                            <th>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>Imprimir
                                                                            </th>
                                                                            <th>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
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
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>

                                                                        </tr>
                                                                        <tr>
                                                                            <td>Tipo de usuario</td>

                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>Usuarios</td>

                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
                                                                                    <span></span>
                                                                                </label>
                                                                            </td>
                                                                            <td>
                                                                                <label class="switch switch-small">
                                                                                    <input type="checkbox" checked
                                                                                        value="0" />
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
                            <div class="page-title">
                                <h2><span class="fa fa-users"></span> Cuentas por pagar</h2>
                            </div>
                            <!--<div class="col-md-3">

                                    <!-- START WIDGET SLIDER
                                    <div class="widget widget-default widget-carousel">
                                        <div class="owl-carousel" id="owl-example">
                                            <div>
                                                <div class="widget-title">Total </div>

                                                <div class="widget-int">548</div>
                                            </div>
                                            <div>
                                                <div class="widget-title">Atendidas</div>

                                                <div class="widget-int">250</div>
                                            </div>
                                            <div>
                                                <div class="widget-title">Pendientes</div>

                                                <div class="widget-int">298</div>
                                            </div>
                                        </div>
                                        <div class="widget-controls">
                                            <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip" data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                        </div>
                                    </div>
                                    END WIDGET SLIDER -->


                            <div class="col-md-4">

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
                                            data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
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
                                        <div class="widget-int num-count">375</div>
                                        <div class="widget-title">pagado</div>

                                    </div>
                                    <div class="widget-controls">
                                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                            data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
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
                                        <div class="widget-int num-count">145</div>
                                        <div class="widget-title">Pendientes</div>

                                    </div>
                                    <div class="widget-controls">
                                        <a href="#" class="widget-control-right widget-remove" data-toggle="tooltip"
                                            data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                    </div>
                                </div>
                                <!-- END WIDGET REGISTRED -->


                            </div>
                            <div class="page-content-wrap">

                                <div class="">
                                    <div class="col-md-12">
                                        <!-- START DEFAULT DATATABLE -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">

                                                <div class="modal" id="modal_basic" tabindex="-1" role="dialog"
                                                    aria-labelledby="defModalHead" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal"><span
                                                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
                                                                                        <input type="checkbox" checked
                                                                                            value="0" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group">
                                                                                <label class="col-md-3 col-xs-12 control-label">Protegido</label>
                                                                                <div class="col-md-6 col-xs-12">
                                                                                    <label class="switch switch-small">
                                                                                        <input type="checkbox" checked
                                                                                            value="0" />
                                                                                        <span></span>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-success"
                                                                    data-dismiss="modal">Guardar<span class="fa fa-floppy-o fa-right"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="panel-body">

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-4 col-xs-12">Fecha</th>
                                                            <th>Proveedor</th>
                                                            <th>Monto</th>
                                                            <th>Opción1</th>
                                                            <th>Opción2</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>08/08/2018</td>
                                                            <td>Henkel Capital</td>
                                                            <td>$54,524.26</td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr>
                                                            <td>30/08/2018</td>
                                                            <td>Comencializadora del Bajío</td>
                                                            <td>$85,695.48</td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                                <div class="modal" id="modal_large" tabindex="-1" role="dialog"
                                                    aria-labelledby="largeModalHead" aria-hidden="true">
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
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>Acceder
                                                                                        </th>
                                                                                        <th>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>Guardar
                                                                                        </th>
                                                                                        <th>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>Editar
                                                                                        </th>
                                                                                        <th>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>Imprimir
                                                                                        </th>
                                                                                        <th>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
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
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>

                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Tipo de usuario</td>

                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td>Usuarios</td>

                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
                                                                                                <span></span>
                                                                                            </label>
                                                                                        </td>
                                                                                        <td>
                                                                                            <label class="switch switch-small">
                                                                                                <input type="checkbox"
                                                                                                    checked value="0" />
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
                                                                <button type="button" class="btn btn-success"
                                                                    data-dismiss="modal">Guardar<span class="fa fa-floppy-o fa-right"></span></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- END DEFAULT DATATABLE -->
                                    </div>
                                    <!-- END WIDGETS -->
                                    <!-- PAGE CONTENT WRAPPER -->



                                </div>
                            </div>

                            <div class="page-title">
                                <h2><span class="fa fa-users"></span> Aclaraciones</h2>
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
                                            data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
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
                                            data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
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
                                            data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
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
                                            data-placement="top" title="Remove Widget"><span class="fa fa-times"></span></a>
                                    </div>
                                </div>
                                <!-- END WIDGET REGISTRED -->
                            </div>

                            <div class="page-content-wrap">
                                <div class="">
                                    <div class="col-md-12">
                                        <!-- START DEFAULT DATATABLE -->
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                            </div>

                                            <div class="panel-body">

                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Fecha</th>
                                                            <th>Proveedor</th>
                                                            <th>Descripción</th>
                                                            <th>Opción1</th>
                                                            <th>Opción2</th>

                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>08/08/2018</td>
                                                            <td>Henkel Capital</td>
                                                            <td>Aclaración de credito c873947</td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>
                                                        <tr>
                                                            <td>30/08/2018</td>
                                                            <td>Comencializadora del Bajío</td>
                                                            <td>Aclaración de entrada con gastos 8773982638</td>
                                                            <td></td>
                                                            <td></td>

                                                        </tr>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- END DEFAULT DATATABLE -->
                                    </div>
                                    <!-- END WIDGETS -->
                                    <!-- PAGE CONTENT WRAPPER -->



                                </div>
                            </div>

                        </div>
                        <!-- PAGE CONTENT WRAPPER -->

                    </div>
                    <!-- END PAGE CONTENT -->
              
@endsection
