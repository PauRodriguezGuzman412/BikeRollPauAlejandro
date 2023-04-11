@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
<div class="container d-flex flex-row justify-content-around align-items-center adminIndexDiv">
    <a href="{{ route('courses') }}" class="adminLinks">
        <div class= "d-flex flex-column align-items-center sectionDiv me-3">
            <p class="sectionTitle">CARRERAS</p>
            <img class="coursesImg" src="{{ asset('img/courses-icon.png') }}">
        </div>
    </a>
    <a href="{{ route('sponsors') }}" class="adminLinks">
    <div class= "d-flex flex-column align-items-center sectionDiv me-3">
        <p class="sectionTitle">SPONSORS</p>
        <img class="sponsorsImg" src="{{ asset('img/sponsors-icon.png') }}">
    </div>
    </a>
    {{-- <a href="{{ route('runners') }}" class="adminLinks">
        <div class= "d-flex flex-column align-items-center sectionDiv me-3">
            <p class="sectionTitle">CORREDORES</p>
            <img class="runnersImg" src="{{ asset('img/runners-icon.png') }}">
        </div>
    </a> --}}
    <a href="{{ route('insurances') }}" class="adminLinks">
        <div class= "d-flex flex-column align-items-center sectionDiv me-3">
            <p class="sectionTitle">ASEGURADORAS</p>
            <img class="runnersImg" src="{{ asset('img/insurance-icon.png') }}">
        </div>
    </a>
</div>
@section('footer')
    @include('layout.footer')
