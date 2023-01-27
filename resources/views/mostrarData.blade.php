@extends('layout.layout')

@section('title','Laravel')

@section('header')
    @include('layout.header')

@section('component')
    {{ "hola ".$titulo.$data }}
    <h5>{{ $titulo }}</h5>
    <a href="{{ route('index.index') }}"></a>
    
@section('footer')
    @include('layout.footer')