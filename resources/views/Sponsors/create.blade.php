@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('nav')
@include('layout.nav')

@section('component')

    <div class="container d-flex flex-column justify-content-start align-items-center createRunnerformDiv">
        <h1 class="formTitle">CREAR SPONSOR</h1>
        <form action="{{ route('sponsors.store') }}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="mb-4 runnerInput">
                <input name="CIF" type="text" value="{{ old('CIF','') }}" placeholder="CIF">
            </div>
            <div class="mb-4 runnerInput">
                <textarea name="nombre" type="text" value="{{ old('nombre','') }}" placeholder="nombre"></textarea>
            </div>
            <div class="mb-4 runnerInput">
                <span>Logo</span>
                <input name="logo" type="file" value="{{ old('logo','') }}" placeholder="Logo">
            </div>

            <div class="mb-4 runnerInput">
                <textarea name="address" type="text" value="{{ old('address','') }}" placeholder="Direccion"></textarea>
            </div>
            <div class="mb-4 runnerInput">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Cursas disponibles
                    </button>
                    <ul class="dropdown-menu">
                        @foreach ($courses as $course)
                            <li class="d-flex p-2">
                                <input style="width:10px; height:10px padding-down:100px" type="checkbox" name="course_{{ $course['id'] }}" id="{{ $course['id'] }}" class="dropdown-item">
                                <label for="{{ $course['id'] }}">{{ $course['name'] }}</label>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="d-flex flex-column mb-4 checkBoxSponsorInput">
                <span>1ª página</span>
                <input type="hidden" name="principal_page" value="0">
                <input name="principal_page" type="checkbox">
            </div>
            <button type="submit" class="submitLogAdminButton">AÑADIR SPONSOR</button>
        </form>
    </div>
@foreach ($errors->all() as $error)
    <div class="container">
        <li class="alert alert-danger">{{ $error }}</li>
    </div>
@endforeach

@section('footer')
@include('layout.footer')
