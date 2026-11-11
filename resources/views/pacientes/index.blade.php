@extends('layouts.app')

@section('titulo', 'Gestión de Pacientes')

@section('contenido')
    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
        <h2>Listado de Pacientes Registrados</h2>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>DNI</th>
                <th>Nombres y Apellidos</th>
                <th>Edad</th>
                <th>Teléfono</th>
                <th>Motivo de Consulta</th>
            </tr>
        </thead>
        <tbody>
            @forelse($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->id }}</td>
                    <td><strong>{{ $paciente->dni }}</strong></td>
                    <td>{{ $paciente->nombres }} {{ $paciente->apellidos }}</td>
                    <td>{{ $paciente->edad }} años</td>
                    <td>{{ $paciente->telefono }}</td>
                    <td>{{ $paciente->motivo_consulta }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" style="text-align: center;">No hay pacientes registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection