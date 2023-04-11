@extends('layout.layout')

@section('title','Admin')

@section('header')
@include('layout.header')
@include('layout.nav')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a class="createRunnerButton" href="{{ route('insurances.create') }}">CREAR ASEGURADORA</a>
    <table class="border border-secondary" style="text-align: center">
        <thead>
            <th>ID</th>
            <th>CIF</th>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Borrar</th>
        </thead>
        @foreach ($insurances as $insurance)
            <tr>
                <td>{{ $insurance['id'] }}</td>
                <td>{{ $insurance['CIF'] }}</td>
                <td>{{ $insurance['name'] }}</td>
                <td>{{ $insurance['address'] }}</td>
                <td>{{ $insurance['price'] }}</td>
                <td><a href="{{ route('insurances.edit', $insurance['id']) }}"><img class="editIcon" src="{{ asset('img/editIcon.png') }}"></a></td>
                @if ($insurance['active'] == 1)
                    <td><a href="{{ route('insurances.delete', ['id' => $insurance['id'], 'active' => $insurance['active']]) }}"><img class="statusIcon" src="{{ asset('img/onIcon.png') }}"></a></td>
                    @else
                    <td><a href="{{ route('insurances.delete', ['id' => $insurance['id'], 'active' => $insurance['active']]) }}"><img class="statusIcon" src="{{ asset('img/offIcon.png') }}"></a></td>

                @endif
            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('admin.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>

@section('footer')
@include('layout.footer')
