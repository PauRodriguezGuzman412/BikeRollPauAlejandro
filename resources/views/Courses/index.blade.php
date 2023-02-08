@extends('layout.layout')

@section('title','Carreras')

@section('header')
    @include('layout.header')

@section('component')

   <a href="{{ route('courses.create') }}">Crear carrera</a>
   <table style="text-align: center">
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
            <th>Active</th>
            <th>Editar</th>
            <th>Borrar</th>
        </tr>
        @foreach ($courses as $course)
            <tr>
                <td>{{ $course['id'] }}</td>
                <td>{{ $course['description'] }}</td>
                <td>{{ $course['slope'] }}</td>
                <td>{{ $course['map_image'] }}</td>
                <td>{{ $course['maxim_participants'] }}</td>
                <td>{{ $course['km'] }}</td>
                <td>{{ $course['start_date'] }}</td>
                <td>{{ $course['start_point'] }}</td>
                <td>{{ $course['promotion_banner'] }}</td>
                <td>{{ $course['sponsoring_money'] }}</td>
                <td>{{ $course['course_duration'] }}</td>
                <td>{{ $course['active'] }}</td>
                <td><a href="{{ route('courses.edit', $course['id']) }}">Editar carrera</a></td>
                <td><a href="{{ route('courses.delete', $course['id']) }}">Borrar carrera</a></td>

            </tr>
        @endforeach
    </table>
@section('footer')
@include('layout.footer')