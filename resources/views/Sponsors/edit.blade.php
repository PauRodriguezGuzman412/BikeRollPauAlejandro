@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
</div>
<div class="container d-flex flex-column justify-content-start align-items-center createRunnerformDiv">
    <h1 class="formTitle">MODIFICAR SPONSOR</h1>
    <script src="{{ asset('js/components/modifyPicture.js')}}"></script>
    <form action="{{ route('sponsors.update', $sponsor['id']) }}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')
        <input name="id"        type="hidden"     value="{{ old('id',$sponsor['id']) }}">
        <div class="mb-4 runnerInput">
            <span>CIF</span>
            <input name="CIF" type="text" value="{{ old('CIF',$sponsor['CIF']) }}" placeholder="CIF">
        </div>
        <div class="mb-4 runnerInput">
            <span>Nombre</span>
            <textarea name="nombre" type="text" value="{{ old('nombre',$sponsor['nombre']) }}" placeholder="nombre">{{$sponsor['nombre']}}</textarea>
        </div>
        <div class="mb-4 runnerInput">
            <span>Logo</span>
            <input name="logo" type="file" value="{{ old('logo',$sponsor['logo']) }}" placeholder="Logo">
        </div>
        <div class="mb-4 runnerInput">
            <span>Dirección</span>
            <textarea name="address" type="text" value="{{ old('address',$sponsor['address']) }}" placeholder="Direccion">{{$sponsor['address']}}</textarea>
        </div>
        <div class="d-flex flex-column mb-4 checkBoxSponsorInput">
            <span>1ª página</span> 
            <input type="hidden" name="principal_page" value="{{ old('principal_page',$sponsor['principal_page']) }}">
            <input name="principal_page" type="checkbox">
        </div>
        <button type="submit" class="submitLogAdminButton">MODIFICAR SPONSOR</button>
    </form>
    <div>
        <a class="returnFormButton" href="{{ route('sponsors') }}">VOLVER</a>
    </div>
</div>
@foreach ($errors->all() as $error)
        <div class="container">
            <li class="alert alert-danger">{{ $error }}</li>
        </div>
    @endforeach   
@section('footer')
@include('layout.footer')