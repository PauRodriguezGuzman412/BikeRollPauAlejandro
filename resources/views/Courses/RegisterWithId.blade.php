@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
    <script src="{{ asset('js/components/createRunner.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container d-flex flex-column justify-content-around align-items-center createRunnerformDiv">
    <h1 class="formTitle">REGISTRAR CORREDOR CON ID</h1>
    <form action="{{ route('courses.registerWithID', ['id' => $idCourse]) }}" method="POST">
        @csrf
        <div class="mb-4 runnerInput">
            <input name="dni" type="text" value="{{ old('dni','') }}" placeholder="DNI"><br>
        </div>
        <div class="mb-4 runnerInput">
            <select name="insurance" type="number" value="{{ old('insurance','') }}">
                <option value="" selected disabled >Selecciona una aseguradora</option>
                {{-- TODO: Hacer que cada carrera eliga sus aseguradoras --}}
                @foreach ($insurances as $insurance)
                    <option value="{{ $insurance['CIF'] }}">{{ $insurance['name'] }}</option>
                @endforeach
            </select><br>
        </div>
        <button type="submit" class="submitLogAdminButton">REGISTRARSE</button
    </form>
    <a class="returnFormButton" href="{{ route('courses.available') }}">VOLVER A PÁGINA PRINCIPAL</a>
</div>
@foreach ($errors->all() as $error)
    <div class="container">
        <li class="alert alert-danger">{{ $error }}</li>
    </div>
@endforeach
@section('footer')
@include('layout.footer')
