@extends('layout')

@section('contenu')
    <h1>Nouveau Produit</h1>
    <form action="/store" method="POST">

        <label for="">titre : </label>
        <input type="text" name="tt"> <br>
        <label for="">prix : </label>
        <input type="number" name="pp"> <br>

        <input type="submit" value="Ajouter +">
    </form>
@endsection
