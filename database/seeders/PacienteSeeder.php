<?php

namespace Database\Seeders;

use App\Models\Paciente;
use Illuminate\Database\Seeder;

class PacienteSeeder extends Seeder
{
    public function run(): void
    {
        Paciente::create([
            'dni' => '72839401',
            'nombres' => 'Carlos Alberto',
            'apellidos' => 'Gómez Mendoza',
            'edad' => 28,
            'telefono' => '984123456',
            'motivo_consulta' => 'Ansiedad generalizada y estrés laboral',
        ]);

        Paciente::create([
            'dni' => '71928374',
            'nombres' => 'María Elena',
            'apellidos' => 'Rojas Paredes',
            'edad' => 34,
            'telefono' => '951827364',
            'motivo_consulta' => 'Terapia de pareja y gestión emocional',
        ]);

        Paciente::create([
            'dni' => '74859612',
            'nombres' => 'Luis Fernando',
            'apellidos' => 'Torres Huamán',
            'edad' => 22,
            'telefono' => '973645182',
            'motivo_consulta' => 'Problemas de concentración y orientación vocacional',
        ]);
    }
}