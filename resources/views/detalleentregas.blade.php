@extends('layouts.master')
 
  
@section('content')
@foreach($orden as $orden)
         @endforeach
         @foreach($detalleiva as $detalleivax)
         @endforeach
         @foreach($topdetalle as $top)
         @endforeach
         @foreach($detalleieps as $iepsx)
         @endforeach
<div class="page-title">
  <h2 style="color:#FF802D;"><span class="fa fa-tasks"></span> Flujo de compra</h2>
</div>
<div class="page-content-wrap">

<div class="row">
    <div class="col-md-12">
        <!-- START DEFAULT DATATABLE -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <!-- START ACCORDION -->
                <div class="page-title">
                                    <h4 style="color:#FF802D;"><strong>{{$orden->Proveedor}}</strong></h4>
                                    <label>{{$top->provnombre}}</label><br>
                                    <label>{{$top->provdireccion.' '.$top->provdelegacion.','.$top->provestado.' CP:'.$top->provcodigopostal}}</label><br>
                                    <label>No. de orden: {{$orden->MovID}}</label>
                                    <BR>
                                   <label>{{$ldate = date('d-m-Y')}}</label>
                                </div>
                <div class="pull-right">

                    <button class="btn btn-success pull-right fa fa-pencil-square-o" data-toggle="modal"
                        data-target="#modal_large"> Generar aclaración
                    </button>
                </div>
                <div class="modal" id="modal_large" tabindex="-1" role="dialog" aria-labelledby="largeModalHead"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span
                                        aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
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
                                                    <input type="text" class="form-control" disabled
                                                        value="A76389-1" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 col-xs-12 control-label">Origen</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <input type="text" class="form-control" disabled
                                                        value="Orden compra" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 col-xs-12 control-label">No.
                                                    Documento</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <input type="text" class="form-control" disabled
                                                        value="C87388" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 col-xs-12 control-label">Proveedor</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <input type="text" class="form-control" disabled
                                                        value="{{$orden->Proveedor}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 col-xs-12 control-label">Fecha</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <input type="text" class="form-control" disabled
                                                        value="{{$ldate = date('d-m-Y')}}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-5 col-xs-12 control-label">Referencia</label>
                                                <div class="col-md-7 col-xs-12">
                                                    <input type="text" class="form-control" disabled
                                                        value="{{$orden->Referencia}}" />
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
                <!-- END DEFAULT DATATABLE -->
          <div class="panel-body col-md-12">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">

                                            <div class="block">


                                                <div class="wizard show-submit">
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
                                                    <div id="step-1" style="display: block;" >                                                    
                                                    <table class="table text">
                                                            <tbody>
                                                                <tr>
                                <th colspan="3">Fecha de orden: {{$orden->FechaEmision}}</th>
                                <th colspan="3">Fecha de vencimiento: {{$orden->FechaRequerida}}</th>
                                <th colspan="3">Referencia:@if($orden->Referencia!=null) {{$orden->Referencia}}@else -----------@endif</th>
                                <th colspan="2">Condiciones:{{$orden->Condicion}}</th>
                                </tr>
                                </tbody>
                                                        </table>
                                <!--INICIO DEL  DIV BIEN HECHO PARA TAABLE 1-->
                               <div class="panel-body">
                                <table class="table table-striped text">    
                                <thead >                           
                              <tr>                              
                               <th>ALMACEN</th>
                               <th>ARTICULO</th>
                               <th>DESCRIPCION</th><!--JOIN CON ARTICULO-->
                               <th>CANTIDAD</th>
                               <th>UNIDAD</th>
                               <th>EMPAQUE</th>
                               <th>% DESC.</th>
                               
                               <th>COSTO UNITARIO</th>
                               <th>IMPORTE</th>
                               </tr>
</thead>
                                <tbody>
                                <!--FOR EACH DE CADA PRODUCTO
                                DUDAS: DE DONDE SALEN LOS PRODUCTOS
                                COMO SE RELACIONA COMPRA CON ORDENCOMPRA
                                Y CON ORDENCOMPRADETALLE
                                -->
                                @foreach($ordenescompradetalle as $detallex)
                                <TR>
                                <!--hacre un foreach-->
                                
                                
                                <TD>{{$detallex->Almacen}}</TD>
                                <TD>{{$detallex->Articulo}}</TD>
                                <TD>{{$detallex->Descripcion1}}</TD><!--JOIN CON ARTICULO-->
                                <TD>{{$detallex->Cantidad}}</TD>
                                <TD>{{$detallex->Unidad}}</TD>
                                <TD>{{$detallex->Factor}}</TD>
                                <TD>{{number_format($detallex->DescuentoLinea,2)}}</TD>                               
                                <TD>{{number_format($detallex->Costo,2)}}</TD><!--IMPORTE / FACTOR-->
                                <TD>{{number_format($detallex->importein,2)}}</TD><!--IMPORTE DE COMPRADCALC-->
                                <!--termina for each-->
                                </TR>
                                @endforeach
                                </tbody>
                                </table>  
                                <table class="table text">  
                                <tbody>
                                <tr>                
                               <th rowspan="6">Observaciones: {{$orden->Observaciones}}</th>
                               <!--FALTANTES-->
                               <th>IMPORTE: {{number_format($orden->Importe, 2)}}</th>
                               </tr>
                               <tr>
                               <th>Descuento: {{number_format($orden->Importe*$orden->descuentog/100,2)}}</th>
                               </tr>
                               <tr>
                               <th>Subtotal: {{number_format($orden->Importe-$orden->Importe*$orden->descuentog/100,2)}}</th>
                               </tr>
                               <tr>
                               <th>IEPS: {{number_format($iepsx->ieps,2)}}</th>
                               </tr>
                               <tr>
                               <th>IVA: {{number_format($detalleivax->imx,2)}}</th>
                               </tr>
                               <tr>
                               <th>Total: {{$orden->Observaciones}}</th>
                               </tr>
                               </tbody>
                               </table>   
                               <!--FIN FALTANTES-->                           
                               <!--FIN DEL DIV PRINCIPAL-->
                               </DIV>
                                                    </div>
                                                    <div id="step-2">
                                                    <!--CONTENIDO--->
                       <!--INICIO DE SEGUNDA PARTE--->
<br>
                       <!--INICIO DEL  DIV BIEN HECHO PARA TAABLE 1-->
                       <div class="panel-body">
                                <table class="table table-striped text">
                                <tr>
                               <th COLSPAN="2"> Numero de entrada:</th>
                               <th>Fecha: </th>
                               <th>Almacen:</th>
                               <th COLSPAN="2">Referencia:</th>
                               <th COLSPAN="2">Importe:</th>
                               <th>Descuento: </th>
                               <th COLSPAN="2">Total:</th>
                               <th>Estado:</th>                                
                                </tr>
                              <tr style="background-color:#FF802D;color:#ffffff;font-weight:bold;">
                              
                               <td>ALMACEN</td>
                               <td>ARTICULO</td>
                               <td>DESCRIPCION</td><!--JOIN CON ARTICULO-->
                               <td>CANTIDAD</td>
                               <td>UNIDAD</td>
                               <td>EMPAQUE</td>
                               <td>% DESC.</td>
                               <td>COSTO</td>
                               <td>UNITARIO</td>
                               <td>IMPORTE</td>
                               </tr>
                                <tbody border="1">
                                <!--FOR EACH DE CADA PRODUCTO
                                DUDAS: DE DONDE SALEN LOS PRODUCTOS
                                COMO SE RELACIONA COMPRA CON ORDENCOMPRA
                                Y CON ORDENCOMPRADETALLE
                                -->
                                @foreach($ordenescompradetalle as $detallex)
                                <TR>
                                <!--hacre un foreach-->                                                               
                                <TD>{{$detallex->Almacen}}</TD>
                                <TD>{{$detallex->Articulo}}</TD>
                                <TD>{{$detallex->Descripcion1}}</TD><!--JOIN CON ARTICULO-->
                                <TD>{{$detallex->Cantidad}}</TD>
                                <TD>{{$detallex->Unidad}}</TD>
                                <TD>{{$detallex->Factor}}</TD>
                                <TD>{{$detallex->DescuentoLinea}}</TD>
                                <TD>{{$detallex->Costo}}</TD>
                                <TD>{{$detallex->Cantidad}}</TD><!--IMPORTE / FACTOR-->
                                <TD>{{$detallex->Cantidad}}</TD><!--IMPORTE DE COMPRADCALC-->
                                <!--termina for each-->
                                </TR>
                                @endforeach
                                </tbody>
                                </table>  
                                <table class="table text">  
                                <tbody>
                                <tr>                
                               <th rowspan="6">Observaciones: {{$orden->Observaciones}}</th>
                               <!--FALTANTES HUGO CONFIRMA MAÑANA DE DONDE SACAR ESTOS DATOS-->
                               <th>IMPORTE: {{$orden->Importe}}</th>
                               </tr>
                               <tr>
                               <th>Descuento: {{$orden->DescuentoTotal}}</th>
                               </tr>
                               <tr>
                               <th>Subtotal: {{$orden->Observaciones}}</th>
                               </tr>
                               <tr>
                               <th>IEPS: {{$orden->Observaciones}}</th>
                               </tr>
                               <tr>
                               <th>IVA: </th>
                               </tr>
                               <tr>
                               <th>Total: {{$orden->Observaciones}}</th>
                               </tr>
                               </tbody>
                               </table>   
                               <!--FIN FALTANTES-->                           
                               <!--FIN DEL DIV PRINCIPAL-->
                               </DIV>
                                                    </div>
                                                    <div id="step-3">
                                                      <!--3ER PARTE-->
<div class="panel-body">
                                <table class="table table-striped text">
                                <tr>
                               <th colspan="3">Desglose:</th>
                               <th colspan="3">Cheque: </th>
                               <th colspan="3">Forma de pago:</th>
                               <th colspan="3">Estado:</th>                                                            
                                </tr>
                              <tr style="background-color:#FF802D;color:#ffffff;font-weight:bold;">                               
                               <td>ALMACEN</td>
                               <td>ARTICULO</td>
                               <td>DESCRIPCION</td><!--JOIN CON ARTICULO-->
                               <td>CANTIDAD</td>
                               <td>UNIDAD</td>
                               <td>EMPAQUE</td>
                               <td>% DESC.</td>
                               <td>COSTO</td>
                               <td>UNITARIO</td>
                               <td>IMPORTE</td>
                               </tr>
                               <TBODY>
                               <TD>1</TD>
                               <TD>2</TD>
                               <TD>3</TD>
                               <TD>4</TD>
                               <TD>5</TD>
                               <TD>6</TD>
                               <TD>7</TD>
                               <TD>8</TD>
                               <TD>9</TD>
                               <TD>10</TD>
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
                        </div>
                    </div>

                </div>
                <!-- PAGE CONTENT WRAPPER -->
            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->
        <!-- START SCRIPTS -->
    
        <!-- END PLUGINS -->
        <!-- START THIS PAGE PLUGINS-->
        <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
        <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-datepicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="js/plugins/codemirror/codemirror.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/xml/xml.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/javascript/javascript.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/css/css.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/clike/clike.js"></script>
        <script type='text/javascript' src="js/plugins/codemirror/mode/php/php.js"></script>
        <script type="text/javascript" src="js/plugins/summernote/summernote.js"></script>


     
        <script type="text/javascript" src="js/plugins/knob/jquery.knob.min.js"></script>
        <script type="text/javascript" src="js/plugins/owl/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/plugins/tagsinput/jquery.tagsinput.min.js"></script>
        <!-- END THIS PAGE PLUGINS-->


        <!-- START TEMPLATE -->

        <!-- Modal fullscren -->
        <script>
            $(".modal-fullscreen").on('show.bs.modal', function () {
                setTimeout(function () {
                    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
                }, 0);
            });
            $(".modal-fullscreen").on('hidden.bs.modal', function () {
                $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
            });
        </script>
        <script>
            var editor = CodeMirror.fromTextArea(document.getElementById("codeEditor"), {
                lineNumbers: true,
                matchBrackets: true,
                mode: "application/x-httpd-php",
                indentUnit: 4,
                indentWithTabs: true,
                enterMode: "keep",
                tabMode: "shift"
            });
            editor.setSize('100%', '420px');
        </script>

        <!-- /Modal fullscrean -->
        <!-- END TEMPLATE -->
        <!-- END SCRIPTS -->


@endsection