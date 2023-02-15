@extends('layout.layout')

@section('title','Admin')

@section('header')
@include('layout.header')

<div class="container d-flex flex-column justify-content-center align-items-center runnersTable">
    <a class="createRunnerButton" href="{{ route('sponsors.create') }}">CREAR SPONSOR</a>
    <table style="text-align: center">
        <thead>
            <th>ID</th>
            <th>CIF</th>
            <th>Logo</th>
            <th>Dirección</th>
            <th>Página principal </th>
            <th>Editar</th>
            <th>Borrar</th>
        </thead>
        @foreach ($sponsor as $value)
            <tr>
                <td>{{ $value['id'] }}</td>
                <td>{{ $value['CIF'] }}</td>
                <td>{{ $value['address'] }}</td>
                <td>{{ $value['principal_page'] }}</td>
                <td>{{ $value['active'] }}</td>
                <td><a href="{{ route('sponsors.edit', $value['id']) }}"><img class="editIcon" src="{{ asset('img/editIcon.png') }}"></a></td>
                @if ($value['active'] == 1) 
                    <td><a href="{{ route('sponsors.delete', ['id' => $value['id'], 'active' => $value['active']]) }}"><img class="statusIcon" src="{{ asset('img/onIcon.png') }}"></a></td>
                    @else
                    <td><a href="{{ route('sponsors.delete', ['id' => $value['id'], 'active' => $value['active']]) }}"><img class="statusIcon" src="{{ asset('img/offIcon.png') }}"></a></td>
                
                @endif
            </tr>
        @endforeach
    </table>
<<<<<<< Updated upstream
    <a class="returnButton" href="{{ route('admin.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

=======
>>>>>>> Stashed changes
</div>
    
@section('footer')
@include('layout.footer')