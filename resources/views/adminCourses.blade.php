@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')

    <form action="{{ route('admin.courses.store') }}">
        @csrf
        
        <input name="slope" type="number" value="{{ old('slope','') }}" required><br>
        <textarea name="description" type="textarea" value="{{ old('description','') }}" required></textarea>

    </form>
    
@section('footer')
@include('layout.footer')