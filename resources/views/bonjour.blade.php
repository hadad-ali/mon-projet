@extends('layout')
@section('title', 'page bonjour')

@section('contenu')

    @isset($nom)
        <h1>bonjour {{ $gender?? }} {{ $nom }} </h1>
    @else
        <h1>Bonjour</h1>

    @endisset



@endsection
