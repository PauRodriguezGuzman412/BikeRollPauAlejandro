@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <div class="d-flex justify-content-center align-items-center mt-5 p-2">
        <div class="row justify-content-center bg-white p-5">
            <div class="row justify-content-center">
                <p class="text-center">¡Te has registrado correctamente en la carrera!</p>
                <a href="{{ route('payment.generatePDF',['course_id' => $course_id,'runner_id' => $runner_id,'insurance_id' => $insurance_id ]) }}" class="btn btn-info w-25 mt-2">Generar PDF</a>
            </div>
            <div class="row justify-content-center">
                <a href="{{ route('courses.available') }}" class="btn btn-primary w-50 mt-2">Volver a página principal</a>
            </div>
        </div>
    </div>
</div>