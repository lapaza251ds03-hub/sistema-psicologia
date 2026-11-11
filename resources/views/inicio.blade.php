@extends('layouts.app')

@section('titulo', 'Inicio')

@section('contenido')
    <h1>Sistema de Gestión de Consultorio Psicológico</h1>
    <p>Plataforma para el control de historias clínicas y sesiones.</p>
    <p>Base de datos conectada:
        <strong>{{ DB::connection()->getDatabaseName() }}</strong>
    </p>
@endsection