<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        	User::create(['id'=>1, 'nombre'=>'Cesar','apellido'=>'Bermudez','cedula','1048680728',
            'id_departamento'=> 15,'id_ciudad'=> 48,'celular'=>3014512332,'correo'=>'cesarb@gami.com',
            'habeasdata'=>1,'create_at'=> '2022-08-28 00:11:10','updated_at'=> '2022-08-28 00:11:10']);
        	User::create(['id'=>2, 'nombre'=>'Alfonso','apellido'=>'Sierra','cedula','1048680913',
            'id_departamento'=>13,'id_ciudad'=> 171,'celular'=> 3104628336,'correo'=>'alfonsos@sss.com',
            'habeasdata'=>1,'create_at'=> '2022-08-28 00:56:26','updated_at'=> '2022-08-28 00:56:26']);
        	User::create(['id'=>3, 'nombre'=>'Cristian','apellido'=>'Barrios','cedula','1047608328','id_departamento'=>
        	20,'id_ciudad'=> 307,'celular'=> 3213148732,'correo'=>'cristianbd@agmai.com','habeasdata'=>1,'create_at'=> '2022-08-28
        	01:00:24','updated_at'=> '2022-08-28 01:00:24']);
    }
}
