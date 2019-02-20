<?php

namespace App\Exports;
//CAMBIAR EL USE AL MODELO CORRECTO
use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


class UsersExport implements FromCollection, WithHeadings
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
            '#',
            'Name',
            'Email',
            'Created at',
            'Updated at'
        ];
    }

}
