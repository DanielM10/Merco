<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class detallesController extends Controller
{
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function detalleordenes(Request $request)
    {
        
        $urlinputx = $request->input('aa');
        $int = (int)$urlinputx;
        if($urlinputx!=null){
            //query original merc
            //$ordenescompra = DB::table('Compra')->where('MovId', $urlinputx)->get();
$orden = DB::table('compra')
->select('Comprad.*','compra.*','compra.DescuentoGlobal as descuentog','ChequeWebDesgloseCompra.*',DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->get();

$ordenescompradetalle = DB::table('compra')
->select('prov.proveedor','prov.nombre as provnombre','prov.direccion as provdireccion','prov.delegacion as provdelegacion','prov.codigopostal as provcodigopostal','prov.estado as provestado','Comprad.*','Art.descripcion1 as Descripcion1','compra.*','ChequeWebDesgloseCompra.*',
DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),DB::raw('ROUND(comprad.importe,2) as importein'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->join('prov','compra.proveedor','=','prov.proveedor')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->groupBy('COMPRA.idcompra','Comprad.IVA','Comprad.IEPS','comprad.articulo','prov.proveedor','prov.nombre','prov.direccion','prov.delegacion','prov.codigopostal','prov.estado','comprad.id','comprad.renglonid','comprad.cantidad','comprad.costo','comprad.impuesto1','comprad.impuesto2','comprad.impuesto3','comprad.descuentolinea','comprad.descuentoimporte','comprad.aplica','comprad.aplicaid','comprad.unidad','comprad.factor','comprad.cantidadinventario','comprad.importe'
,'art.descripcion1','compra.idintelisis','compra.empresa','compra.mov','compra.movid','compra.fechaemision','compra.ultimocambio','compra.concepto','compra.moneda','compra.tipocambio','compra.usuario','compra.referencia','compra.observaciones','compra.estatus','compra.proveedor','compra.formaenvio','compra.fecharequerida',
'compra.almacen','compra.condicion','compra.descuentoglobal','compra.importe','compra.impuestos','compra.origentipo','compra.origen','compra.origenid','compra.sucursal'
,'ChequeWebDesgloseCompra.Mov','ChequeWebDesgloseCompra.MovID','ChequeWebDesgloseCompra.IdCompra','ChequeWebDesgloseCompra.DescuentoTotal','ChequeWebDesgloseCompra.DescuentoCedis','ChequeWebDesgloseCompra.DescuentoPublicidad'
)
->get();
$topdetalle = DB::table('compra')
->select('prov.proveedor','prov.nombre as provnombre','prov.direccion as provdireccion','prov.delegacion as provdelegacion','prov.codigopostal as provcodigopostal','prov.estado as provestado','Comprad.*','Art.descripcion1 as Descripcion1','compra.*','ChequeWebDesgloseCompra.*',
DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),DB::raw('ROUND(comprad.importe,2) as importein'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->join('prov','compra.proveedor','=','prov.proveedor')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->groupBy('COMPRA.idcompra','Comprad.IVA','Comprad.IEPS','comprad.articulo','prov.proveedor','prov.nombre','prov.direccion','prov.delegacion','prov.codigopostal','prov.estado','comprad.id','comprad.renglonid','comprad.cantidad','comprad.costo','comprad.impuesto1','comprad.impuesto2','comprad.impuesto3','comprad.descuentolinea','comprad.descuentoimporte','comprad.aplica','comprad.aplicaid','comprad.unidad','comprad.factor','comprad.cantidadinventario','comprad.importe'
,'art.descripcion1','compra.idintelisis','compra.empresa','compra.mov','compra.movid','compra.fechaemision','compra.ultimocambio','compra.concepto','compra.moneda','compra.tipocambio','compra.usuario','compra.referencia','compra.observaciones','compra.estatus','compra.proveedor','compra.formaenvio','compra.fecharequerida',
'compra.almacen','compra.condicion','compra.descuentoglobal','compra.importe','compra.impuestos','compra.origentipo','compra.origen','compra.origenid','compra.sucursal'
,'ChequeWebDesgloseCompra.Mov','ChequeWebDesgloseCompra.MovID','ChequeWebDesgloseCompra.IdCompra','ChequeWebDesgloseCompra.DescuentoTotal','ChequeWebDesgloseCompra.DescuentoCedis','ChequeWebDesgloseCompra.DescuentoPublicidad'
)
->get();

$detalleiva=
DB::table('compra')
->select(DB::raw('SUM((((comprad.importe)*(1-compra.descuentoglobal/100) )*(CASE WHEN impuesto2 IS NULL OR impuesto2=0 THEN 1 ELSE impuesto2 END))*(impuesto1/100)) as imx'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->get();
$detalleieps=
DB::table('compra')
->select(DB::raw('SUM(((comprad.importe)*(1-compra.descuentoglobal/100))*(CASE WHEN comprad.impuesto2 IS NULL OR comprad.impuesto2=0 THEN 1 ELSE comprad.impuesto2/100 END)) as ieps'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->get();


            return view('detalleordenpago',compact('orden','ordenescompradetalle','detalleiva','detalleieps','topdetalle'));
        }
        else{       
            $ordenescompra = null;    
            return view('detalleordenpago', ['ordenescompra' => $ordenescompra]);
        }
      
    }
    public function detalleentregas(Request $request)
    {
        $urlinputx = $request->input('aa');
        if($urlinputx!=null){
            //query original merc
            //$ordenescompra = DB::table('Compra')->where('MovId', $urlinputx)->get();
$orden = DB::table('compra')
->select('Comprad.*','compra.*','compra.DescuentoGlobal as descuentog','ChequeWebDesgloseCompra.*',DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->get();

$ordenescompradetalle = DB::table('compra')
->select('prov.proveedor','prov.nombre as provnombre','prov.direccion as provdireccion','prov.delegacion as provdelegacion','prov.codigopostal as provcodigopostal','prov.estado as provestado','Comprad.*','Art.descripcion1 as Descripcion1','compra.*','ChequeWebDesgloseCompra.*',
DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),DB::raw('ROUND(comprad.importe,2) as importein'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->join('prov','compra.proveedor','=','prov.proveedor')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->groupBy('COMPRA.idcompra','Comprad.IVA','Comprad.IEPS','comprad.articulo','prov.proveedor','prov.nombre','prov.direccion','prov.delegacion','prov.codigopostal','prov.estado','comprad.id','comprad.renglonid','comprad.cantidad','comprad.costo','comprad.impuesto1','comprad.impuesto2','comprad.impuesto3','comprad.descuentolinea','comprad.descuentoimporte','comprad.aplica','comprad.aplicaid','comprad.unidad','comprad.factor','comprad.cantidadinventario','comprad.importe'
,'art.descripcion1','compra.idintelisis','compra.empresa','compra.mov','compra.movid','compra.fechaemision','compra.ultimocambio','compra.concepto','compra.moneda','compra.tipocambio','compra.usuario','compra.referencia','compra.observaciones','compra.estatus','compra.proveedor','compra.formaenvio','compra.fecharequerida',
'compra.almacen','compra.condicion','compra.descuentoglobal','compra.importe','compra.impuestos','compra.origentipo','compra.origen','compra.origenid','compra.sucursal'
,'ChequeWebDesgloseCompra.Mov','ChequeWebDesgloseCompra.MovID','ChequeWebDesgloseCompra.IdCompra','ChequeWebDesgloseCompra.DescuentoTotal','ChequeWebDesgloseCompra.DescuentoCedis','ChequeWebDesgloseCompra.DescuentoPublicidad'
)
->get();
$topdetalle = DB::table('compra')
->select('prov.proveedor','prov.nombre as provnombre','prov.direccion as provdireccion','prov.delegacion as provdelegacion','prov.codigopostal as provcodigopostal','prov.estado as provestado','Comprad.*','Art.descripcion1 as Descripcion1','compra.*','ChequeWebDesgloseCompra.*',
DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),DB::raw('ROUND(comprad.importe,2) as importein'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->join('prov','compra.proveedor','=','prov.proveedor')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->groupBy('COMPRA.idcompra','Comprad.IVA','Comprad.IEPS','comprad.articulo','prov.proveedor','prov.nombre','prov.direccion','prov.delegacion','prov.codigopostal','prov.estado','comprad.id','comprad.renglonid','comprad.cantidad','comprad.costo','comprad.impuesto1','comprad.impuesto2','comprad.impuesto3','comprad.descuentolinea','comprad.descuentoimporte','comprad.aplica','comprad.aplicaid','comprad.unidad','comprad.factor','comprad.cantidadinventario','comprad.importe'
,'art.descripcion1','compra.idintelisis','compra.empresa','compra.mov','compra.movid','compra.fechaemision','compra.ultimocambio','compra.concepto','compra.moneda','compra.tipocambio','compra.usuario','compra.referencia','compra.observaciones','compra.estatus','compra.proveedor','compra.formaenvio','compra.fecharequerida',
'compra.almacen','compra.condicion','compra.descuentoglobal','compra.importe','compra.impuestos','compra.origentipo','compra.origen','compra.origenid','compra.sucursal'
,'ChequeWebDesgloseCompra.Mov','ChequeWebDesgloseCompra.MovID','ChequeWebDesgloseCompra.IdCompra','ChequeWebDesgloseCompra.DescuentoTotal','ChequeWebDesgloseCompra.DescuentoCedis','ChequeWebDesgloseCompra.DescuentoPublicidad'
)
->get();

$detalleiva=
DB::table('compra')
->select(DB::raw('SUM((((comprad.importe)*(1-compra.descuentoglobal/100) )*(CASE WHEN impuesto2 IS NULL OR impuesto2=0 THEN 1 ELSE impuesto2 END))*(impuesto1/100)) as imx'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->where(['compra.idintelisis' => $int])
->where('Mov','=','Orden Compra Super')
->get();
$detalleieps=
DB::table('compra')
->select(DB::raw('SUM((((comprad.importe)*(1-compra.descuentoglobal/100))*(CASE WHEN comprad.impuesto2 IS NULL OR comprad.impuesto2=0 THEN 1 ELSE comprad.impuesto2/100 END)) as ieps'))
->join('Comprad','compra.idintelisis','=','comprad.id')
->join('ChequeWebDesgloseCompra','ChequeWebDesgloseCompra.idcompra','=','compra.idintelisis')
->join('Art','Art.articulo','=','comprad.articulo')
->where(['chequewebdesglosecompra.idcompra' => $int])
->where('Mov','=','Orden Compra Super')
->get();


            return view('detalleordenpago',compact('orden','ordenescompradetalle','detalleiva','detalleieps','topdetalle'));
        }
        else{       
            $ordenescompra = null;    
            return view('detalleordenpago', ['ordenescompra' => $ordenescompra]);
        }
      
    }
    
    public function detallepagos(){
        return view('detallepagos');
    }
}