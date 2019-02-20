<?php
namespace App\Http\Controllers;

use App\Exports\UsersExport;
use App\Exports\ProveedorExport;
use App\Exports\CompraExport;
use App\Exports\EntregaExport;
use App\Exports\PagosExport;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

use Illuminate\Http\Request;

class ExcelController extends Controller
{
    
    public function export_proveedores()
    {
        $ldate = date('d-m-Y');
        return Excel::download(new ProveedorExport, 'proveedores_'.$ldate.'.xlsx');
    }  
    //ESTE ES EL EXPORT CORRECTO DE PROVEEDORES EL OTRO LO TENGO DE PRUEBA HASTA QUE TENGA LAS
    //TABLAS QUE NECESITO
    public function export_proveedoresFINAL()
    {
        $ldate = date('d-m-Y');
        return Excel::download(new ProveedorExport, 'proveedores_'.$ldate.'.xlsx');
    }  
    public function export_ordencompra()
    {
        $ldate = date('d-m-Y');
        return Excel::download(new CompraExport, 'orden_compra_'.$ldate.'.xlsx');
    }  
    public function export_ordenentrega()
    {
        $ldate = date('d-m-Y');
        return Excel::download(new EntregaExport, 'users_'.$ldate.'.xlsx');
    }  
    public function export_pagos()
    {
        $ldate = date('d-m-Y');
        return Excel::download(new PagosExport, 'users'.$ldate.'.xlsx');
    }  

}
