@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

    <form action="{{ route('sponsors.store') }}" method="POST">
        @csrf
        
        @foreach ($errors->all() as $error)
            <div class="container">
                <li class="alert alert-danger">{{ $error }}</li>
            </div>
        @endforeach
            {{-- test --}}
        <span>CIF</span>        <input name="CIF"                type="text"     value="{{ old('CIF','') }}"                ><br>
        <span>Nombre</span>        <input name="nombre"          type="text"     value="{{ old('nombre','') }}"             ><br>
        <span>Logo</span>       <input name="logo"               type="file"     value="{{ old('logo','') }}"               ><br>
        <span>Dirección</span>  <textarea name="address"         type="textarea" value="{{ old('address','') }}"            ></textarea><br>
        <span>1ª página</span>  <input name="principal_page"     type="boleean"  value="{{ old('principal_page','') }}"     ><br>
        <button class="btn btn-info">Submit</button>
    </form>
    
@section('footer')
@include('layout.footer')