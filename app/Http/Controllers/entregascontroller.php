<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use Redirect;
use App\Directorio;
use Session;
use App\Proveedor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class entregascontroller extends Controller
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
    public function index(Request $request)
    {
    $urlinputx = $request->input('aa');
    $urlperiodo=$request->input('periodo');
    $urlestatus=$request->input('estatus');
    $urlproveedor=$request->input('proveedor');
    $urlsucursal=$request->input('sucursal');
    //QUERY ORIGINAL DE MERCO

if($urlperiodo==null&&$urlinputx==null&&$urlestatus==null&&$urlproveedor==null&&$urlsucursal==null){
    $ordenescompra = DB::table('ChequeWebDesgloseCompra')
    ->select('ChequeWebDesgloseCompra.*','compra.descuentoglobal as Descuentoglobal','compra.importe as Importe',
    DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),
    'estatus','Almacen','Impuestos')
    ->join('Compra','compra.id','=','ChequeWebDesgloseCompra.idcompra')
    ->take(1000)->get();
    $sucursales=Directorio::get();
    $proveedores = Proveedor::get();
    return view('entregas',compact('ordenescompra','sucursales','proveedores'));   
}

    $query = DB::table('ChequeWebDesgloseCompra')
    ->select('ChequeWebDesgloseCompra.*','compra.importe as Importe',
    DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),
    'estatus','Almacen','Impuestos')
    ->join('Compra','compra.id','=','ChequeWebDesgloseCompra.idcompra');
//INICIO DE QUERY DINAMICO
if ($urlperiodo!=null) {
    $sindiagonal=str_replace('-','*',$request->input('periodo'));
    $sindiagonal1=str_replace('/','-',$sindiagonal);
    $sinespacio=str_replace(' ','',$sindiagonal1);
    list($fechainicio, $fechafin)=explode("*", $sinespacio);
    $startDate = date("Y-m-d", strtotime($fechainicio));
    $endDate   = date("Y-m-d", strtotime($fechainicio));
   $query->whereBetween('compra.fechaemision', array($startDate,$endDate));
}
if(!empty($urlinputx)){
    $query->where(['compra.MovID' => $urlinputx]) ;   
}
if(!empty($urlestatus)){
    $query->whereIn('compra.estatus',$urlestatus);
}
if(!empty($urlproveedor)){
 
    $query->whereIn('compra.Proveedor',$urlproveedor) ;   
}
if(!empty( $urlsucursal)){
        $query->whereIn('compra.Sucursal',$urlsucursal) ;   
}
$ordenescompra=$query->take(1000)->get();
    //armado del query para filtro
 $queryasql=$query->toSql();
 $sucursales=Directorio::get();
 $proveedores = Proveedor::get(); 
 return view('entregas',compact('ordenescompra','sucursales','proveedores'));      
    

    }
}