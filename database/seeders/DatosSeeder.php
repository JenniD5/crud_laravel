<?php

namespace Database\Seeders;
use App\Models\Datos;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
class DatosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Datos::create([
            'codigo'=> '1234',
            'descripcion'=>'nota de prueba',
            'cantidad'=>'2',
            'precio'=>'50.0',
        ]);
    }
}
