@extends('layouts.fe_master')


@section('content')
    <h1>Sou a tua HomePage</h1>
    <h5>Olá {{ isset($myName) ? $myName : 'Utilizador' }}</h5>
    <img src="{{ asset('images/images.jpg') }}" alt="">

    <ul>
        <li><a href="{{ route('hello_route_name') }}">Hello</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Users</a></li>
        <li><a href="{{route('users.all')}}">Todos os Users</a></li>
    </ul>
@endsection
