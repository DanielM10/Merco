@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>                    
                
        <link  rel="stylesheet" type="text/css" href="{{asset('css/Mensajes.css')}}"> 
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />
                   
@section('content')
<script src="/scripts/entregas.js"></script>
<script>
    $(document).ready(function(){
      var date_input=$('input[name="Periodo"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'yyyy-mm-dd',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>
<script>
                    ///PAGINADO DE TABLAS EN 25 ROWS
                    $( document ).ready(function() {
                        $("#tableordenes").dataTable().fnDestroy();
                        $('#tableordenes').dataTable( {
    "pageLength": 25
});
    });
                    
                </script>  
  <!-- PAGE TITLE -->
  @foreach($COMP as $com)
  @endforeach

  <div class="page-title">
                <h2 style="color:#FF802D;"><span class="fa fa-tasks"></span> Ordenes de compra</h2>
                <div class="btn-group pull-right">

                    <button class="btn btn-danger dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i>
                        Exportar</button>
                    <ul class="dropdown-menu">

                        <li><a href="{{route('exportcompra')}}" onclick="$('#customers2').tableExport({type:'excel',escape:'false'});"><img src='img/icons/xls.png'
                                    width="24" /> XLS</a></li>
                        <li><a href="{{route('exportpdfordenes')}}" onclick="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/Trayse101-Basic-Filetypes-2-Pdf.ico'
                                    width="24" /> PDF</a></li>
                        <li><a href="#" onclick="$('#customers2').tableExport({type:'pdf',escape:'false'});"><img src='img/icons/correo.jpg'
                                    width="24" /> CORREO</a></li>
                    </ul>
                </div>
            </div>
            <!-- END PAGE TITLE -->

         
                   
                        <!-- START DEFAULT DATATABLE -->

                        <!-- START ACCORDION -->
                         <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

<div class="row" >
    <div class="col-md-12" >
    <div class="panel panel-default">
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
<form  action="/ordenescompra" method="GET" role="search">
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
    <label class="col-md-9 control-label">Folio Orden de Compra</label>
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
    <button type="submit" class="btn btn-success pull-right" style="margin-top:10px" id="btnBuscarConfP">Filtrar <span class="fa fa-search fa-left"></span></button>
</div>
</div>
    </form>
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
                                                        <select class="selectpicker col-md-12 col-xs-12" multiple data-live-search="true"
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
                        </div>
                        <div class="row">
                                        <div class="col-md-12">
<div class="panel panel-body">
                        <div class="panel-group table-responsive">
                            <table id="tableordenes" name="tableordenes" class="table table-striped datatable text">
                                <thead>
                                    <tr>

                                        <th>No. Orden</th>
                                        <th>Descripción</th>
                                        <th>Emisión</th>
                                        <th>Requerida</th>
                                        <th>Almacen</th>
                                        <th>Importe</th>
                                        <th>Descuento</th>
                                        <th>Total</th>
                                        <th>Estatus</th>
                                        <th>Desglose orden</th>
                                        <th>Generar aclaración</th>
                                        
<!--INICIO DE ROWS PARA ÁPAGOS BY DM
<th>MOV</th>
<th>MOVID</th>
<th>IDCOMPRA</th>
<th>DESCUENTO TOTAL</th>
<th>DescuentoCedis</th>
<th>DescuentoPublicidad</th>
<TH>ESTATUS</TH>
<TH>DETALLE</TH>
<TH>GENERAR ACLARACION</TH>
-->
                                    </tr>
                                </thead>
                                <tbody>
                                  
        <!--INICIO DE CICLO DE FOR EACH PARA MOSTRAR REGISTROS-->
        @if($ordenescompra->isEmpty())
        <tr>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td>No se encontraron resultados.</td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        
</tr>

        @else
        @foreach ($ordenescompra as $ordencomprax)          
        <tr>
        <td>{{$ordencomprax->MovID}}</td>
                                        <td>{{$ordencomprax->Mov}}</td>                                                                           
                                        <td class="resalta">{{$ordencomprax->FechaEmision}}</td>
                                        <td>{{$ordencomprax->FechaRequerida}}</td>
                                        <td >{{$ordencomprax->Almacen}}</td>
                                        <!--
                                            -----------------------------------------------------------------
                                            |||IMPORTANTE AQUI SE TOMAN LOS TIPOS DE ICONOS PARA EL IF A LA
                                            HORA DE MOSTRARLOS EN LA TABLA|||
                                            ----------------------------------------------------------------
                                            ↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓
                                            <td><span class="fa fa-exclamation btn-warning btn-sm"></span></td>
                                        <td><span class="fa fa-times btn-danger btn-sm"></span></td>
                                        ↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑↑
                                        -->
                                        <td class="resalta">{{$ordencomprax->Importe}}</td>
                                        <td>{{$ordencomprax->DescuentoTotal}}</td>
                                        <td class="resalta">{{$ordencomprax->Impuestos+$ordencomprax->Importe-$ordencomprax->DescuentoTotal}}</td>
                                        <td>@if($ordencomprax->Estatus='CONCLUIDO')<span class="fa fa-check btn-success btn-sm"></span>@elseif($ordencomprax->Estatus='PENDIENTE')<span class="fa fa-exclamation btn-warning btn-sm"></span>@elseif($ordencomprax->Estatus='CANCELADO')<span class="fa fa-times btn-danger btn-sm"></span>@endif</td>
                                        <th><a href="detalleordenes?aa={{$ordencomprax->IdCompra}}&&bb={{$ordencomprax->MovId}}&&cc={{$ordencomprax->Mov}}" class="btn btn-default btn-sm fa fa-tasks"></a>
                                        </th>
                                        <th><button class="btn btn-default btn-sm fa fa-pencil-square-o" data-toggle="modal"
                                                data-target="#modal_large"></button>
                                        </th>
                                       
                                    </tr>
            
             
                         
        @endforeach
        
@endif           
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
                                                <div class="col-md-5">
                                                    <form class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">No. Orden</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="C507340" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Descripción</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="Orden Compra Super" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Emisión</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="21/08/2018" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Requerida</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="14/09/2018">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Almacen</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="date" class="form-control" disabled value="CEDIS">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Importe</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="101,747.28" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Descuento</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="0.00" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-5 col-xs-12 control-label">Total</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="128,026.84" />
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>
                                                <div class="col-md-7">
                                                    <form class="form-horizontal">
                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Estatus
                                                                orden</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <input type="text" class="form-control" disabled value="Pendiente" />
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Tipo
                                                                aclaración</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <select class="form-control select">
                                                                    <option selected="selected">Seleccionar</option>
                                                                    <option>Diferencia en pagos</option>
                                                                    <option>Dudas en créditos o desuentos</option>
                                                                    <option>Devoluciones</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 col-xs-12 control-label">Asignar a:</label>
                                                            <div class="col-md-7 col-xs-12">
                                                                <select class="form-control select">
                                                                    <option selected="selected">Seleccionar</option>
                                                                    <option>Proveedor</option>
                                                                    <option>Almacenista</option>
                                                                    <option>Transporte</option>
                                                                    <option>Contabilidad</option>
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
        </div>                             
        <!-- END PAGE CONTAINER -->
@endsection