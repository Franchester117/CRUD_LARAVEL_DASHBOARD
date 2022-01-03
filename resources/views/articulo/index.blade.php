@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<a name="crear" id="crear" class="btn btn-success mb-4" href="articulos/create" role="button">
        Crear
    </a>

    <table id="articulosTbl" class="table mt-4 table-striped shadow-lg" style="width:100%">
        <thead class="bg-primary text-white">
            <tr>
                <th>ID</th>
                <th>Codigo</th>
                <th>Descripción</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td scope="row">{{ $d->id }}</td>
                <td scope="row">{{ $d->codigo }}</td>
                <td scope="row">{{ $d->descripcion }}</td>
                <td scope="row">{{ $d->cantidad }}</td>
                <td scope="row">{{ $d->precio }}</td>
                <td scope="row">

                    <a class="btn btn-warning" href="/articulos/{{ $d->id }}/edit">Editar</a>
                    <form class="d-inline" action="{{ route('articulos.destroy',$d->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Eliminar</button>                    
                    </form>
                    
                </td>

            </tr>
            @endforeach
            
        </tbody>
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@stop

@section('js')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#articulosTbl').DataTable({
                "lengthMenu":[[5,10,50,-1],[5,10,50,"All"]]
            });
        } );
    </script>
@stop