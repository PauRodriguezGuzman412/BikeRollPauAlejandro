@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
    <div class="container d-flex flex-column justify-content-center align-items-center">
     {{-- @foreach ($courses as $course) --}}
        @if (count($pictures) == 0)
            <h3>¡Oh no! No hay fotos de esta carrera :(</h3>
        @else
            <h3>Fotos de {{ $course['name'] }}</h3>
            <div class="row justify-content-center">
                @foreach($pictures as $picture)
                <div class="col-3 column">
                    <img src="{{ asset($picture['image_path'])}}" alt="foto" class="img-fluid mx-auto d-block">
                </div>
            @endforeach
            </div>
        @endif
    {{-- @endforeach --}}
    <a class="returnButton" href="{{ route('index.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>

@section('footer')
@include('layout.footer')
