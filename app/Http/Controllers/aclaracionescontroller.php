<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class aclaracionescontroller extends Controller
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
     * @Route("/aclaraciones/{token}", name="aclaraciones", requirements={"token"=".+"})
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(){
        return Redirect::to(URL::route('aclaraciones') . '/');
    }
    public function share($token)
    {
        
    }
    public function index()
    {
        return view('aclaraciones');
    }
}
