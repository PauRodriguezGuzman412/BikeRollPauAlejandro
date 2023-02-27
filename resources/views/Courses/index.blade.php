@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
<div class="container d-flex flex-column justify-content-center align-items-center">
    <a class="createRunnerButton" href="{{ route('courses.create') }}">CREAR CARRERA</a>
    <table style="text-align: center">
        <thead>
            <th>ID</th>
            <th>Descripción</th>
            <th>Desnivel</th>
            <th>Imagen mapa</th>
            <th>Máximo participantes</th>
            <th>Kilómetros</th>
            <th>Fecha inicio</th>
            <th>Punto de salida</th>
            <th>Banner promoción</th>
            <th>Dinero sponsor</th>
            <th>Duración Carrera</th>
            <th>Editar</th>
            <th>Subir Fotos</th>
            <th>Desactivar</th>
        </thead>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['description'] }}</td>
                <td>{{ $course['slope'] }}</td>
                <td><img src="{{ asset($course['map_image']) }}" alt="Mapa" width="50px"></td>
                <td>{{ $course['maxim_participants'] }}</td>
                <td>{{ $course['km'] }}</td>
                <td>{{ $course['start_date'] }}</td>
                <td>{{ $course['start_point'] }}</td>
                <td><img src="{{ asset($course['promotion_banner']) }}" alt="Banner de promoción" width="50px"></td>
                <td>{{ $course['sponsoring_money'] }}</td>
                <td>{{ $course['course_duration'] }}</td>
                <td><a href="{{ route('courses.edit', $course['id']) }}"><img class="editIcon" src="{{ asset('img/editIcon.png') }}"></a></td>
                @if($course['course_duration'] != "00:00:00")
                <td><a href="{{ route('file.dropzoneView', $course['id']) }}"><img class="editIcon" src="{{ asset('img/fileUpload.png') }}"></a></td>
                @else
                <td>No disponible</td>
                @endif
                @if ($course['active'] == 1) 
                    <td><a href="{{ route('courses.delete', ['id' => $course['id'], 'active' => $course['active']]) }}"><img class="statusIcon" src="{{ asset('img/onIcon.png') }}"></a></td>
                    @else
                    <td><a href="{{ route('courses.delete', ['id' => $course['id'], 'active' => $course['active']]) }}"><img class="statusIcon" src="{{ asset('img/offIcon.png') }}"></a></td>        
                @endif

            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('admin.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>
@section('footer')
@include('layout.footer')