@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <form action="{{ route('runners.search') }}" method="POST">
        @csrf
        <div class="mb-4">
            <select name="filter">
                <option value="id">Id</option>
                <option value="name">Nombre</option>
                <option value="surname">Apellido</option>
                <option value="address">Dirección</option>
                <option value="date_of_birth">Fecha de nacimiento</option>
                <option value="federated">Federado</option>
                <option value="federated_num">NºFederado</option>
            </select>
            <input name="searchText" type="text"><br>
        <button type="submit" class="">BUSCAR</button>
    </div>
    </form>
    <table style="text-align: center">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Fecha de nacimiento</th>
            <th>Federado</th>
            <th>Nº Federado</th>
            <th>Puntos</th>
        </thead>
        @foreach ($runners as $runner)
            <tr>
                <td>{{ $runner['id'] }}</td>
                <td>{{ $runner['name'] }}</td>
                <td>{{ $runner['surname'] }}</td>
                <td>{{ $runner['date_of_birth'] }}</td>
                <td>{{ $runner['federated'] }}</td>
                <td>{{ $runner['federated_num'] }}</td>
                <td>{{ $runner['ranking_points'] }}</td>
            </tr>
        @endforeach
    </table>
</div>
@section('footer')
@include('layout.footer')