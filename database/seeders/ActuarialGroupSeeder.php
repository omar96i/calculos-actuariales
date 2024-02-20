<?php

namespace Database\Seeders;

use App\Models\ActuarialGroup;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActuarialGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actuarialGroups = [
            'PERSONAL JUBILADO TOTALMENTE POR LA EMPRESA',
            'PERSONAL JUBILADO CON PENSION COMPARTIDA',
            'PERSONAL JUBILADO POR LA EMPRESA Y EXPECTATIVA ISS',
            'PERSONAL BENEFICIARIO A CARGO DE LA EMPRESA',
            'PERSONAL BENEFICIARIO COMPARTIDO CON EL ISS',
            'PERSONAL ACTIVO CON REQUISITOS CUMPLIDOS CON LA EMPRESA Y CON EL ISS',
            'PERSONAL ACTIVO CON REQUISITOS CUMPLIDOS CON LA EMPRESA Y CON EXPECTATIVA ISS',
            'PERSONAL ACTIVO CON EXPECTATIVA EMPRESA EXPECTATIVA ISS',
            'PERSONAL ACTIVO CON PENSION COMPARTIDA CONDICIONES DE TRANSICION',
            'PERSONAL RETIRADO VOLUNTARIAMENTE A CARGO DE LA EMPRESA',
            'PERSONAL RETIRADO VOLUNTARIAMENTE AFILIADO AL ISS',
            'PERSONAL DEPEDIDO SIN JUSTA CAUSA A CARGO DE LA EMPRESA',
            'PERSONAL DEPEDIDO SIN JUSTA CAUSA CON PENSION COMPARTIDA CON EL ISS',
            'PERSNAL BENEFICIARIO CON RENTAS TEMPORALES A CARGO DE LA EMPRESA',
            'PERSONAL BENEFICIARIO CON RENTAS TEMPORALES COMPARTIDAS CON EL ISS',
            'PERSONAL CON RENTAS TEMPORALES AMPARADOS POR ACUERDOS, PACTOS O CONVENCIONES COLECTIVAS DE TRABAJO',
            'OTRAS (POR EJEMPLO CUOTAS PARTES POR PAGAR)',
        ];

        foreach ($actuarialGroups as $index => $name) {
            ActuarialGroup::create([
                'code' => $index + 1,
                'name' => $name,
            ]);
        }
    }
}
