<?php

namespace App\Http\Controllers\Auth;
use Request;
use Auth;
use App\User;
use App\Configuracion;
use Redirect;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{

   
    public function __construct(){
        $this->middleware('guest',['only'=>'showLoginForm']);
    }

    public function showLoginForm(){
        return view('Login.Login');
    }

    public function login(){
        
  
}
public function postLogin()
{
    $correo=Request::get('Correo');
    $password=Request::get('password'); 

    $Existeno=User::where('email','=',$correo)->count();
    if($Existeno==0){
        return Redirect('login')->withErrors('El usuario no existe.');
    }
    // Obtenemos los datos del formulario
           
    //traemos los intentos de bloqueo   
    $intentos = DB::table('users')->select('Intentos_Bloqueo')->where('email','=',$correo)->first()->Intentos_Bloqueo;
    $bloque= DB::table('Configuracion')->select('Valor')->where('Descripcion','=','Intentos Bloqueo')->first()->Valor;    
    $restante=$bloque-$intentos;
    // Verificamos los datos
    //SOLO FALTA VER COMO DIABLOS LOGUEAR A ESTE MEN SIN PASARSE POR ALTO EL INTENTO DE BLOQUEOS
    if($intentos>=$bloque){
         User::where('email','=',$correo)->increment('Intentos_Bloqueo');
        return Redirect('login')->withErrors('Usuario bloqueado,contacte al administrador.');    
    }
    else if(Auth::attempt(['email' => $correo, 'password' => $password,'Activo'=>True,'Bloqueado'=>False])==false)     
    {      
        User::where('email','=',$correo)->increment('Intentos_Bloqueo');
        return Redirect('login')->withErrors('Usuario no autorizado.');    
    }
    else{
        Auth::attempt(['email' => $correo, 'password' => $password,'Activo'=>True,'Bloqueado'=>False]);
            return redirect('/home');
        }        
    
        
}

 //anteponemos post al nombre de la función, esto es así porque es la función
 //que recibirá datos por post
 public function post_index()
 {
 
}

    public function logout()
    {
        Auth::logout();       
        // Volvemos al login y mostramos un mensaje indicando que se cerró la sesión
//        return  redirect('/')->with('error_message', 'Logged out correctly');
return redirect('/')->withErrors([$this->username()=>trans('Se ha cerrado sesion.')]);
    }

    public function username(){
        return 'Correo';
    }

    public function getAuthPassword()
    {
        return 'password';
    }
}
