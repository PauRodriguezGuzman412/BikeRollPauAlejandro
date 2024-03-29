@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a class="createRunnerButton" href="{{ route('runners.create') }}">CREAR CORREDOR</a>
    <form action="{{ route('runners.search') }}" method="POST">
        @csrf
        <div class="row mb-4">
            <select class="w-25 form-control" name="filter">
                <option value="dni">DNI</option>
                <option value="name">Nombre</option>
                <option value="surname">Apellido</option>
                <option value="address">Dirección</option>
                <option value="date_of_birth">Fecha de nacimiento</option>
                <option value="federated">Federado</option>
                <option value="federated_num">NºFederado</option>
            </select>
            <input class="w-50 ms-3 form-control rounded-0 rounded-start" name="searchText" type="text"><br>
            <button type="submit" class="btn btn-success rounded-0 rounded-end searchButton">BUSCAR</button>
        </div>
    </form>
    <table class="border border-secondary" style="text-align: center">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Fecha de nacimiento</th>
            <th>Federado</th>
            <th>Nº Federado</th>
            <th>Puntos</th>
            <th>Género</th>
            <th>Editar</th>
            <th>Estado</th>
        </thead>
        @foreach ($runners as $runner)
            <tr>
                <td>{{ $runner['name'] }}</td>
                <td>{{ $runner['surname'] }}</td>
                <td>{{ $runner['address'] }}</td>
                <td>{{ $runner['date_of_birth'] }}</td>
                <td>{{ $runner['federated'] }}</td>
                <td>{{ $runner['federated_num'] }}</td>
                <td>{{ $runner['ranking_points'] }}</td>
                <td>{{ $runner['gender'] }}</td>
                <td><a href="{{ route('runners.edit', $runner['dni']) }}"><img class="editIcon" src="{{ asset('img/editIcon.png') }}"></a></td>
                @if ($runner['active'] == 1)
                    <td><a href="{{ route('runners.delete', ['id' => $runner['dni'], 'active' => $runner['active']]) }}"><img class="statusIcon" src="{{ asset('img/onIcon.png') }}"></a></td>
                    @else
                    <td><a href="{{ route('runners.delete', ['id' => $runner['dni'], 'active' => $runner['active']]) }}"><img class="statusIcon" src="{{ asset('img/offIcon.png') }}"></a></td>

                @endif

            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('admin.index') }}">VOLVER A PÁGINA PRINCIPAL</a>
</div>
@section('footer')
@include('layout.footer')
