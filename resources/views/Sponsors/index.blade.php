@extends('layout.layout')

@section('title','Admin')

@section('header')
@include('layout.header')
@include('layout.nav')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a class="createRunnerButton" href="{{ route('sponsors.create') }}">CREAR SPONSOR</a>
    <table style="text-align: center">
        <thead>
            <th>ID</th>
            <th>CIF</th>
            <th>Nombre</th>
            <th>Logo</th>
            <th>Dirección</th>
            <th>Página principal </th>
            <th>Editar</th>
            <th>Borrar</th>
        </thead>
        @foreach ($sponsors as $sponsor)
            <tr>
                <td>{{ $sponsor['id'] }}</td>
                <td>{{ $sponsor['CIF'] }}</td>
                <td>{{ $sponsor['nombre'] }}</td>
                <td><img src={{ asset($sponsor['logo']) }} alt='Logo sponsor' style="width:100px;"></td>
                <td>{{ $sponsor['address'] }}</td>
                <td>{{ $sponsor['principal_page'] }}</td>
                <td><a href="{{ route('sponsors.edit', $sponsor['id']) }}"><img class="editIcon" src="{{ asset('img/editIcon.png') }}"></a></td>
                @if ($sponsor['active'] == 1)
                    <td><a href="{{ route('sponsors.delete', ['id' => $sponsor['id'], 'active' => $sponsor['active']]) }}"><img class="statusIcon" src="{{ asset('img/onIcon.png') }}"></a></td>
                    @else
                    <td><a href="{{ route('sponsors.delete', ['id' => $sponsor['id'], 'active' => $sponsor['active']]) }}"><img class="statusIcon" src="{{ asset('img/offIcon.png') }}"></a></td>

                @endif
            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('admin.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>

@section('footer')
@include('layout.footer')
