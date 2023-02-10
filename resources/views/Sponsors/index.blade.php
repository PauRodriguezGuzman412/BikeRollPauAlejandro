@extends('layout.layout')

@section('title','Admin')

@section('header')
@include('layout.header')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a href="{{ route('sponsors.create') }}">Listar Sponsors</a>
    <table style="text-align: center">
        <thead>
            <th>ID</th>
            <th>CIF</th>
            <th>Logo</th>
            <th>Dirección</th>
            <th>Página principal </th>
            <th>Activo</th>
            <th>Editar</th>
            <th>Borrar</th>
        </thead>
        @foreach ($sponsor as $value)
            <tr>
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['CIF'] }}</td>
                <td>{{ $value['address'] }}</td>
                <td>{{ $value['principal_page'] }}</td>
                <td>{{ $value['active'] }}</td>
                <td><a href="{{ route('sponsors.edit', $value['id']) }}">Editar sponsor</a></td>
                <td><a href="{{ route('sponsors.delete', $value['id']) }}">Borrar sponsor</a></td>

            </tr>
        @endforeach
    </table>
</div>>
    
@section('footer')
@include('layout.footer')