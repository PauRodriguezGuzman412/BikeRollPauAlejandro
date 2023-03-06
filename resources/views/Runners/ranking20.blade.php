@extends('layout.layout')

@section('header')
@include('layout.header')

@section('component')
@include('layout.nav')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <table style="text-align: center">
        <thead>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Federado</th>
            <th>Nº Federado</th>
            <th>Puntos</th>>
        </thead>
        @foreach ($runners as $runner)
            <tr>
                <td>{{ $runner['dni'] }}</td>
                <td>{{ $runner['name'] }}</td>
                <td>{{ $runner['surname'] }}</td>
                <td>{{ $runner['date_of_birth'] }}</td>
                <td>{{ $runner['federated'] }}</td>
                <td>{{ $runner['federated_num'] }}</td>
                <td>{{ $runner['ranking_points'] }}</td>
            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('index.index') }}">VOLVER A PÁGINA PRINCIPAL</a>
</div>
@section('footer')
@include('layout.footer')