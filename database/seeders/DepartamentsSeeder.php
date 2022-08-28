<?php

namespace Database\Seeders;

use App\Models\Departament;
use Illuminate\Database\Seeder;

class DepartamentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Departament::create(['id_departamento'=>5,'departamento'=>'ANTIOQUIA']);
       Departament::create(['id_departamento'=>8,'departamento'=>'ATLÁNTICO']);
       Departament::create(['id_departamento'=>11,'departamento'=>'BOGOTÁ, D.C.']);
       Departament::create(['id_departamento'=>13,'departamento'=>'BOLÍVAR']);
       Departament::create(['id_departamento'=>15,'departamento'=>'BOYACÁ']);
       Departament::create(['id_departamento'=>17,'departamento'=>'CALDAS']);
       Departament::create(['id_departamento'=>18,'departamento'=>'CAQUETÁ']);
       Departament::create(['id_departamento'=>19,'departamento'=>'CAUCA']);
       Departament::create(['id_departamento'=>20,'departamento'=>'CESAR']);
       Departament::create(['id_departamento'=>23,'departamento'=>'CÓRDOBA']);
       Departament::create(['id_departamento'=>25,'departamento'=>'CUNDINAMARCA']);
       Departament::create(['id_departamento'=>27,'departamento'=>'CHOCÓ']);
       Departament::create(['id_departamento'=>41,'departamento'=>'HUILA']);
       Departament::create(['id_departamento'=>44,'departamento'=>'LA GUAJIRA']);
       Departament::create(['id_departamento'=>47,'departamento'=>'MAGDALENA']);
       Departament::create(['id_departamento'=>50,'departamento'=>'META']);
       Departament::create(['id_departamento'=>52,'departamento'=>'NARIÑO']);
       Departament::create(['id_departamento'=>54,'departamento'=>'NORTE DE SANTANDER']);
       Departament::create(['id_departamento'=>63,'departamento'=>'QUINDIO']);
       Departament::create(['id_departamento'=>66,'departamento'=>'RISARALDA']);
       Departament::create(['id_departamento'=>68,'departamento'=>'SANTANDER']);
       Departament::create(['id_departamento'=>70,'departamento'=>'SUCRE']);
       Departament::create(['id_departamento'=>73,'departamento'=>'TOLIMA']);
       Departament::create(['id_departamento'=>76,'departamento'=>'VALLE DEL CAUCA']);
       Departament::create(['id_departamento'=>81,'departamento'=>'ARAUCA']);
       Departament::create(['id_departamento'=>85,'departamento'=>'CASANARE']);
       Departament::create(['id_departamento'=>86,'departamento'=>'PUTUMAYO']);
       Departament::create(['id_departamento'=>88,'departamento'=>'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA
       CATALINA']);
       Departament::create(['id_departamento'=>91,'departamento'=>'AMAZONAS']);
       Departament::create(['id_departamento'=>94,'departamento'=>'GUAINÍA']);
       Departament::create(['id_departamento'=>95,'departamento'=>'GUAVIARE']);
       Departament::create(['id_departamento'=>97,'departamento'=>'VAUPÉS']);
       Departament::create(['id_departamento'=>99,'departamento'=>'VICHADA']);
    }
}
