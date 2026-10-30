@extends('layout')
@section('title', 'liste des utilisateurs')

@section('contenu')
    <h1>liste des utilisateurs</h1>

    $users = [USER1,USER2.....38]

    <table class="table table-striped">
        <tr>
            <th>id</th>
            <th>name</th>
            <th>email</th>
        </tr>
        @foreach ($users as $u)
            <tr>
                <td>{{ $u->id }}</td>
                <td>{{ $u['name'] }}</td>
                <td>{{ $u->email }}</td>
            </tr>
        @endforeach
    </table>
@endsection
