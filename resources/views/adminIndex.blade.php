@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')
<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
<div class="container d-flex flex-column justify-content-start align-items-center adminFormDiv">
    <h1 class="logAdminTitle">LOGIN ADMIN</h1>
        <form method="POST" action="{{ route('admin.validate') }}" >
            @csrf
            <div class="mb-4">
                <input type="text" name="username" placeholder="Escribe tu usuario...">
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Escribe tu contraseña...">
            </div>
            <div>
                <button type="submit" class="submitLogAdminButton">INICIAR SESIÓN</button>
            </div>
        </form>
</div>
@section('footer')
    @include('layout.footer')