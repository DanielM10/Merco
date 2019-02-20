<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Profesion;

class profesionController extends Controller
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
        $profesiones = Profesion::get();

return view('profesion', ['profesiones' => $profesiones]);    
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
        $profesion = new Profesion;

        $profesion->titulo = $request->Profesionnuevo;
        $profesion->save();
       Session::flash('nuevaprofesion', 'Datos agregados correctamente.' );
        return back();
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
        
         $pass = Profesion::where(
            [
                 'IdProfesion' => $request->id_editar,
            
             ]
            );
         $pass->update(
            [            
                'titulo' =>$request->titulo,              
            ]
        );   
         
         

        Session::flash('modprofesion', 'Cambios guardados correctamente.' );
        return redirect()->back()->with('message','');
        
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
     
        $profesion = Profesion::where('IdProfesion', $request->profesionid_id)->delete();      
        Session::flash('borrarprofesion', 'Datos eliminados correctamente.' );
        return back();
    }
}
