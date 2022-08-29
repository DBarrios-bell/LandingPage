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
       Departament::create(['id'=>5,'departamento'=>'ANTIOQUIA']);
       Departament::create(['id'=>8,'departamento'=>'ATLÁNTICO']);
       Departament::create(['id'=>11,'departamento'=>'BOGOTÁ, D.C.']);
       Departament::create(['id'=>13,'departamento'=>'BOLÍVAR']);
       Departament::create(['id'=>15,'departamento'=>'BOYACÁ']);
       Departament::create(['id'=>17,'departamento'=>'CALDAS']);
       Departament::create(['id'=>18,'departamento'=>'CAQUETÁ']);
       Departament::create(['id'=>19,'departamento'=>'CAUCA']);
       Departament::create(['id'=>20,'departamento'=>'CESAR']);
       Departament::create(['id'=>23,'departamento'=>'CÓRDOBA']);
       Departament::create(['id'=>25,'departamento'=>'CUNDINAMARCA']);
       Departament::create(['id'=>27,'departamento'=>'CHOCÓ']);
       Departament::create(['id'=>41,'departamento'=>'HUILA']);
       Departament::create(['id'=>44,'departamento'=>'LA GUAJIRA']);
       Departament::create(['id'=>47,'departamento'=>'MAGDALENA']);
       Departament::create(['id'=>50,'departamento'=>'META']);
       Departament::create(['id'=>52,'departamento'=>'NARIÑO']);
       Departament::create(['id'=>54,'departamento'=>'NORTE DE SANTANDER']);
       Departament::create(['id'=>63,'departamento'=>'QUINDIO']);
       Departament::create(['id'=>66,'departamento'=>'RISARALDA']);
       Departament::create(['id'=>68,'departamento'=>'SANTANDER']);
       Departament::create(['id'=>70,'departamento'=>'SUCRE']);
       Departament::create(['id'=>73,'departamento'=>'TOLIMA']);
       Departament::create(['id'=>76,'departamento'=>'VALLE DEL CAUCA']);
       Departament::create(['id'=>81,'departamento'=>'ARAUCA']);
       Departament::create(['id'=>85,'departamento'=>'CASANARE']);
       Departament::create(['id'=>86,'departamento'=>'PUTUMAYO']);
       Departament::create(['id'=>88,'departamento'=>'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA
       CATALINA']);
       Departament::create(['id'=>91,'departamento'=>'AMAZONAS']);
       Departament::create(['id'=>94,'departamento'=>'GUAINÍA']);
       Departament::create(['id'=>95,'departamento'=>'GUAVIARE']);
       Departament::create(['id'=>97,'departamento'=>'VAUPÉS']);
       Departament::create(['id'=>99,'departamento'=>'VICHADA']);
    }
}
