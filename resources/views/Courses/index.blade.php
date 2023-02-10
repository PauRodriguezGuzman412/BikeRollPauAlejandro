@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')

@section('component')
<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a class="createRunnerButton" href="{{ route('courses.create') }}">CREAR CARRERA</a>
   <table style="text-align: center">
        <thead>
            <th>ID</th>
            <th>Descripción</th>
            <th>Desnivel</th>
            <th>Imagen Mapa</th>
            <th>Maximo participantes</th>
            <th>Kilometros</th>
            <th>Fecha inicio</th>
            <th>Punto de salida</th>
            <th>Banner promoción</th>
            <th>Dinero sponsors</th>
            <th>Duración carrera</th>
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
                <td><a href="{{ route('courses.edit', $course['id']) }}"><img class="editIcon" src="{{ asset('img/editIcon.png') }}"></a></td>
                <td><a href="{{ route('courses.delete',$course['id']) }}"><img class="statusIcon" src="{{ asset('img/deleteIcon.png') }}"></a></td>

            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('admin.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>
@section('footer')
@include('layout.footer')