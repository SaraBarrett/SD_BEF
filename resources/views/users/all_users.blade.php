@extends('layouts.fe_master')
@section('content')
    <h4>Aqui terás todos os users</h4>

    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
@endsection
