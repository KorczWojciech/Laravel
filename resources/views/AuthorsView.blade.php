@extends('Template')

@section ('content')
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Imię</th>
            <th scope="col">Nazwisko</th>
            <th scope="col">Data urodzenia</th>
            <th scope="col">Narodowość</th>
            <th scope="col">Edytuj</th>
            <th scope="col">Usuń</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Authors as $item)
            <tr>
                <th scope="row">{{$item['id']}}</th>
                <td>{{$item['name']}}</td>
                <td>{{$item['surname']}}</td>
                <td>{{$item['birth']}}</td>
                <td>{{$item['nationality']}}</td>
                <td><a href="/author/{{$item['id']}}" class="btn btn-primary">Edytuj</a></td>
                <td><a href="/DeleteAuthor/{{$item['id']}}" class="btn btn-danger">Usuń</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection ('content')
