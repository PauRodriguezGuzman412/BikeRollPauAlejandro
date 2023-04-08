@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('nav')
@include('layout.nav')

@section('component')

    <div class="container d-flex flex-column justify-content-start align-items-center createRunnerformDiv">
        <h1 class="formTitle">CREAR ASEGURADORA</h1>
        <form action="{{ route('insurances.store') }}" method="POST" enctype='multipart/form-data'>
            @csrf
            <div class="mb-4 runnerInput">
                <input name="CIF" type="number" value="{{ old('CIF','') }}" placeholder="CIF">
            </div>
            <div class="mb-4 runnerInput">
                <textarea name="name" type="text" value="{{ old('name','') }}" placeholder="nombre"></textarea>
            </div>
            <div class="mb-4 runnerInput">
                <textarea name="address" type="text" value="{{ old('address','') }}" placeholder="Direccion"></textarea>
            </div>

            <div class="mb-4 runnerInput">
                <textarea name="price" type="number" value="{{ old('price','') }}" placeholder="Precio"></textarea>
            </div>
            <button type="submit" class="submitLogAdminButton">AÑADIR ASEGURADORA</button>
        </form>
    </div>
@foreach ($errors->all() as $error)
    <div class="container">
        <li class="alert alert-danger">{{ $error }}</li>
    </div>
@endforeach

@section('footer')
@include('layout.footer')
