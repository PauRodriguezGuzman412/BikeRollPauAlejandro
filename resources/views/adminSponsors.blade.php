@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')

    <form action="{{ route('admin.sponsors.store') }}" method="POST">
        @csrf
        
        @foreach ($errors->all() as $error)
            <div class="container">
                <li class="alert alert-danger">{{ $error }}</li>
            </div>
        @endforeach
            {{-- test --}}
        <input name="CIF"                type="text"     value="{{ old('CIF','') }}"                ><br>
        <input name="logo"               type="file"     value="{{ old('logo','') }}"               ><br>
        <textarea name="address"         type="textarea" value="{{ old('address','') }}"        ></textarea><br>
        <input name="maxim_participants" type="number"   value="{{ old('maxim_participants','') }}" ><br>
        <input name="km"                 type="float"    value="{{ old('km','') }}"                 ><br>
        <input name="start_date"         type="date"     value="{{ old('start_date','') }}"         ><br>
        <input name="start_point"        type="text"     value="{{ old('start_point','') }}"        ><br>
        <input name="promotion_banner"   type="file"     value="{{ old('promotion_banner','') }}"   ><br>
        <input name="sponsoring_money"   type="number"   value="{{ old('sponsoring_money','') }}"   ><br>
        <input name="course_duration"    type="time"     value="{{ old('course_duration','') }}"    ><br>
        <button class="btn btn-info">Submit</button>
    </form>
    
@section('footer')
@include('layout.footer')