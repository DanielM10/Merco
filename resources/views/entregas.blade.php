@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>                    
@section('content')
@foreach ($ordenescompra as $ordencomprax)          
@endforeach
<script src="/scripts/entregas.js"></script>
<div class="page-title">
                <h2 class="naranja"><span class="fa fa-tasks"></span> Entregas</h2>
                <div class="btn-group pull-right">

                    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>
                        Exportar</button>
                    <ul class="dropdown-menu">

                        <li><a href="#" onclick="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png'
                                    width="24" /> XLS</a></li>
                        <li><a href="#" onclick="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/Trayse101-Basic-Filetypes-2-Pdf.ico'
                                    width="24" /> PDF</a></li>
                        <li><a href="#" onclick="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/correo.jpg'
                                    width="24" /> CORREO</a></li>

                    </ul>
                </div>
            </div>
            <!-- END PAGE TITLE -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                    <div class="panel panel-default">
                        <!-- START DEFAULT DATATABLE -->


                        <!-- START ACCORDION -->
                        <div class="panel-group accordion accordion-dc">

                            <div class="panel">
                                <div class="panel-heading" style=" border-bottom: 4px solid #ff802d;">
                                    <h4 class="panel-title">
                                        <a href="#accTwoColThree">
                                            Filtros
                                        </a>
                                    </h4>
                                </div>
</div>
                                <div class="panel-body panel-body-open" id="accTwoColThree">
                                    <!--inicia-->
                                    <div class="row">                       
                                        <form action="/entregas" method="GET" role="search">
        {{ csrf_field() }}                    

                                              
        <div class="col-md-2 form-group">
    <label class="col-md-11 control-label">Fecha Emisión</label>
    <div class="col-md-12 col-xs-12">
        <div class="input-group">
        <input type="text" id="Periodo" name="periodo" class="form-control" />
            <span class="input-group-addon"><span class="glyphicon glyphicon-calendar"></span></span>
        </div>
    </div>
</div>
                                            <div class="col-md-3 col-xs-12 form-group">
    <label class="col-md-9 control-label">Folio Entrada</label>
    <div class="col-md-12 col-xs-12">
        <div class="input-group">
            <input type="text" id="dp-3" name="aa" class="form-control" placeholder="Inserte Folio" />
            <span class="input-group-btn">
<button type="submit" class="btn btn-default" style=" display: inline-block;
padding: 7px 10px;"><i class="fa fa-search"></i></button>
</span>
        </div>
    </div>
</div>
                                            <div class="col-md-2 form-group">
    <label class="col-md-11 control-label">Estatus</label>
    <select multiple name="estatus[]" class="form-control select col-md-5 col-xs-12" data-live-search="true" title="--Seleccionar--">
        <option value="Pendiente">Pendiente</option>
        <option value="Concluido">Concluido</option>
        <option value="Cancelado">Cancelado</option>
    </select>
</div>
                                            <div class="col-md-2 form-group">
                                                <label class="col-md-11 control-label">Proveedor</label>
                                                <select multiple id="proveedor" name="proveedor[]" class="form-control select col-md-12 col-xs-12" data-live-search="true" title="--Seleccionar--">
    @foreach($proveedores as $proveedor)
        <option value="{{$proveedor->Proveedor}}">{{$proveedor->Nombre}}</option>
       @endforeach
    </select>
                                            </div>
                                            <div class="col-md-2 form-group">
    <label class="col-md-12 control-label">Sucursal</label>
    <select multiple id="sucursal" name="sucursal[]" class="form-control select col-md-12 col-xs-12" name="sucursalbusc" id="sucursalbusc" data-live-search="true" title="--Seleccionar--">
        @foreach($sucursales as $sucursal)
        <option value="{{$sucursal->IdSucursal}}">{{$sucursal->NombreSuc}}</option>
        @endforeach
        
    </select>
</div>
                                            <div class="col-md-1 pull-right">                                            
                                                <button class="btn btn-success pull-right" style="margin-top:10px" id="btnBuscarConfP">Filtrar <span class="fa fa-search fa-left"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                    <!--termina-->


                                </div>
                            </div>

                        </div>
                        </div>

                        <!-- END ACCORDION -->
                        <!--termina-->

                        <!-- END DEFAULT DATATABLE -->

                        <div class="row">
                                        <div class="col-md-12">
<div class="panel panel-body">
                        <div class="panel-group table-responsive">
                            <table class="table table-striped datatable text">

                                <thead>
                                    <tr>

                                        <th>No. entrada</th>
                                        <th>Descripción</th>
                                        <th>Fecha</th>
                                        <th>Almacen</th>
                                        <th>Referencia</th>
                                        <th>Importe</th>
                                        <th>Descuento</th>
                                        <th>Total</th>
                                        <th>Estatus</th>
                                        <th>Desglose entrada</th>
                                        <th>Generar aclaración</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td>C507340</td>
                                        <td>Entrada con gastos</td>
                                        <td>21/08/2018</td>
                                        <td>CEDIS</td>
                                        <td>Fa00878178</td>
                                        <td>101,747.28</td>
                                        <td>0.00</td>
                                        <td>128,026.84</td>
                                        <td><span class=" completo fa fa-check btn-success btn-sm"></span></td>
                                        <th><a href="detalleentregas?aa={{$ordencomprax->IdCompra}}" class="btn btn-default btn-sm fa fa-tasks"></a>
                                        </th>
                                        <th><button class="btn btn-default btn-sm fa fa-pencil-square-o" data-toggle="modal"
                                                data-target="#modal_large"></button>
                                        </th>
                                    </tr>
                                   

                                </tbody>
                            </table>
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
                                                                <input type="text" class="form-control" disabled value="Orden compra" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">No.
                                                                Documento</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="C87388" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Proveedor</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="Henkel capital">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Fecha</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="date" class="form-control" disabled value="2018/09/11">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Referencia</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="88729377482" />
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="col-md-8">
                                                    <form class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Tipo
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
                        </div>
                    </div>

                </div>
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
@endsection