@extends('layouts.app')

@section('title', 'Editar Departamento')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Editar Departamento</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('departamentos.update', $departamento) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Departamento:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $departamento->nombre) }}" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $departamento->descripcion) }}</textarea>
                </div>

                <button type="submit" class="btn btn-warning">Actualizar Departamento</button>
            </form>
        </div>
    </div>
@endsection