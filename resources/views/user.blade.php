@extends('master')
@section('title','Welcome User')
@section('content')
    <h1>{{$name}}</h1>
    <p>{{$title}}</p>
    <button class="btn btn-primary">{{$name}}</button>
@stop
@section('msg')
@section('footer')
    <b>END of Page</b>
@stop
