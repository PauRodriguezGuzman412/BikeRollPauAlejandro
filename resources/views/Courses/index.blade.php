@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')

   <a href="{{ route('courses') }}"></a>
    
@section('footer')
@include('layout.footer')