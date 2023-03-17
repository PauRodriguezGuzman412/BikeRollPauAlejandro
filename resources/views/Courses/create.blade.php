@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

<div class="container d-flex flex-column justify-content-center align-items-center createCourseformDiv">

    <form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="formTitleDiv">
            <h1 class="formTitle">CREAR CARRERA</h1>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="name" type="text" value="{{ old('name','') }}" placeholder="Nombre">
            </div>
            <div class="col-sm-8 mb-4 runnerInput">
                <textarea name="description" type="textarea" >{{ old('description','Descripción') }}</textarea>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="slope" type="number" value="{{ old('slope','') }}" placeholder="Desnivel">
            </div>
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="map_image" type="file" value="{{ old('map_image','') }}" placeholder="Imagen del mapa"><br>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="maxim_participants" type="number" value="{{ old('maxim_participants','') }}" placeholder="Máximo participantes"><br>
            </div>
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="km" type="number" value="{{ old('km','') }}" placeholder="Kilómetros"><br>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="start_date" type="date" value="{{ old('start_date','') }}" placeholder="Fecha de inicio"><br>
            </div>
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="start_point" type="text"     value="{{ old('start_point','') }}" placeholder="Punto de salida"><br>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="promotion_banner" type="file" value="{{ old('promotion_banner','') }}" placeholder="Banner de promoción"><br>
            </div>
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="sponsoring_money" type="number" value="{{ old('sponsoring_money','') }}" placeholder="Dinero para patrocinar"><br>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="course_duration" type="time" value="{{ old('course_duration','') }}"  placeholder="Duración carrera"><br>
            </div>
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="price" type="number" value="{{ old('price','') }}" placeholder="Precio"><br>
            </div>
        </div>
        <div>
            <button class="submitLogAdminButton">AÑADIR CARRERA</button>
        </div>
        <div>
            <a class="returnFormButton" href="{{ route('courses') }}">VOLVER</a>
        </div>
    </form>
</div>
    @foreach ($errors->all() as $error)
            <div class="container">
                <li class="alert alert-danger">{{ $error }}</li>
            </div>
        @endforeach
@section('layout.footer')
@include('layout.footer')
