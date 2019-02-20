<?php

namespace App\Http\Controllers;
//añadir todos los use correctos
use App\User;
use App\Proveedor;
//terminar de añadir todos los use correctos
use Illuminate\Http\Request;
use PDF;
class PDFController extends Controller
{
    //EXPORT DE PROVEEDORES
  public function export_pdf()
  {
  //FETCHING A LA FECHA PARA QUE NO SE REPITA EL ARCHIVO
    $ldate = date('d-m-Y');
  //trae todos los datos de la bd
  //cambiar el modelo correcto
  $data = Proveedor::get();
  // envia datos a la vista que sera nuestro pdf
  $pdf = PDF::loadView('pdfusuarios', array('data' => $data));
  // si deseamos guardar se usa la funcion store
  $pdf->save(storage_path().'_filename.pdf');
  // aqui descargamos el pdf,podemos cambiarle el nombre
  return $pdf->download('Proveedores_'.$ldate.'.pdf');
  }
  //EXPORT DE ORDENES DE COMPRA
  public function export_pdf_ordenescompra()
  {
      //FETCHING A LA FECHA PARA QUE NO SE REPITA EL ARCHIVO
    $ldate = date('d-m-Y');
    //trae todos los datos de la bd
    //cambiar el modelo correcto
    $data = User::get();
    // envia datos a la vista que sera nuestro pdf
    $pdf = PDF::loadView('pdfordencompra', array('data' => $data));
    // si deseamos guardar se usa la funcion store
    $pdf->save(storage_path().'_filename.pdf');
    // aqui descargamos el pdf,podemos cambiarle el nombre
    return $pdf->download('Ordenes_Compra_'.$ldate.'.pdf');
  }
  //EXPORT DE ORDENES DE ENTREGA
  public function export_pdf_entrega()
  {
      //FETCHING A LA FECHA PARA QUE NO SE REPITA EL ARCHIVO
    $ldate = date('d-m-Y');
    //trae todos los datos de la bd
    //cambiar el modelo correcto
    $data = User::get();
    // envia datos a la vista que sera nuestro pdf
    $pdf = PDF::loadView('pdfordenentrega', array('data' => $data));
    // si deseamos guardar se usa la funcion store
    $pdf->save(storage_path().'_filename.pdf');
    // aqui descargamos el pdf,podemos cambiarle el nombre
    return $pdf->download('Ordenes_entrega_'.$ldate.'.pdf');
  }
    //EXPORT DE ORDENES DE PAGOS
    public function export_pdf_pagos()
    {
    //FETCHING A LA FECHA PARA QUE NO SE REPITA EL ARCHIVO
    $ldate = date('d-m-Y');
     //trae todos los datos de la bd
     //cambiar el modelo correcto
    $data = User::get();
    // envia datos a la vista que sera nuestro pdf
    $pdf = PDF::loadView('pdfordenpagos', array('data' => $data));
    // si deseamos guardar se usa la funcion store
    $pdf->save(storage_path().'_filename.pdf');
    // aqui descargamos el pdf,podemos cambiarle el nombre
    return $pdf->download('Pagos_'.$ldate.'.pdf');
    }

}
