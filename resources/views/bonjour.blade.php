@extends('layout')
@section('title', 'page bonjour')

@section('contenu')

    @isset($nom)
        <h1>bonjour {{ $gender?? }} {{ $nom }} </h1>
    @else
        <h1>Hello world </h1>  
        p
        
    @endisset


    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque exercitationem iusto eum rem debitis ducimus
        obcaecati magnam sit! Placeat natus repellat iusto quibusdam, ea necessitatibus. Inventore veritatis tempora
        blanditiis nesciunt.</p>
@endsection
