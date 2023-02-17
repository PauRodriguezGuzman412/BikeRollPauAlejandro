@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')
    @include('layout.nav')

@section('component')

    <script src="{{ asset('js/components/modifyPicture.js')}}"></script>
    <form action="{{ route('sponsors.update', $sponsor['id']) }}" method="POST" enctype='multipart/form-data'>
        @csrf
        @method('PUT')

        @foreach ($errors->all() as $error)
            <div class="container">
                <li class="alert alert-danger">{{ $error }}</li>
            </div>
        @endforeach
        
            {{-- test --}}
        <input name="id"        type="hidden"     value="{{ old('id',$sponsor['id']) }}"><br>
        <span>CIF</span>        <input name="CIF"                type="text"     value="{{ old('CIF',$sponsor['CIF']) }}"><br>
        <span>Nombre</span>     <input name="nombre"              type="text"     value="{{ old('nombre',$sponsor['nombre']) }}" ><br>
        <input type="file" name="logo" value="{{ $sponsor['logo'] }}">
        <img src={{ $sponsor['logo'] }} alt="'Logo sponsor'"><br/>
        <span>Modificar foto</span> <input id="Foto" type="checkbox" onclick="modificarFoto();"><br>
        <div id="divFoto"></div>
        {{-- <span>Logo</span>       <input name="logo"               type="file"               ><br> --}}
        <span>Dirección</span>  <textarea name="address"         type="textarea"    >{{ $sponsor['address'] }}</textarea><br>
        <input type="text" name="principal_page" value="0">
        <span>1ª página</span>  <input name="principal_page"     type="checkbox"  value="{{ old('principal_page',$sponsor['principal_page']) }}"     ><br>
        <button class="btn btn-info">Submit</button>
    </form>
    
@section('footer')
@include('layout.footer')