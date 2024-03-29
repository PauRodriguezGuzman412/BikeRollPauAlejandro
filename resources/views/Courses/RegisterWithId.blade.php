@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container d-flex flex-column justify-content-around align-items-center createRunnerformDiv">
    <h1 class="formTitle">REGISTRAR CORREDOR CON ID</h1>
    <form id="registerWithIdForm" action="{{ route('make.payment', ['id' => $idCourse]) }}" method="POST">
        @csrf
        <div class="mb-4 runnerInput">
            <input id="dni" name="dni" type="text" value="{{ old('dni','') }}" placeholder="DNI"><br>
        </div>
        <div class="mb-4 runnerInput">
            <select name="insurance" type="number" value="{{ old('insurance','') }}">
                <option value="" selected disabled >Selecciona una aseguradora</option>
                @foreach ($insurances as $insurance)
                    <option value="{{ $insurance['id'] }}">{{ $insurance['name'] }}</option>
                @endforeach
            </select><br>
        </div>
        <input id="amount" type="text" class="form-control" name="amount" value="{{ $course['price'] }}" hidden>
        <button type="submit" class="submitLogAdminButton">REGISTRARSE</button>
        @if ($userExists == 'false')
            <div id="notRegistered" class="notRegistered ms-4 mt-4 p-3 bg-danger bg-gradient rounded">
                <p class="text-center text-white m-0">No se ha encontrado el DNI introducido. Quieres <a class="text-primary" href="{{ route('courses.registerForm', ['idCourse' => $idCourse]) }}">registrarte</a>?</p>
            </div>
        @endif
        @if ($registerExists == 'true')
            <div id="notRegistered" class="notRegistered ms-4 mt-4 p-3 bg-danger bg-gradient rounded">
                <p class="text-center text-white m-0">¡Ya estás registrado en esta carrera!</p>
            </div>
        @endif
        @if ($insuranceNeeded == 'true')
            <div id="notRegistered" class="notRegistered ms-4 mt-4 p-3 bg-danger bg-gradient rounded">
                <p class="text-center text-white m-0">No estás federado, por favor, elige una de las aseguradoras</p>
            </div>
        @endif
        @if ($insuranceNeeded == 'noNeed')
            <div id="notRegistered" class="notRegistered ms-4 mt-4 p-3 bg-danger bg-gradient rounded">
                <p class="text-center text-white m-0">No necesitas aseguradora al estar federado</p>
            </div>
        @endif
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
