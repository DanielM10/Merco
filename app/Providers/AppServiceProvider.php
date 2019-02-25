<?php

namespace App\Providers;
use App\Menu;
use Session;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //AQUI CREO UN ARREGLO DE LOS MENUS Y LOS PASO AL COMPOSER QUE ES EL
        //ENCARGADO DE MOSTRAR LAS VISTAS 
        $id = Auth::id();
        $menusi=  DB::table('UsuarioPermisos')
        ->select('IdMenu')->where('IdUsuario','=',$id)->where('Ver','=','true')->pluck('IdMenu');
        $menusi->toArray();
        $data =Menu::select('Controlador')->where('Activo','=','True')->pluck('Controlador');
        $data = $data->toArray();
        $str = "'".implode("','", $data)."'";        
        view()->composer('*',function($view) use ($str)  {
            $view->with('menus', Menu::menus());
        });
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
