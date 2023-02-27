@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')
<div class="container d-flex flex-column justify-content-center align-items-center">
    <form action="{{ route('courses.register') }}" method="POST">
        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email">
    </form>
</div>
@section('footer')
@include('layout.footer')