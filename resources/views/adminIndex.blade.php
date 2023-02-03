@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')
    <a href="{{ route('courses') }}">Carreras</a><br>
    <a href="{{ route('admin.aseguradoras.index') }}">Aseguradoras</a><br>
    <a href="{{ route('sponsors') }}">Sponsors</a><br>
    
@section('footer')
    @include('layout.footer')