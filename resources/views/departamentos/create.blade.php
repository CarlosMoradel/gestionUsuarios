@extends('layouts.app')

@section('title', 'Crear Departamento')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Crear Departamento</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('departamentos.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre del Departamento:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>

                <div class="mb-3">
                    <label for="descripcion" class="form-label">Descripción:</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Crear Departamento</button>
            </form>
        </div>
    </div>
@endsection