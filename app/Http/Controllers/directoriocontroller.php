<?php

namespace App\Http\Controllers;
use Session;
use Redirect;
use App\Directorio;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class directoriocontroller extends Controller
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
        $urlinputx = $request->input('busqsucursal');
        if($urlinputx!=null){
      
        $nombresuc = DB::table('Sucursal')->where('Nombre','like','%'.$urlinputx.'%');
        
        $nosuc = DB::table('Sucursal')->where('Sucursal','like','%'.$urlinputx.'%');

        $direccion = DB::table('Sucursal')->where('Direccion','like','%'.$urlinputx.'%');
                       
        $estado = DB::table('Sucursal')->where('Estado','like','%'.$urlinputx.'%');

        $latitud = DB::table('Sucursal')->where('Latitud','like','%'.$urlinputx.'%');
        
        $longitud = DB::table('Sucursal')->where('Longitud','like','%'.$urlinputx.'%');
        
        $sucursales = DB::table('Sucursal')
            ->where('sucursal', 'LIKE', '%'.$urlinputx.'%')
            ->union($nombresuc)
            ->union($nosuc)
            ->union($direccion)         
            ->union($estado)
            ->union($latitud)
            ->union($longitud)
            ->get();
                    
            return view('directorio', ['sucursales' => $sucursales]);
        }        
        else{
            $sucursales = Directorio::get();

return view('directorio', ['sucursales' => $sucursales]);       
        }
       
    }
}
