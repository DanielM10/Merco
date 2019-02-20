<?php

namespace App\Exports;
//AGREGAR EL USE CON EL MODELO CORRECTO
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class CompraExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //CAMBIAR EL MODELO
        return User::all();
    }
    /**
     * @return array
     */
    //aqui defino las cabeceras
    public function headings(): array
    {
        return [
            '# orden',
            'Descripcion',
            'Emision',
            'Requerida',
            'Almacen',
            'Importe',
            'Descuento',
            'Total'
                ];
    }

}
