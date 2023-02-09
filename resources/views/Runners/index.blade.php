@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')

@section('component')

   <a href="{{ route('runners.create') }}">Crear corredor</a>
   <table style="text-align: center">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Fecha de nacimiento</th>
            <th>Federado</th>
            <th>Nº Federado</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        @foreach ($runners as $runner)
            <tr>
                <td>{{ $runner['id'] }}</td>
                <td>{{ $runner['name'] }}</td>
                <td>{{ $runner['surname'] }}</td>
                <td>{{ $runner['address'] }}</td>
                <td>{{ $runner['date_of_birth'] }}</td>
                <td>{{ $runner['federated'] }}</td>
                <td>{{ $runner['federated_num'] }}</td>
                <td><a href="{{ route('runners.edit', $runner['id']) }}">Editar corredor</a></td>
                <td><a href="{{ route('runners.delete', $runner['id']) }}">Borrar corredor</a></td>

            </tr>
        @endforeach
    </table>
@section('footer')
@include('layout.footer')