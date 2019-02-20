<?php

namespace App\Exports;
//CAMBIAR EL USE A MODELO CORRECTO
use App\Proveedor;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class ProveedorExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //CAMBIAR EL MODELO AL CORRECTO
        return Proveedor::all();
    }
    /**
     * @return array
     */
    //aqui defino las cabeceras
    public function headings(): array
    {
        return [
            'Proveedor','Nombre','Categoria','Estatus'
        ];
    }

}
