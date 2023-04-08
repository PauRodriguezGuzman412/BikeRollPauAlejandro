@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
</div>
<div class="container d-flex flex-column justify-content-start align-items-center createRunnerformDiv">
    <h1 class="formTitle">MODIFICAR ASEGURADORA</h1>
    <form action="{{ route('insurances.update', $insurances['id']) }}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <input name="id" type="hidden" value="{{ old('id',$insurances['id']) }}">
        <div class="mb-4 runnerInput">
            <span>CIF</span>
            <input name="CIF" type="number" value="{{ old('CIF',$insurances['CIF']) }}" placeholder="CIF">
        </div>
        <div class="mb-4 runnerInput">
            <span>Nombre</span>
            <textarea name="name" type="text" value="{{ old('name',$insurances['name']) }}" placeholder="nombre">{{$insurances['name']}}</textarea>
        </div>
        <div class="mb-4 runnerInput">
            <span>Dirección</span>
            <textarea name="address" type="text" value="{{ old('address',$insurances['address']) }}" placeholder="Direccion">{{$insurances['address']}}</textarea>
        </div>
        <div class="mb-4 runnerInput">
            <span>Precio</span>
            <textarea name="price" type="number" value="{{ old('price',$insurances['price']) }}" placeholder="Precio">{{$insurances['price']}}</textarea>
        </div>
        <button type="submit" class="submitLogAdminButton">MODIFICAR ASEGURADORA</button>
    </form>
    <div>
        <a class="returnFormButton" href="{{ route('insurances') }}">VOLVER</a>
    </div>
</div>
@foreach ($errors->all() as $error)
        <div class="container">
            <li class="alert alert-danger">{{ $error }}</li>
        </div>
    @endforeach
@section('footer')
@include('layout.footer')
