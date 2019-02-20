<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Rol;
use Illuminate\Support\Facades\Validator;
class rolesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
       //SOLO DEJAR PASAR A LOS USUARIOS AUTENTICADOS
       public function __construct()
       {
           $this->middleware('auth');
       }
   
    public function index()
    {
        $users = Rol::where('Activo', '=', True)                     
        ->get();

return view('roles', ['users' => $users]);       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usersx = Validator::make($request->all(), [
            'TipoRol' => 'required',
            'Nombre' => 'required',          
            'Activox' => 'required' 
        ]);
        $validationnombre=Rol::where('Nombre','=',$request->Nombre)->count();
        //aqui verificamos que no exista
        if($validationnombre!=0){
            Session::flash('errorrol', 'Ya existe un usuario con este nombre.' );
            return back();
        }
        else if ($usersx->fails()) {
            Session::flash('errorrol', 'Debe llenar todos los campos.' );
            return back();
        }    
else{
        $request->Activo = isset($request->Activo) ? FALSE : $request->Activo;
         Rol::create($request->all());
        Session::flash('addk', 'Datos agregados correctamente.' );
         return back();
        //return $request->all();
    }
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
        $usersx = Validator::make($request->all(), [
            'TipoRol' => 'required',
            'Nombre' => 'required',          
        ]);
        if ($usersx->fails()) {
            return redirect('roles')
                        ->withErrors($usersx)
                        ->withInput();
        }
        else{
         $pass = Rol::where(
            [
                 'IdRol' => $request->rol_idedit,
            
             ]
            );
         $pass->update(
            [
                'TipoRol' =>$request->TipoRol,                
                'Nombre' =>$request->Nombre,
                'Activo' =>$request->Activo1,
                'Protegido' =>$request->Protegido1,
                'FechaModifico'=>$request->IdUModifico
            ]
        );   
         
         

        Session::flash('modifik', 'Cambios guardados correctamente.' );
        return redirect()->back()->with('message','');
    }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
     
        $rol = Rol::where('IdRol', $request->roles_id)->delete();      
        Session::flash('deletek', 'Datos eliminados correctamente.' );
        return back();
    }
}
