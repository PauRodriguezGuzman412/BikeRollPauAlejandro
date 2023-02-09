@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')

<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
<div class="container d-flex flex-row justify-content-around align-items-center adminIndexDiv">
    <a href="{{ route('courses') }}" class="adminLinks">
        <div class= "d-flex flex-column align-items-center sectionDiv">
            <p class="sectionTitle">COURSES</p>
            <img class="coursesImg" src="{{ asset('img/courses-icon.png') }}">
        </div>
    </a>
    <a href="{{ route('sponsors') }}" class="adminLinks">
    <div class= "d-flex flex-column align-items-center sectionDiv">
        <p class="sectionTitle">SPONSORS</p>
        <img class="sponsorsImg" src="{{ asset('img/sponsors-icon.png') }}">
    </div>
    </a>
    <a href="{{ route('runners') }}" class="adminLinks">
        <div class= "d-flex flex-column align-items-center sectionDiv">
            <p class="sectionTitle">RUNNERS</p>
            <img class="runnersImg" src="{{ asset('img/runners-icon.png') }}">
        </div>
    </a>
    {{-- <a href="{{ route('runners') }}">Runners</a> --}}
</div>
@section('footer')
    @include('layout.footer')