@extends('layout')
@section('title', 'detail produit')

@section('contenu')
    <h1>{{ $p->title }}</h1>
    <p>prix : {{ $p->price }} dh</p>
@endsection
