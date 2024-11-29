@extends('layouts.app')

@section('title', 'Lista de Usuarios')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Lista de Usuarios</h3>
            <a href="{{ route('usuarios.create') }}" class="btn btn-primary float-end">Crear Usuario</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                        <th>Departamento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                        <tr>
                            <td>{{ $usuario->nombre }}</td>
                            <td>{{ $usuario->correo }}</td>
                            <td>{{ $usuario->telefono }}</td>
                            <td>{{ $usuario->direccion }}</td>
                            <td>{{ $usuario->departamento->nombre }}</td>
                            <td>
                                <a href="{{ route('usuarios.edit', $usuario) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Paginación -->
            <div class="d-flex justify-content-center">
                {{ $usuarios->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection