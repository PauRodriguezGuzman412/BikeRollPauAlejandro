@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')

    <form action="{{ route('courses.update', $course['id']) }}" method="POST">
        @csrf
        @method('PUT')

        @foreach ($errors->all() as $error)
            <div class="container">
                <li class="alert alert-danger">{{ $error }}</li>
            </div>
        @endforeach
        {{-- <input hidden name="id" type="text" value="{{ $course['id'] }}"/> --}}

        <label for="description">Description: </label>
        <textarea name="description" type="textarea" >{{ old('description',$course['description']) }}</textarea> <br>

        <label for="slope">Slope: </label>
        <input name="slope" type="number" value="{{ old('slope',$course['slope']) }}" ><br>

        <label for="map_iamge">Map Image: </label>
        <input name="map_image" type="file" value="{{ old('map_image',$course['map_image']) }}" ><br>

        <label for="maxim_participants">Maxim participants: </label>
        <input name="maxim_participants" type="number" value="{{ old('maxim_participants',$course['maxim_participants']) }}" ><br>

        <label for="km">Kilometres: </label>
        <input name="km" type="number" value="{{ old('km',$course['km']) }}" ><br>

        <label for="start_date">Start date: </label>
        <input name="start_date" type="date" value="{{ old('start_date',$course['start_date']) }}" ><br>

        <label for="start_point"> Start point: </label>
        <input name="start_point" type="text" value="{{ old('start_point',$course['start_point']) }}" ><br>

        <label for="promotion_banner">Promotion Banner: </label>
        <input name="promotion_banner" type="file" value="{{ old('promotion_banner',$course['promotion_banner']) }}" ><br>

        <label for="sponsoring_money">Sponsoring Money: </label>
        <input name="sponsoring_money" type="number" value="{{ old('sponsoring_money',$course['sponsoring_money']) }}" ><br>

        <label for="course_duration"> Course Duration: </label>
        <input name="course_duration" type="time" value="{{ old('course_duration',$course['course_duration']) }}"    ><br>

        <button class="btn btn-info">Submit</button>
    </form>
    
@section('footer')
@include('layout.footer')