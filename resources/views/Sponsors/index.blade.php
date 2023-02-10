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
                <td>{{ $course['description'] }}</td>
                <td>{{ $course['slope'] }}</td>
                <td>{{ $course['map_image'] }}</td>
                <td>{{ $course['maxim_participants'] }}</td>
                <td>{{ $course['km'] }}</td>
                <td>{{ $course['start_date'] }}</td>
                <td>{{ $course['start_point'] }}</td>
                <td>{{ $course['promotion_banner'] }}</td>
                <td>{{ $course['sponsoring_money'] }}</td>
                <td>{{ $course['course_duration'] }}</td>
                <td>{{ $course['active'] }}</td>
                <td><a href="{{ route('courses.edit', $course['id']) }}">Editar carrera</a></td>
                <td><a href="{{ route('courses.delete', $course['id']) }}">Borrar carrera</a></td>

            </tr>
        @endforeach
    </table>
</div>>
    
@section('footer')
@include('layout.footer')