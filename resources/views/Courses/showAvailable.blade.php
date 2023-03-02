@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
<div class="container d-flex flex-column justify-content-center align-items-center">
    <table style="text-align: center">
        <thead>
            <th>Imagen mapa</th>
            <th>Descripción</th>
            <th>Fecha inicio</th>
            <th>Registrarse con id</th>
            <th>Registrarse</th>
        </thead>
        @foreach ($courses as $course)
            <tr>
                <td><img src="{{ asset($course['map_image']) }}" alt="Mapa" width="50px"></td>
                <td>{{ $course['description'] }}</td>
                <td>{{ $course['start_date'] }}</td>
                <td><a href="{{ route('courses.registerWithIDForm',$course['id']) }}">Registrarse con ID</a></td>
                <td><a href="{{ route('courses.registerForm',$course['id']) }}">Registrarse</a></td>
            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('index.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>
@section('footer')
@include('layout.footer')
