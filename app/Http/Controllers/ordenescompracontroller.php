<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Compra;
use Auth;
use Redirect;
use App\Directorio;
use Session;
use App\Proveedor;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ordenescompracontroller extends Controller
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

    $id = Auth::id();
    $COMP=   $ordenescompra = DB::table('users')
    ->select('Rol.TipoRol','Rol.Nombre','name')
    ->join('Rol','Rol.idRol','=','users.idRol')
    ->where('users.id','=',$id)->get();
$esadmin= $ordenescompra = DB::table('users')
->select('Rol.TipoRol','Rol.Nombre as rolee','name')
->join('Rol','Rol.idRol','=','users.idRol')
->where('users.id','=',$id)->first()->rolee;
$esadmin=preg_match('/admin/i', $esadmin);
//SE EXTRAE EL ID DE PROVEEDOR
$provid= DB::table('users')
->select('users.proveedor as idprov','Rol.Nombre as rolee','name')
->join('Rol','Rol.idRol','=','users.idRol')
->where('users.id','=',$id)->first()->idprov;

    //QUERY ORIGINAL DE MERCO
//QUERY PARA ADMIN DE encabezados
if($urlperiodo==null&&$urlinputx==null&&$urlestatus==null&&$urlproveedor==null&&$urlsucursal==null&&$esadmin==1){
    $ordenescompra = DB::table('ChequeWebDesgloseCompra')
    ->select('ChequeWebDesgloseCompra.*','compra.MOV','compra.MovId','compra.descuentoglobal as Descuentoglobal','compra.importe as Importe',
    DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),
    'estatus','Almacen','Impuestos')
    ->join('Compra','compra.idintelisis','=','ChequeWebDesgloseCompra.idcompra')
    ->where('compra.Mov','=','Orden Compra Super')
    ->take(1000)->get();
    $sucursales=Directorio::get();
    $proveedores = Proveedor::get();
    return view('ordenescompra',compact('ordenescompra','sucursales','proveedores','COMP','ok'));   
}
//QUERY PARA PROVEEDOR de encabezados
if($urlperiodo==null&&$urlinputx==null&&$urlestatus==null&&$urlproveedor==null&&$urlsucursal==null&&$esadmin==0){
    $ordenescompra = DB::table('ChequeWebDesgloseCompra')
    ->select('ChequeWebDesgloseCompra.*','compra.MOV','compra.MovId','compra.descuentoglobal as Descuentoglobal','compra.importe as Importe',
    DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),
    'estatus','Almacen','Impuestos')
    ->join('Compra','compra.idintelisis','=','ChequeWebDesgloseCompra.idcompra')
    ->where('compra.Mov','=','Orden Compra Super')
    ->where('compra.proveedor','=',$provid)
    ->where('Mov','=','Orden Compra Super')
    ->take(1000)->get();
    $sucursales=Directorio::get();
    $proveedores = Proveedor::get();
    return view('ordenescompra',compact('ordenescompra','sucursales','proveedores','COMP','ok'));   
}
//QUERY DINAMICO SI LOS CAMPOS NO ESTAN VACIOS PARA EL PROVEEDOR
if(($urlperiodo!=null||$urlinputx!=null||$urlestatus!=null||$urlproveedor!=null||$urlsucursal!=null)&&$esadmin==0){
    $query = DB::table('ChequeWebDesgloseCompra')
    ->select('ChequeWebDesgloseCompra.*','compra.MOV','compra.MovId','compra.importe as Importe',
    DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),
    'estatus','Almacen','Impuestos')    
    ->join('Compra','compra.idintelisis','=','ChequeWebDesgloseCompra.idcompra')
    ->where('Mov','=','Orden Compra Super');
}
//QUERY DINAMICO SI LOS CAMPOS NO ESTAN VACIOS PARA EL ADMIN
if($urlperiodo!=null||$urlinputx!=null||$urlestatus!=null||$urlproveedor!=null||$urlsucursal!=null&&$esadmin==1){
    $query = DB::table('ChequeWebDesgloseCompra')
    ->select('ChequeWebDesgloseCompra.*','compra.MOV','compra.MovId','compra.importe as Importe',
    DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),
    'estatus','Almacen','Impuestos')
    ->where('compra.Mov','=','Orden Compra Super')
    ->join('Compra','compra.idintelisis','=','ChequeWebDesgloseCompra.idcompra');
}
//INICIO DE QUERY DINAMICO PARA ADMIN
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
if($esadmin==0){
    $query->where('compra.proveedor','=',$provid);
 }
$ordenescompra=$query->take(1000)->get();
//armado del query para filtro
 $queryasql=$query->toSql();
 $sucursales=Directorio::get();
 $combomostrar= DB::table('prov')
 ->select('prov.*');
 //combo para mostrar proveedores si es admin o no
 if($esadmin==0){
    $combomostrar->where('Proveedor','=',$provid);
 }
 $proveedores=$combomostrar->get();

 
 return view('ordenescompra',compact('ordenescompra','sucursales','proveedores','COMP','ok'));      
    

    }
}
