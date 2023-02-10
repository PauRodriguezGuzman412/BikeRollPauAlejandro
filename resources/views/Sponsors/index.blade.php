@extends('layout.layout')

@section('title','Admin')

@section('header')
@include('layout.header')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a href="{{ route('courses.create') }}">Crear carrera</a>
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
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['CIF'] }}</td>
                <td>{{ $course['address'] }}</td>
                <td>{{ $course['principal_page'] }}</td>
                <td>{{ $course['active'] }}</td>
                <td><a href="{{ route('courses.edit', $course['id']) }}">Editar sponsor</a></td>
                <td><a href="{{ route('courses.delete', $course['id']) }}">Borrar sponsor</a></td>

            </tr>
        @endforeach
    </table>
</div>>
    
@section('footer')
@include('layout.footer')