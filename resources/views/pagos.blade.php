@extends('layouts.master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery-3.3.1.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>                
                <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>                    
@section('content')
  <!-- PAGE TITLE -->
  
  <div class="page-title">
                <h2><span class="fa fa-tasks"></span> Pagos</h2>
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
    <label class="col-md-9  control-label">Folio Entrada</label>
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
    
    </select>
                                            </div>
                                            <div class="col-md-2 form-group">
    <label class="col-md-12 control-label">Sucursal</label>
    <select multiple id="sucursal" name="sucursal[]" class="form-control select col-md-12 col-xs-12" name="sucursalbusc" id="sucursalbusc" data-live-search="true" title="--Seleccionar--">
        
        
    </select>
</div>
                                    <div class="col-md-1 pull-right">                                            
                                                <button class="btn btn-success pull-right" style="margin-top:10px" id="btnBuscarConfP">Filtrar <span class="fa fa-search fa-left"></span></button>
                                            </div>
                                    </div>
                                        </form>
                                    <!--termina-->


                                </div>
                            </div>
                            


                        <!-- END ACCORDION -->
                        <!--termina-->
                        
                        <div class="modal modal-fullscreen fade" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span
                                                class="sr-only">Close</span></button>
                                        <div class="modal-title col-md-12">
                                            <h5>Axsis Tecnología</h5>
                                            <label>No. de orden: C507340</label>
                                        </div>
                                        <h4 class="modal-title" id="largeModalHead">Desglose de compra</h4>
                                    </div>

                                    <div class="modal-body">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-12">

                                                    <div class="block">


                                                        <div class="show-submit">
                                                            <ul>
                                                                <li>
                                                                    <a href="#step-1">
                                                                        <span class="stepNumber">1</span>
                                                                        <span class="stepDesc">Detalle de orden
                                                                            <br /><small>Paso 1</small></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#step-2">
                                                                        <span class="stepNumber">2</span>
                                                                        <span class="stepDesc">Detalle de
                                                                            entrega<br /><small>Paso
                                                                                2</small></span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#step-3">
                                                                        <span class="stepNumber">3</span>
                                                                        <span class="stepDesc">Detalle de pago<br /><small>Paso
                                                                                3</small></span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <div id="step-1">
                                                                <table class="table text">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Fecha de orden: 21/08/2018</th>
                                                                            <th>Fecha de vecimiento: 05/09/2018</th>
                                                                            <th>Referencia: FA394662</th>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table text">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Cantidad</th>
                                                                            <th>Almacen</th>
                                                                            <th>Artículo</th>
                                                                            <th>Descripción</th>
                                                                            <th>Unidad</th>
                                                                            <th>Empaque</th>
                                                                            <th>%Desc.</th>
                                                                            <th>Costo</th>
                                                                            <th>Unitario</th>
                                                                            <th>Importe</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table text">
                                                                    <tbody>
                                                                        <tr>
                                                                            <th rowspan=4>Observaciones:</th>
                                                                            <th>importe: 114,675.64</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Descuento: 32,647.70</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Subtotal: 148,647.70</th>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>IEPS: 0.00</th>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div id="step-2">
                                                                <table class="table text">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>Numero de entrada: C400313</td>
                                                                            <td>Fecha: 26/07/2018</td>
                                                                            <td>Almacen: CEDIS</td>
                                                                            <td>Referencia: FA00878178</td>
                                                                            <td>Importe: 135,466.53</td>
                                                                            <td>Descuento: 25,366.20</td>
                                                                            <td>Total: 151,641.35</td>
                                                                            <td>Estado: Concluido</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table text">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Numero de entrada</th>
                                                                            <th>Cantidad entregada</th>
                                                                            <th>Almacen</th>
                                                                            <th>Artículo</th>
                                                                            <th>Descripción</th>
                                                                            <th>Unidad</th>
                                                                            <th>Empaque</th>
                                                                            <th>%Desc.</th>
                                                                            <th>Costo</th>
                                                                            <th>Unitario</th>
                                                                            <th>Importe</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>C637487</td>
                                                                            <td>27</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>7,763.85</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>C637487</td>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td>5</td>
                                                                            <td>431.32</td>
                                                                            <td>287.55</td>
                                                                            <td>8,194.18</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>C637487</td>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>C637487</td>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>C637487</td>
                                                                            <td>30</td>
                                                                            <td>CEDIS</td>
                                                                            <td>792098376472</td>
                                                                            <td>LIMPIADOR BREF LITRO</td>
                                                                            <td>CAJA</td>
                                                                            <td>1.00</td>
                                                                            <td></td>
                                                                            <td></td>
                                                                            <td>287.55</td>
                                                                            <td>8,625.50</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                            <div id="step-3">
                                                                <table class="table text">
                                                                    <tbody>
                                                                        <th>Desglose: </th>
                                                                        <th>Cheque: C199008</th>
                                                                        <th>E</th>
                                                                        <th>Forma de pago: Cheque Electrónico</th>
                                                                        <th>Estado: Concluido</th>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table text">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Fecha: </th>
                                                                            <th>Movimiento: </th>
                                                                            <th>Clave: </th>
                                                                            <th>Concepto: </th>
                                                                            <th>Factura: </th>
                                                                            <th>Endoso: </th>
                                                                            <th>Importe: </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Credito proveedor</td>
                                                                            <td>C707563</td>
                                                                            <td>Descuento CEDIS</td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>-3,748.23</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Desc publicidad</td>
                                                                            <td>C707522</td>
                                                                            <td>Descuento publicidad</td>
                                                                            <td>Desc publicidad C707522</td>
                                                                            <td></td>
                                                                            <td>-1,738.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399166</td>
                                                                            <td></td>
                                                                            <td>FA00873005</td>
                                                                            <td></td>
                                                                            <td>8220.50</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Credito proveedor</td>
                                                                            <td>C707563</td>
                                                                            <td>Descuento CEDIS</td>
                                                                            <td>FA00873005</td>
                                                                            <td></td>
                                                                            <td>-205.52</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Desc publicidad</td>
                                                                            <td>C707522</td>
                                                                            <td>Descuento publicidad</td>
                                                                            <td>Desc publicidad C707695</td>
                                                                            <td></td>
                                                                            <td>-82.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>22/08/2018</td>
                                                                            <td>Entrada con gastos</td>
                                                                            <td>C399068</td>
                                                                            <td></td>
                                                                            <td>FA00872103</td>
                                                                            <td></td>
                                                                            <td>173,602.21</td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <!-- END WIZARD WITH SUBMIT BUTTON -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                            </div>



                        <!-- END DEFAULT DATATABLE -->


                        <div class="panel-group table-responsive">
                            <table class="table table-striped datatable text">
                                <thead>
                                    <tr>
                                        <th>No. Pago</th>
                                        <th>Proveedor</th>
                                        <th>Fecha</th>
                                        <th>Forma de pago</th>
                                        <th>Total</th>
                                        <th>Estatus</th>
                                        <th>Desglose pago</th>
                                        <th>Generar aclaración</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                </tr>
                              
                         
                                </tbody>
                            </table>
                            <!--INICIO DE MODAL DE ACLARACIONES-->
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