<?php

namespace App\Exports;

use App\Models\User as ModelsUser;
use App\User;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Id',
            'Fecha Registro',
            'Nombre',
            'Apellido',
            'Cedula',
            'Departamento',
            'Ciudad',
            'Celular',
            'Correo',
        ];
    }
    public function collection()
    {
        $users = ModelsUser::join('cities as c','c.id','users.id_ciudad')
        ->join('departaments as d','d.id_departamento','users.id_departamento')
        ->select('users.id','users.created_at','users.nombre','users.apellido','users.cedula','d.departamento','c.ciudad','users.celular','users.correo')->get();
        //  $users = DB::table('Users')->select('id','name', 'email')->get();
         return $users;

    }
}