@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

<div class="container d-flex flex-column justify-content-center align-items-center createCourseformDiv">

    <form action="{{ route('courses.update',$course['id']) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="formTitleDiv">
            <h1 class="formTitle">MODIFICAR CARRERA</h1>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="name" type="text" value="{{ old('name',$course['name']) }}" placeholder="Nombre">
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 mb-4 runnerInput">
                <textarea name="description" type="textarea" >{{ old('description',$course['description']) }}</textarea>
            </div>
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="slope" type="number" value="{{ old('slope',$course['slope']) }}" placeholder="Desnivel">
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="map_image" type="file" value="{{ old('map_image',$course['map_image']) }}" placeholder="Imagen del mapa"><br>
            </div>
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="maxim_participants" type="number" value="{{ old('maxim_participants',$course['maxim_participants']) }}" placeholder="Máximo participantes"><br>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="km" type="number" value="{{ old('km',$course['km']) }}" placeholder="Kilómetros"><br>
            </div>
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="start_date" type="date" value="{{ old('start_date',$course['start_date']) }}" placeholder="Fecha de inicio"><br>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="start_point" type="text"     value="{{ old('start_point',$course['start_point']) }}" placeholder="Punto de salida"><br>
            </div>
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="promotion_banner" type="file" value="{{ old('promotion_banner',$course['promotion_banner']) }}" placeholder="Banner de promoción"><br>
            </div>
        </div>
        <div class="d-flex flex-row justify-content-around me-4 runnerInput">
            <div class="col-sm-8 mb-4 runnerInput">
                <input name="sponsoring_money" type="number" value="{{ old('sponsoring_money',$course['sponsoring_money']) }}" placeholder="Dinero para patrocinar"><br>
            </div>
            <div class="col-sm-8 ms-4 runnerInput">
                <input name="course_duration" type="time" value="{{ old('course_duration',$course['course_duration']) }}"  placeholder="Duración carrera"><br>
            </div>
        </div>
        <div>
            <button class="submitLogAdminButton">MODIFICAR CARRERA</button>
        </div>
        <div>
            <a class="returnFormButton" href="{{ route('courses') }}">VOLVER</a>
        </div>
    </form>
</div>
@section('footer')
@include('layout.footer')