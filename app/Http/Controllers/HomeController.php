<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HomeController extends Controller
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
    public function index()
    {
        $counttotal = DB::table('Compra')->count();
        $countentregadas = DB::table('Compra')->where('Estatus','=','concluido')->count();
        $countpendientes = DB::table('Compra')->where('Estatus','=','pendiente')->count();
        $countcanceladas = DB::table('Compra')->where('Estatus','=','cancelada')->count();
        $top3compras =  $ordenescompra = DB::table('ChequeWebDesgloseCompra')
        ->select('ChequeWebDesgloseCompra.*','compra.importe as Importe',DB::raw('CONVERT(date,UltimoCambio) as UltimoCambio'),
        DB::raw('CONVERT(date,FechaEmision) as FechaEmision'),DB::raw('CONVERT(date,FechaRequerida) as FechaRequerida'),
        'estatus','Almacen','Impuestos')
        ->join('Compra','compra.id','=','ChequeWebDesgloseCompra.idcompra')
        ->take(3)->get();

        $counttotal2 = DB::table('cxp')->count();
        $countpagado2 = DB::table('cxp')->count();//PREGUNTAR QU ESTATUS SE AGARRA AQUI
        $countpendientes2 = DB::table('cxp')->count();       
        $top3pagos = DB::table('Cxp')->take(3)->get();
//variables para la tabla de aclarciones
        //  $counttotalaclaraciones=DB::table('Aclaraciones')->count();
        // $countabiertas=DB::table('Aclaraciones')->count();
        // $countproceso=DB::table('Aclaraciones')->count();
        //$countcanceladas=DB::table('Aclaraciones')->count();
        //$top3pagos = DB::table('Aclaraciones')->take(3)->get();
        return view('home',compact('counttotal','countentregadas','countpendientes','countcanceladas','top3compras','counttotal2','countpagado2','countpendientes2','top3pagos'));
    }
   
    public function showChangePasswordForm(){

       
        return view('auth.changepassword');
    }
}
