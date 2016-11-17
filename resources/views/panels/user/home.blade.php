@extends('layouts.main')

@section('head')

@stop

@section('content')

    <h2 style="margin-bottom:40px;">Ordinary User Panel Home Page</h2>

    <p><a href="{{ route('activated.protected') }}">Protected Page</a> - This page is protected with <code>activated</code> middleware.</p>

@stop