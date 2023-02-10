@extends('layout.layout')

@section('title','Admin')

@section('header')
@include('layout.header')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a href="{{ route('Sponsors.create') }}">Listar Sponsors</a>
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
        @foreach ($sponsors as $sponsor)
            <tr>
                <td>{{ $sponsor['id'] }}</td>
                <td>{{ $sponsor['CIF'] }}</td>
                <td>{{ $sponsor['address'] }}</td>
                <td>{{ $sponsor['principal_page'] }}</td>
                <td>{{ $sponsor['active'] }}</td>
                <td><a href="{{ route('sponsors.edit', $sponsor['id']) }}">Editar sponsor</a></td>
                <td><a href="{{ route('sponsors.delete', $sponsor['id']) }}">Borrar sponsor</a></td>

            </tr>
        @endforeach
    </table>
</div>>
    
@section('footer')
@include('layout.footer')