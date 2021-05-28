@extends('layouts.app')

@section('content')

    <h1>
        Post Here: arguments passed: <br>
        id : {{ $id }} <br>
        name : {{ $name }} <br>
        password : {{ $password }}
    </h1>

@stop
