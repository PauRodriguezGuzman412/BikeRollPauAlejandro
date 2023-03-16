@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<div class="container">
    <p>You succesfully registered for course {{$id}} :3</p>
</div>