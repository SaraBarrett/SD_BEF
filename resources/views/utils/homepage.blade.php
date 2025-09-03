@extends('layouts.fe_master')


@section('content')
    <h1>Sou a tua HomePage</h1>

    @auth
        <h5>Olá {{ Auth::user()->name }}</h5>
        <h5>o user logado é {{ Auth::user()->name }} e o email é {{ Auth::user()->email }}</h5>
    @endauth



    <img src="{{ asset('images/images.jpg') }}" alt="">

    <h6>Dados do Cesae</h6>
    <ul>
        <li>nome: {{ $cesaeInfo['name'] }}</li>
        <li>morada: {{ $cesaeInfo['address'] }}</li>
    </ul>

    <ul>
        <li><a href="{{ route('hello_route_name') }}">Hello</a></li>
        <li><a href="{{ route('users.add') }}">Adicionar Users</a></li>
        @auth
            @if (Auth::user()->email == 'admin@gmail.com')
                <li><a href="{{ route('users.all') }}">Todos os Users</a></li>
            @endif
        @endauth
    @auth
            <li><a href="{{ route('tasks.all') }}">Tarefas</a></li>
    @endauth

    </ul>
@endsection
