<?php

namespace App;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'Menu';

    protected $fillable = [
        'IdMenu', 
        'IdMenuPadre',
        'Descripcion',
        'Controlador',
        'Accion',
        'Activo',
        'Orden',
        'Nivel',
        'Icono',            
    ];

    
    public function getChildren($data, $line)
    {
        $children = [];
        foreach ($data as $line1) {
            if ($line['IdMenu'] == $line1['IdMenuPadre']) {
                $children = array_merge($children, [ array_merge($line1, ['submenu' => $this->getChildren($data, $line1) ]) ]);
            }
        }
        return $children;
    }
    public function optionsMenu()
    {
        $id = Auth::id();
        $menusi=  DB::table('UsuarioPermisos')
        ->select('IdMenu')->where('IdUsuario','=',$id)->where('Ver','=',1)->pluck('IdMenu');
        $menusi = $menusi->toArray();
        $str = "'".implode("','", $menusi)."'";
        return $this
        ->whereIn('IdMenu',$menusi)
        ->where('Activo',1)
            ->orderby('IdMenuPadre')
            ->orderby('Orden')
            ->orderby('Descipcion')
            ->get()
            ->toArray();
    }
    public static function menus()
    {
        $menus = new Menu();
        $data = $menus->optionsMenu();
        $menuAll = [];
        foreach ($data as $line) {
            $item = [ array_merge($line, ['submenu' => $menus->getChildren($data, $line) ]) ];
            $menuAll = array_merge($menuAll, $item);
        }
        return $menus->menuAll = $menuAll;
    }
}

