@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
    <script src="{{ asset('js/components/createRunner.js')}}"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <div class="container d-flex flex-column justify-content-around align-items-center createRunnerformDiv">
        <h1 class="formTitle">EDITAR CORREDOR</h1>
        <form action="{{ route('runners.update', $runner['id']) }}" method="POST">
            @csrf
            @method('PUT')
    
            <div class="mb-4 runnerInput">
                <input name="name" type="text" value="{{ old('name',$runner['name']) }}" placeholder="Nombre"><br>
            </div>
            <div class="mb-4 runnerInput">
                <input name="surname" type="text" value="{{ old('surname',$runner['surname']) }}" placeholder="Apellidos"><br>
            </div>
    
            <div class="mb-4 runnerInput">
                <input name="address" type="text" value="{{ old('address',$runner['address']) }}" placeholder="Dirección"><br>
            </div>
    
            <div class="mb-4 runnerInput">
                <input name="date_of_birth" type="text" value="{{ old('date_of_birth',$runner['date_of_birth']) }}" placeholder="Fecha de nacimiento" onfocus="(this.type='date')" onblur="checkBirthDate(this)"><br>
            </div>
    
            <div class="mb-4 runnerInput">
                <select name="federated" type="number" onchange="enableFederatedNumber(this);">
                    <option value="{{ old('federated',$runner['federated']) }}" selected >Actual: {{ $runner['federated'] }} </option>
                    <option value="PRO">PRO</option>
                    <option value="OPEN">OPEN</option>
                </select><br>
            </div>
            @if($runner['federated'] == "PRO")
                <div class="mb-4 runnerInput">
                    <input name="federated_num" type="text" value="{{ old('federated_num',$runner['federated_num']) }}" placeholder="Nº Federado"><br>
                </div>
            @else
                <div class="mb-4 runnerInput">
                    <input name="federated_num" type="text" value="{{ old('federated_num',$runner['federated_num']) }}" placeholder="Nº Federado" disabled><br>
                </div>
            @endif
            <div class="mb-4 runnerInput">
                <input name="ranking_points" type="number" value="{{ old('ranking_points',$runner['ranking_points']) }}" placeholder="puntos"><br>
            </div>
            <button type="submit" class="submitLogAdminButton">EDITAR CORREDOR</button>
        </form>
        <a class="returnFormButton" href="{{ route('runners') }}">VOLVER A PÁGINA PRINCIPAL</a>
</div>
    @foreach ($errors->all() as $error)
            <div class="container">
                <li class="alert alert-danger">{{ $error }}</li>
            </div>
        @endforeach
@section('footer')
@include('layout.footer')