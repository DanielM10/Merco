<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Proveedor;
use Session;
use Redirect;

class proveedorescontroller extends Controller
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
        $proveedores = Proveedor::get();
        return view('proveedores', ['proveedores' => $proveedores]);
    }
    public function update(Request $request){

        
        $pass = Proveedor::where(
            [
                 'Proveedor' => $request->noproveedorx            
             ]
            );
         $pass->update(
            [
            //'idrol'=> $request->idrol,                          
            'Nombre' => $request->nombrex,
            'Telefonos' => $request->telefonox,
            'Contacto1' => $request->contactox,
            'eMail1' => $request->correox,              
            'Categoria' => $request->categoriax,
            'Estatus' => $request->estatusx,
            'Activo' => $request->activox1,            
            ]
        );   
         
         

        Session::flash('modificaprov', 'Cambios guardados correctamente.' );
        return redirect('proveedores');        
    }
}
