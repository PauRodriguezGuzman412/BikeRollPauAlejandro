@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
    <h1 class="text-center display-2 mb-5" >CARRERAS DISPONIBLES</h1>
    <div class="container d-flex flex-column justify-content-center align-items-center">
    <div class="row d-flex justify-content-center">
        @foreach ($courses as $course)
            <div class="col-5 rounded bg-white me-2 mb-3 pb-5 pt-2">
                <h2 class="text-center fw-bold">{{$course->name}}</h2>
                <img class="img-fluid mx-auto d-block w-75 mb-3 mt-3 bannerImg" src="{{asset($course->promotion_banner)}}" />
                <h4>Fecha: {{ date("d/m/Y",strtotime($course->start_date)) }}</h4>
                <h4>Precio de inscripción:
                    <span class="fw-bold"> {{ number_format($course->price, 2, ',', '.') }} €</span>
                </h4>
                <h5>{{ mb_strimwidth($course->description,0,150,"...") }}</h5>
                @if($course->available == 1)
                <div class="col d-flex justify-content-center">
                    <a href="{{ route('courses.registerWithIDForm',$course['id']) }}">
                        <button class="btn btn-primary p-2 fw-bold mt-4">Inscríbete ahora!</button>
                    </a>
                </div>
                @else
                <div class="col d-flex justify-content-center">
                    <button class="btn btn-danger p-2 fw-bold mt-4 disabled">Plazas agotadas</button>
                </div>
                @endif
            </div>
        @endforeach
    </div>
    <a class="returnButton" href="{{ route('index.index') }}">VOLVER A PÁGINA PRINCIPAL</a>

</div>
@section('footer')
@include('layout.footer')
