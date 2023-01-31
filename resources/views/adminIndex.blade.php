@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')
    <a href="{{ route('admin.courses.index') }}">Carreras</a><br>
    <a href="{{ route('admin.aseguradoras.index') }}">Aseguradoras</a><br>
    <a href="{{ route('admin.sponsors.index') }}">Sponsors</a><br>
    
@section('footer')
    @include('layout.footer')