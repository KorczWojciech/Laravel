@extends('Template')

@section ('content')
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">PESEL</th>
            <th scope="col">E-mail</th>
            <th scope="col">Edytuj</th>
            <th scope="col">Usuń</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Clients as $item)
            <tr>
                <th scope="row">{{$item['id']}}</th>
                <td>{{$item['name']}}</td>
                <td>{{$item['surname']}}</td>
                <td>{{$item['pesel']}}</td>
                <td>{{$item['email']}}</td>
                <td><a href="/client/{{$item['id']}}" class="btn btn-primary">Edytuj</a></td>
                <td><a href="/DeleteClient/{{$item['id']}}" class="btn btn-danger">Usuń</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection ('content')
