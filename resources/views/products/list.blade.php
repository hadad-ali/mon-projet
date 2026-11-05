@extends('layout')
@section('title', 'liste des utilisateurs')

@section('contenu')
    <h1>liste des produits</h1>

    $prods = [Produit1(id,title),Produit2(id,title)]


    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>title</th>
            <th>price</th>
        </tr>
        @foreach ($prods as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->title }}</td>
                <td>{{ $p->price }}</td>
            </tr>
        @endforeach

    </table>
@endsection
