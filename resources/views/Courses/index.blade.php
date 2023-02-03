@extends('layout.layout')

@section('title','Admin')

@section('header')
    @include('layout.header')

@section('component')

   <a href="{{ route('courses.create') }}">Crer carrera</a>
    
   @foreach ($courses as $course)
       <table>
            <tr>
                <th>ID</th>
                <th>Description</th>
                <th>Slope</th>
                <th>Map Image</th>
                <th>Maxim participants</th>
                <th>Kilometres</th>
                <th>Start date</th>
                <th>Start point</th>
                <th>Promotion Banner</th>
                <th>Sponsoring Money</th>
                <th>Course Duration</th>
            </tr>

            <tr>
                @foreach ($course as  $courseField)
                @dd($courseField)
                    <td>{{ $courseField }}</td>
                @endforeach
            </tr>
       </table>
   @endforeach
@section('footer')
@include('layout.footer')