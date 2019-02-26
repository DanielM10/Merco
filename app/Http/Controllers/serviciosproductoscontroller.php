<?php

namespace App\Http\Controllers;
use Session;
use Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Productos;
use App\Http\Controllers\Controller;

class serviciosproductoscontroller extends Controller
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
        $productos = Productos::where('Activo', '=', True)                     
        ->take(1000)->get();

        return view('serviciosproductos',['productos' => $productos]);
    }
    public function create(Request $request){
        return view('serviciosproductos');
    }
    public function store(Request $request){
        $id = Auth::id();
        $url=$request->path();
        $idpantalla=DB::table('Menu')
        ->select('IdMenu')
        ->where('Descipcion','=','Productos')->first()->IdMenu;
        $permisoeditar=DB::table('UsuarioPermisos')
        ->select('Modificar')
        ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Modificar;
        $permisoGuardar=DB::table('UsuarioPermisos')
        ->select('Guardar')
        ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Guardar;
        $permisoeliminar=DB::table('UsuarioPermisos')
        ->select('Eliminar')
        ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Eliminar;
if($permisoGuardar==0){
    Session::flash('errorproducto', 'No cuentas con permisos para guardar.' );
    return redirect('serviciosproductos');
}
        
        $verificar=Productos::where('Articulo','=',$request->SKU)->count();        
        $verifik2 = Validator::make($request->all(), [
            'Proveedor' => 'required',
            'SKU' => 'required',
            'Descripcion' => 'required',     
            'Activo' => 'required',
            'Protegido' => 'required',    
        ]);
if($verificar!=0){
    Session::flash('errorproducto', 'El SKU del producto ya se encuentra registrado.' );
        return back();
}
    else if($verifik2->fails()){
        Session::flash('errorproducto', 'Debe insertar todos los campos en el formulario.' );
        return back();
    }
    else{
      Productos::insert([
        'Proveedor' => $request->Proveedor,
        'Articulo' => $request->SKU,
        'Descripcion1' => $request->Descripcion,         
        'Activo' => $request->Activo,
        'Protegido' => $request->Bloqueado,                                
    ]);     
        Session::flash('addproducto', 'Datos agregados correctamente.' );
        return back();
    }
}
}
