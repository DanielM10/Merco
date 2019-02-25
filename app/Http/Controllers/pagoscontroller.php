<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class pagoscontroller extends Controller
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
        $pagos = DB::table('CxpWebPortalProveedor')
                    ->select('CxpWebPortalProveedor.MovId','CxpWebPortalProveedor.Mov','prov.Nombre','cxp.FechaEmision','cxp.Importe')
                    // ->join('cxp','cxp.Mov','=','CxpWebPortalProveedor.Mov')
                    ->join('cxp', function ($join) {
                        $join->on('cxp.Mov', '=', 'CxpWebPortalProveedor.Mov')
                            ->on('cxp.MovId', '=', 'CxpWebPortalProveedor.MovId');
                    })
                    ->join('Prov','Prov.Proveedor','=','CxpWebPortalProveedor.prov')
                    // ->where('cxp.Estatus','=','Pendiente')
                    ->get();
        var_dump($pagos); exit();
        return view('pagos', compact('pagos'));
    }
}
