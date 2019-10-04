@extends('master')

@section('sidebar')
@parent
    <p>This about sidebar</p>
@endsection

@section('component')
    <h1>About Page</h1>

    @php
        $name = 'ING';
        echo $name;
    @endphp

@endsection
