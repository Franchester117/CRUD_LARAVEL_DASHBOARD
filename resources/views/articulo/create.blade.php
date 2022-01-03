@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Nuevo articulo</h1>
@stop

@section('content')
    <form action="/articulos" method="POST">
        @csrf
        <div class="mb-3">
            <label for="codigo">Codigo</label>
            <input class="form-control" type="text" name="codigo" id="codigo">
        </div>
        <div class="mb-3">
            <label for="descripcion">Descripción</label>
            <input class="form-control" type="text" name="descripcion" id="descripcion">
        </div>
        <div class="mb-3">
            <label for="cantidad">Cantidad</label>
            <input class="form-control" type="text" name="cantidad" id="cantidad">
        </div>
        <div class="mb-3">
            <label for="precio">Precio</label>
            <input class="form-control" type="text" name="precio" id="precio">
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
        <a class="btn btn-seccondary" href="/articulos">Cancelar</a>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop