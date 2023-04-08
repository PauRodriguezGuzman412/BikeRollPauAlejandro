@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
<div class="container d-flex flex-column justify-content-center align-items-center">
    <table style="text-align: center">
        <thead>
            <th>DNI</th>
            <th>Nombre</th>
            <th>Dorsal</th>
            <th>QR</th>
        </thead>
        @foreach ($runners as $runner)
            <tr>
                <td>{{ $runner['dni'] }}</td>
                <td>{{ $runner['name'].' '.$runner['surname'] }}</td>
                <td>{{ $runner->pivot->dorsal }}</td>
                <td>
                    {!! QrCode::size(100)
                        ->generate(route('qrCode', ['idCourse' => $idCourse, 'dniRunner' => $runner['dni']]))
                    !!}
                </td>
            </tr>
        @endforeach
    </table>
    <a class="returnButton" href="{{ route('admin.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>
@section('footer')
@include('layout.footer')
