@extends('layouts.app')

@section('title', 'Editar Usuario')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Editar Usuario</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre:</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $usuario->nombre }}" required>
                </div>

                <div class="mb-3">
                    <label for="correo" class="form-label">Correo:</label>
                    <input type="correo" class="form-control" id="correo" name="correo" value="{{ $usuario->correo }}" required>
                </div>

                <div class="mb-3">
                    <label for="telefono" class="form-label">Teléfono:</label>
                    <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $usuario->telefono }}">
                </div>

                <div class="mb-3">
                    <label for="direccion" class="form-label">Dirección:</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $usuario->direccion }}">
                </div>

                <div class="mb-3">
                    <label for="contraseña" class="form-label">Contraseña (opcional):</label>
                    <input type="password" class="form-control" id="contraseña" name="contrasena">
                </div>

                <div class="mb-3">
                    <label for="departamento_id" class="form-label">Departamento:</label>
                    <select class="form-control" id="departamento_id" name="departamento_id" required>
                        @foreach($departamentos as $departamento)
                            <option value="{{ $departamento->id }}" {{ $usuario->departamento_id == $departamento->id ? 'selected' : '' }}>
                                {{ $departamento->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-warning">Actualizar Usuario</button>
            </form>
        </div>
    </div>
@endsection
