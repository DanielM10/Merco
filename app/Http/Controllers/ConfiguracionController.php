<?php

namespace App\Http\Controllers;
use Session;
use Redirect;
use Artisan;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Configuracion;
use Illuminate\Support\Facades\DB;
use App\Mail\ConfigMail;
use Illuminate\Support\Facades\Mail;
class ConfiguracionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(request $request)
    {
        //
          //
          //verificamos si tiene permisos paraa 
          $id = Auth::id();
          $url=$request->path();
          $idpantalla=DB::table('Menu')
          ->select('IdMenu')
          ->where('Controlador','=',$url)->first()->IdMenu;
          $permisoeditar=DB::table('UsuarioPermisos')
          ->select('Modificar')
          ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Modificar;
          $permisoGuardar=DB::table('UsuarioPermisos')
          ->select('Guardar')
          ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Guardar;
          $permisoeliminar=DB::table('UsuarioPermisos')
          ->select('Eliminar')
          ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Eliminar;

//          $configuracion=Configuracion::orderBy('idConf','DESC')->paginate(20);
          $Configuracion1 = Configuracion::where('IdConf', 1)->first();
          $Configuracion2 = Configuracion::where('IdConf', 2)->first();
          $Configuracion3 = Configuracion::where('IdConf', 4)->first();
          $Configuracion4 = Configuracion::where('IdConf', 5)->first();
          $Configuracion5 = Configuracion::where('IdConf', 6)->first();
          $Configuracion6 = Configuracion::where('IdConf', 7)->first();
          $Configuracion7 = Configuracion::where('IdConf', 8)->first();
          $Configuracion8 = Configuracion::where('IdConf', 9)->first();
          $Configuracion9 = Configuracion::where('IdConf', 10)->first();
          $Configuracion10 = Configuracion::where('IdConf', 12)->first();
          $Configuracion11 = Configuracion::where('IdConf', 13)->first();
          

          return view('Configuracion',compact('configuracion','Configuracion1','Configuracion2','Configuracion3'
          ,'Configuracion4','Configuracion5','Configuracion6','Configuracion7','Configuracion8',
          'Configuracion9','Configuracion10','Configuracion11','permisoeditar','permisoGuardar','permisoeliminar'
        )); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Configuracion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'servidor'=>'required|numeric', 'puerto'=>'required', 'usuario'=>'required', 'password'=>'required', 'remitente'=>'required', 'ssl'=>'required', 'intentos'=>'required', 'vigencia'=>'required', 'caracteres'=>'required', 'dias'=>'required', 'correo'=>'required|email']);
        Configuracion::create($request->all());
        return redirect()->route('Configuracion')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $configuraciones=Configuracion::find($id);
        return  view('Configuracion',compact('configuraciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $configuraciones=Configuracion::find($id);
        return view('Configuracion.editar',compact('configuraciones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = Auth::id();
        $url=$request->path();
        $idpantalla=DB::table('Menu')
        ->select('IdMenu')
        ->where('Descipcion','=','Parametros del sistema')->first()->IdMenu;
        $permisoeditar=DB::table('UsuarioPermisos')
        ->select('Modificar')
        ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Modificar;
        $permisoGuardar=DB::table('UsuarioPermisos')
        ->select('Guardar')
        ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Guardar;
        $permisoeliminar=DB::table('UsuarioPermisos')
        ->select('Eliminar')
        ->where('IdMenu','=',$idpantalla)->where('idusuario','=',$id)->first()->Eliminar;
if($permisoeditar==0){
    Session::flash('errox', 'No cuentas con permisos para editar.' );
    return redirect()->back()->with('message','aaaaaaaaaaamalo');
}

        $Configuracion1 = Validator::make($request->all(), [
            'servidor' => 'required',
            'puerto' => 'required|numeric',
            'usuario' => 'required',
            'password' => 'required',
            'remitente' => 'required',
            //'ssl' => 'required',
            'intentos' => 'required|numeric',
            'vigencia' => 'required|numeric',
            'caracteres' => 'required|numeric',
            'dias' => 'required|numeric',
            'correo' => 'required|email',            

        ],[

            'name.required' => 'Name is required',

            'validation.email' => 'asdsad is required'

        ]);
        $user=$request->all();        
 Mail::to($request->usuario)->send(new ConfigMail($user));
 $abc=count(Mail::failures());
        if(count(Mail::failures()) > 0 ) {
            Session::flash('errox', 'El hubo un problema al enviar el email' );
            return back();       
         } 
         else if(count(Mail::failures()) > 0) {
            Session::flash('msg', 'Datos guardados correctamente.' );
            return back();
         }
       else if ($Configuracion1->fails()) {
            return redirect('configuracion')
                        ->withErrors($Configuracion1)
                        ->withInput();
        }
        $valoractualservidor=DB::table('Configuracion')->select('Valor')->where('Descripcion','=','Servidor')->first()->Valor;
        $valoractualpuerto=DB::table('Configuracion')->select('Valor')->where('Descripcion','=','Puerto')->first()->Valor;
        $valoractualusuario=DB::table('Configuracion')->select('Valor')->where('Descripcion','=','Usuario')->first()->Valor;
        $valoractualcontrasena=DB::table('Configuracion')->select('Valor')->where('Descripcion','=','Contraseña')->first()->Valor;
        //si nada falla actualizamos
        Configuracion::where(
            [
                'IdConf' => 1,
            
            ]
        )->update(
            [
                'Valor' =>$request->servidor,                
            ]
        );
        Configuracion::where(
            [
                'IdConf' => 2,
            
            ]
        )->update(
            [
                'Valor' =>$request->puerto,                
            ]
        );

        Configuracion::where(
            [
                'IdConf' => 4,
            
            ]
        )->update(
            [
                'Valor' =>$request->usuario,                
            ]
        );
        Configuracion::where(
            [
                'IdConf' => 5,
            
            ]
        )->update(
            [
                'Valor' =>$request->password,                
            ]
        );
        Configuracion::where(
            [
                'IdConf' => 6,
            
            ]
        )->update(
            [
                'Valor' =>$request->remitente,                
            ]
        );
      /*  Configuracion::where(
         [
                'IdConf' => 7,
            
            ]
        )->update(
            [
                'Valor' =>$request->ssl,                
            ]
        );*/
        Configuracion::where(
            [
                'IdConf' => 8,
            
            ]
        )->update(
            [
                'Valor' =>$request->intentos,                
            ]
        );
        Configuracion::where(
            [
                'IdConf' => 9,
            
            ]
        )->update(
            [
                'Valor' =>$request->vigencia,                
            ]
        );
        Configuracion::where(
            [
                'IdConf' => 10,
            
            ]
        )->update(
            [
                'Valor' =>$request->caracteres,                
            ]
        );
        Configuracion::where(
            [
                'IdConf' => 12,
            
            ]
        )->update(
            [
                'Valor' =>$request->dias,                
            ]
        );

        Configuracion::where(
            [
                'IdConf' => 13,
            
            ]
        )->update(
            [
                'Valor' =>$request->correo,                
            ]
        );
//SETEANDO CONFIGURACIONES AL .ENV VIA PHP STR REPLACE
//TRAIGO EL VALOR ACTUAL
//INICIO DEL REPLACE

$valuereplaceuno="que";
        Session::flash('msg', 'Cambios guardados correctamente.' );
        $path = base_path('.env');
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'MAIL_HOST='.$valoractualservidor, 'MAIL_HOST='.$request->servidor, file_get_contents($path)
            ));
        }        
        
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'MAIL_PORT='.$valoractualpuerto,'MAIL_PORT='.$request->puerto, file_get_contents($path)
            ));
        }
 
        
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'MAIL_USERNAME='.$valoractualusuario, 'MAIL_USERNAME='.$request->usuario, file_get_contents($path)
            ));
        }
           
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'MAIL_PASSWORD='.$valoractualcontrasena, 'MAIL_PASSWORD='.$request->password, file_get_contents($path)
            ));
        }
        Artisan::call('config:clear');        
//RETORNAMOS MENSAJE        
Session::flash('msg', 'Cambios guardados correctamente.' );
return redirect()->back()->with('message', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Configuracion::find($id)->delete();
        return redirect()->route('Configuracion')->with('success','Registro eliminado satisfactoriamente');
    }
}
