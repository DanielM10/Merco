<?php

namespace App\Http\Controllers;
use Session;
use Redirect;
use App\Rol;
use App\Proveedor;
use App\User;
use App\Menu;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class usuariocontroller extends Controller
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
    public function getcombos($id) {
        $internos =Rol::where('TipoRol', $id)->where('Activo','=','True')                     
        ->pluck('IdRol','Nombre');

        return json_encode($internos);
    }

    public function index()
    {
       
        $internos =Rol::where('TipoRol', '=', 'Interno')->where('Activo','=','True')                     
        ->get();
        //QUERY CON JOIN
        $usuarios=DB::table('users')
        ->select('users.*','Rol.TipoRol as TipoRol','Rol.IdRol as IdRol2')
        ->join('Rol','Rol.IdRol','=','users.IdRol')
        ->where(['users.Activo' => 'True'])
        ->get();
        //QUERY ORIGINAL
        $proveedores =Rol::where('TipoRol', '=', 'Proveedor')->where('Activo','=','True')                     
        ->get();
        $proveedorescombo=Proveedor::where('Activo','=','True')->get();
        $menusx=Menu::where('Activo','=','True')->get();
        $longpass=DB::table('Configuracion')->select('Valor')->where('Descripcion','=','Caracteres Minimos')->first()->Valor;
return view('usuario',compact('usuarios','internos','proveedores','proveedorescombo','menusx','longpass'));    
    }
    public function create(){
        return view('usuario');
    }
    public function store(Request $request){
        $id = Auth::id();
        $url=$request->path();
        $idpantalla=DB::table('Menu')
        ->select('IdMenu')
        ->where('Descipcion','=','Usuarios')->first()->IdMenu;
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
    Session::flash('passnotupdate', 'No cuentas con permisos para editar.' );
    return redirect('usuario');
}


         $num = mt_rand(100000,999999); 
        $emailverify=User::select(['email'=> $request->email])->where(['email'=>$request->email])->count();
        if($emailverify!=0){
            Session::flash('passnotupdate', 'Ya hay un usuario registrado con ese mail' );
            return back();
        }
         
        else{
            $passwordx=$request->password;
    $user2 = DB::table('users')->insert([
            'email'=> $request->email,
            'password'=>bcrypt($request->password),
            'name' => $request->name,
            'ApPaterno' => $request->ApPaterno,
            'ApMaterno' => $request->ApMaterno,       
            'idrol' => $request->Rol,
            'Activo' => $request->Activo2,
            'Bloqueado' => $request->Bloqueado2,
            'IdUCreo' => $request->IdUCreo,            
            'Proveedor' => $request->Proveedor,
            'FechaContraseña'=>$request->Fechacreous,
        ]);
$idxusuario=DB::table('users')->where('email','=',$request->email)->first()->id;      
$user3=DB::table('Menu')->where('Activo','=','True')->get();
foreach($user3 as $usuario){
    DB::table('UsuarioPermisos')->insert([
        'IdMenu'=>$usuario->IdMenu,
        'IdUsuario'=>$idxusuario,
        'Ver'=>1,
        'Guardar'=>1,
        'Modificar'=>1,
        'Eliminar'=>1,
    ]);
}

$user=$request->all();
        


        Mail::to($request->email)->send(new WelcomeMail($user));
        if( count(Mail::failures()) > 0 ) {

            Session::flash('passnotupdate', 'El usuario se creo pero hubo un problema al enviar el email' );
            return back();
         
         } else {
            Session::flash('adduser', 'El usuario se creo Exitosamente,revise su email.' );
            return back();
         }

    }
    }
    public function passupdate(Request $request){


        
        $user1 = User::where('id','=',$request->idusrx)->get()->first();
        $passnormal=User::where([
            'id' => $request->idusrx            
        ])->get()->first()->password;
        $Configuracion1 = Validator::make($request->all(), [
            'oldpass' => 'required|min:4',
            'pass' => 'required|min:4',
            'passconf' => 'required|min:4',                   
        ],[

            'name.required' => 'Name is required',

            'validation.email' => 'asdsad is required'

        ]);        
       $checkhash=Hash::check($request->oldpass,$user1->password);
       if ($Configuracion1->fails()) {
            Session::flash('passnotupdate', 'Llena todos los campos requeridos.' );
            return back();
        }
        else if($request->pass!=$request->passconf){
            Session::flash('passnotupdate', 'El campo "contraseña nueva" debe coincidir con la confirmacion.' );
            return back();
        }
       else if ($checkhash==true) {
            $pass = User::where(
                [
                     'id' => $request->idusrx            
                 ]
                );
             $pass->update(
                [                
                'password'=>  bcrypt($request->pass),     
                'FechaContraseña'=>  $request->contraupdate                         
                ]               
            );   
            Session::flash('passupdate', 'Contraseña modificada correctamente.' );
            return redirect('usuario');
           }  
           else if($checkhash==false)   
           Session::flash('passnotupdate', 'La contraseña anterior no coincide' );
           return redirect('usuario');
    }
    public function cambiopass()
    {
        return view('cambiopass');
    }
    public function update(Request $request)
    {
        $id = Auth::id();
        $url=$request->path();
        $idpantalla=DB::table('Menu')
        ->select('IdMenu')
        ->where('Descipcion','=','Usuarios')->first()->IdMenu;
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
    Session::flash('passnotupdate', 'No cuentas con permisos para editar.' );
    return redirect('usuario');
}


        $usersx = Validator::make($request->all(), [
            'id' => 'required'               
        ]);
        $validadoremail=User::select('email', '=', $request->email )
        ->where('id', '=', $request->iduser)->count();
        $validadoremail2=User::select('email', '!=', $request->email )
        ->count();        
        if ($validadoremail==1 and $validadoremail2==0) {
            Session::flash('erroruser', 'El email ya se encuentra registrado.' );
            return redirect('usuario');
        }          
        else{
         $pass = User::where(
            [
                 'id' => $request->iduser            
             ]
            );
         $pass->update(
            [
            'idrol'=> $request->Rol1,     
            'Proveedor' => $request->Proveedor1,
            'email'=> $request->email,          
            'name' => $request->name,
            'ApPaterno' => $request->ApPaterno,
            'ApMaterno' => $request->ApMaterno,                     
            'Activo' => $request->Activo1,
            'Bloqueado' => $request->Bloqueado1,
            'IdUMod' => $request->IdUMod,            
            ]
        );   
         
         

        Session::flash('modificaruser', 'Cambios guardados correctamente.' );
        return redirect()->back()->with('message','aaaaaaaaaaamalo');
    }
        
    }
    
    public function update2(Request $request){
        $user1 = User::where('id','=',$request->idusrx)->get()->first();
        $passnormal=User::where([
            'id' => $request->idusrx            
        ])->get()->first()->password;
        $Configuracion1 = Validator::make($request->all(), [
            'oldpass' => 'required|min:4',
            'pass' => 'required|min:4',
            'passconf' => 'required|min:4',                   
        ],[

            'name.required' => 'Name is required',

            'validation.email' => 'asdsad is required'

        ]);        
       $checkhash=Hash::check($request->oldpass,$user1->password);
       if ($Configuracion1->fails()) {
            Session::flash('passnotupdate', 'Llena todos los campos requeridos.' );
            return back();
        }
        else if($request->pass!=$request->passconf){
            Session::flash('passnotupdate', 'El campo "contraseña nueva" debe coincidir con la confirmacion.' );
            return back();
        }
       else if ($checkhash==true) {
            $pass = User::where(
                [
                     'id' => $request->idusrx            
                 ]
                );
             $pass->update(
                [                
                'password'=>  bcrypt($request->pass),                              
                ]
            );   
            Session::flash('passupdate', 'Contraseña modificada correctamente.' );
            return redirect('cambiopass');
           }  
           else if($checkhash==false)   
           Session::flash('passnotupdate', 'La contraseña anterior no coincide' );
           return redirect('cambiopass');
    }
    public function updatepermisos(){
        Session::flash('passupdate', 'Permisos modificados correctamente.' );
            return redirect()->back();
    }
}
