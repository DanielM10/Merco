@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>                    
@section('content')
            <!-- PAGE TITLE -->
            <div class="page-title">
                <h2><span class="fa fa-tasks"></span> Aclaraciones</h2>
                <div>
                    <button class="btn btn-success pull-right" data-toggle="modal" data-target="#modal_large">Nueva
                        aclaración</button>
                </div>
            </div>
            <!-- END PAGE TITLE -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <!-- START DEFAULT DATATABLE -->
                        <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">Close</span></button>
                                        <h4 class="modal-title" id="largeModalHead">Nueva Aclaración</h4>
                                    </div>
                                    <div class="modal-body">
                                        <!--inicia-->
                                        <div class="row">
                                            <div class="col-md-4">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-md-5 col-xs-12 control-label">Folio</label>
                                                        <div class="col-md-7 col-xs-12">
                                                            <input type="text" class="form-control" disabled value="A76389-1" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 col-xs-12 control-label">Origen</label>
                                                        <div class="col-md-7 col-xs-12">
                                                            <select class="form-control select">
                                                                <option selected="selected">Seleccionar</option>
                                                                <option>Orden compra</option>
                                                                <option>Entrega</option>
                                                                <option>Pago</option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 col-xs-12 control-label">Tipo
                                                            reclamo</label>
                                                        <div class="col-md-7 col-xs-12">
                                                            <select class="form-control select">
                                                                <option selected="selected">Seleccionar</option>
                                                                <option>Falta información</option>
                                                                <option>Problema entrega</option>
                                                                <option>Credito</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 col-xs-12 control-label">No.
                                                            Documento</label>
                                                        <div class="col-md-7 col-xs-12">
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 col-xs-12 control-label">Proveedor</label>
                                                        <div class="col-md-7 col-xs-12">
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 col-xs-12 control-label">Fecha</label>
                                                        <div class="col-md-7 col-xs-12">
                                                            <input type="date" class="form-control" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-5 col-xs-12 control-label">Referencia</label>
                                                        <div class="col-md-7 col-xs-12">
                                                            <input type="text" class="form-control" />
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="col-md-8">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Aclaración</label>
                                                        <div class="col-md-8 col-xs-12">
                                                            <textarea cols="50" rows="10"></textarea>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <!--termina-->
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Enviar<span
                                                class="fa fa-send fa-right"></span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- START ACCORDION -->
                        <div class="panel-group accordion accordion-dc">

                            <div class="panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#accTwoColThree">
                                            Filtros
                                        </a>
                                    </h4>
                                </div>

                                <div class="panel-body panel-body-open" id="accTwoColThree">
                                    <!--inicia-->
                                    <div class="row">
                                        <form class="form-horizontal text-center">
                                        <div>
                                            <div class="col-md-2 form-group">
                                                <label class="col-md-10 control-label text-center">Fecha O.C.</label>
                                                <div class="col-md-12 col-xs-12">
                                                    <div class="input-group">
                                                        <input type="text" id="dp-3" class="form-control" value="06-06-2014"
                                                            data-date="06-06-2014" data-date-format="dd-mm-yyyy"
                                                            data-date-viewmode="years" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="col-md-9 control-label">Estatus</label>
                                                <div class="input-group">
                                                <select multiple class="form-control select col-md-12 col-xs-12" data-live-search="true" title="--Seleccionar--">
                                                    <option>Pendiente</option>
                                                    <option>Concluido</option>
                                                    <option>Cancelado</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="col-md-9 col-xs-12 control-label">Fecha
                                                    Venc</label>
                                              
                                                    <div class="input-group">
                                                        <input type="text" id="dp-3" class="form-control" value="06-06-2014"
                                                            data-date="06-06-2014" data-date-format="dd-mm-yyyy"
                                                            data-date-viewmode="years" />
                                                        <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                    </div>
                                               
                                            </div>
                                            
                                      
                                            <div class="col-md-2 form-group">
                                                <label class="col-md-6 control-label">Proveedor</label>
                                                <div class="input-group">
                                                <select multiple class="form-control select col-md-9 col-xs-12" data-live-search="true" title="--Seleccionar--">
                                                    <option>Axsis Tecnología</option>
                                                    <option>Almacenes de México</option>

                                                </select>
                                            </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="col-md-7 control-label">Área</label>
                                                <div class="input-group">
                                                <select multiple class="form-control select col-md-5 col-xs-10" data-live-search="true" title="--Seleccionar--">
                                                    <option>Comercial</option>
                                                    <option>Recibo</option>

                                                </select>
                                                </div>
                                            </div>
                                            <div class="col-md-2 form-group">
                                                <label class="col-md-9 control-label">Responsable</label>
                                                <div class="input-group">
                                                <select multiple class="form-control select col-md-9 col-xs-12" data-live-search="true" title="--Seleccionar--">
                                                    <option>Fernando Lopez</option>
                                                    <option>Mario Azurro</option>

                                                </select>
                                            </div>
                                            </div>                            
                                            </div>                                            
                                            <br>
                                            <br>
                                            <br>
                                                <button class="btn btn-success col-md-1 pull-right"><span class="fa fa-search"></span>Filtrar</button><br /><br />                                            
                                        </form>
                                    </div>
                                    <!--termina-->


                                </div>
                                <div class="panel-body" id="accTwoColThree">
                                    <!--inicia-->
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div>
                                                <button class="btn btn-success pull-right">Generar</button><br /><br />
                                            </div>
                                            <div class="col-md-6">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Fecha inicio</label>
                                                        <div class="col-md-4 col-xs-12">
                                                            <div class="input-group">
                                                                <input type="text" id="dp-3" class="form-control" value="06-06-2014"
                                                                    data-date="06-06-2014" data-date-format="dd-mm-yyyy"
                                                                    data-date-viewmode="years" />
                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Tipo de
                                                            requisición</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Servicio</option>
                                                            <option>Producto</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Clasificación</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Tecnologia</option>
                                                            <option>Educacion</option>
                                                            <option>Capacitación</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Giro</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Comercial</option>
                                                            <option>Servicios</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Departamento</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Finanzas</option>
                                                            <option>Sistemas</option>
                                                            <option>Compras</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">No.Orden
                                                            de compra</label>
                                                        <div class="col-md-5 col-xs-12">
                                                            <input type="text" class="form-control" placeholder="Rangos por (,) o (-)" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">No.
                                                            Requisicion</label>
                                                        <div class="col-md-5 col-xs-12">
                                                            <input type="text" class="form-control" placeholder="Rangos por (,) o (-)" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Usuario
                                                            proceso orden</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Comercial 1</option>
                                                            <option>Comercial 2</option>

                                                        </select>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="col-md-6">
                                                <form class="form-horizontal">
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label">Fecha final</label>
                                                        <div class="col-md-4 col-xs-12">
                                                            <div class="input-group">
                                                                <input type="text" id="dp-3" class="form-control" value="06-06-2014"
                                                                    data-date="06-06-2014" data-date-format="dd-mm-yyyy"
                                                                    data-date-viewmode="years" />
                                                                <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Tipo de
                                                            compra</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Nacional</option>
                                                            <option>Extranjera</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Proveedor</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Axsis Tecnoligia</option>
                                                            <option>Tecnologia de punta</option>
                                                            <option>Almacenes de Norte</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Prioridad</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Urgente</option>
                                                            <option>No urgente</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Estatus</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Procesada</option>
                                                            <option>Validada</option>

                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Metodología</label>
                                                        <select class="selectpicker" multiple data-live-search="true"
                                                            data-live-search-placeholder="Seleccionar" data-actions-box="true"
                                                            title="--Seleccione--">
                                                            <option>Just Do it</option>
                                                            <option>BPR</option>
                                                            <option>PPU</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-3 col-xs-12 control-label">Costo
                                                            total</label>
                                                        <div class="col-md-5 col-xs-12">
                                                            <input type="text" class="form-control" placeholder="Rangos por (,) o (-)" />
                                                        </div>
                                                    </div>


                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <!--termina-->


                                </div>
                            </div>

                        </div>
                        <div class="panel-body">
                        <div class="panel-group table-responsive">
                            <table class="table table-striped datatable text">
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
                                        <th>Desglose aclaración</th>
                                        <th>Responsable</th>
                                        <th>Área</th>
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
                                        <td><span class="fa fa-exclamation btn-warning btn-sm" ></span></td>
                                        <th><a href="DesgloseAclaracion.html" class="btn btn-default btn-sm fa fa-tasks"
                                                target="_blank"></a>
                                        </th>
                                        <td>Rafael Martinez</td>
                                        <td>Comercial</td>
                                    </tr>
                                    <tr>

                                        <td>A29819-2</td>
                                        <td>Entrega</td>
                                        <td>Problema entrega</td>
                                        <td>C829374</td>
                                        <td>Almacenes México</td>
                                        <td>15/08/2018</td>
                                        <td>289306487312</td>
                                        <td><span class="fa fa-check btn-success btn-sm" ></span></td>
                                        <th><a href="DesgloseAclaracion.html" class="btn btn-default btn-sm fa fa-tasks"
                                                target="_blank"></a>
                                        </th>
                                        <td>Fernando Lopez</td>
                                        <td>Comercial</td>
                                    </tr>
                                    <tr>

                                        <td>A28918-3</td>
                                        <td>Pago</td>
                                        <td>Falta de información</td>
                                        <td>C647893</td>
                                        <td>Henkel capital</td>
                                        <td>28/08/2018</td>
                                        <td>39847385768</td>
                                        <td><span class="fa fa-times btn-danger btn-sm" ></span></td>
                                        <th><a href="DesgloseAclaracion.html" class="btn btn-default btn-sm fa fa-tasks"
                                                target="_blank"></a>
                                        </th>
                                        <td>Carlos Salazar</td>
                                        <td>Comercial</td>
                                    </tr>

                                </tbody>
                            </table>

                        </div>
                    </div>

                </div>
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->     
        @endsection