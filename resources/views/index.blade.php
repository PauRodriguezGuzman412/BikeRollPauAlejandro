@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')
    <h1 class="text-center display-2 mb-5" >PRÓXIMAS CARRERAS</h1>
    <div class="row d-flex justify-content-center">
        @foreach ($recentCourses as $course)
            <div class="col-5 rounded bg-white me-2 mb-5">
                <h2 class="text-center fw-bold mt-4">{{$course->name}}</h2>
                <img class="img-fluid mx-auto d-block w-75 mb-5 mt-5 bannerImg" src="{{asset($course->promotion_banner)}}" />
                <h4>Fecha: {{ date("d/m/Y",strtotime($course->start_date)) }}</h4>
                <h4>Precio de inscripción:
                    <span class="fw-bold"> {{ number_format($course->price, 2, ',', '.') }} €</span>
                </h4>
                <h5>{{ mb_strimwidth($course->description,0,300,"...") }}</h5>
                <div class="col d-flex justify-content-center">
                    <a href="{{ route('courses.registerWithIDForm',$course['id']) }}">
                        <button class="btn btn-primary p-2 fw-bold mt-4">Inscríbete ahora!</button>
                    </a>
                </div>
            </div>

        @endforeach
    </div>
        <div class="row d-flex justify-content-center">
            <h1 class="text-center mt-5 mb-5" >Nuestros sponsors:</h1>
            @foreach($principalSponsors as $sponsor)
                <div class="col-3">
                    <img class="img-fluid mx-auto d-block principalSponsorImg" src="{{ asset($sponsor->logo) }}"/>
                </div>
            @endforeach
        </div>
    </div>
@section('footer')
    @include('layout.footer')
