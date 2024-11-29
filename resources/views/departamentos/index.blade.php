@extends('layouts.app')

@section('title', 'Lista de Departamentos')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3>Lista de Departamentos</h3>
            <a href="{{ route('departamentos.create') }}" class="btn btn-primary">Crear Departamento</a>
        </div>
        <div class="card-body">
            <table class="table table-striped table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($departamentos as $departamento)
                        <tr>
                            <td>{{ $departamento->nombre }}</td>
                            <td>{{ $departamento->descripcion }}</td>
                            <td>
                                <a href="{{ route('departamentos.edit', $departamento) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('departamentos.destroy', $departamento) }}" method="POST" style="display:inline;">
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
                {{ $departamentos->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection