@extends('layout')

@section('css')
    <style>
        body {
            background-color: rgba(0, 0, 0, .5);
        }
    </style>
@stop


@section('content')
    <h1>{{$color}}</h1>
@stop