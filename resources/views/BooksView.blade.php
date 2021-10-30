@extends('Template')

@section ('content')
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Autor</th>
            <th scope="col">Rok wydania</th>
            <th scope="col">Edytuj</th>
            <th scope="col">Usuń</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Books as $item)
            <tr>
                <th scope="row">{{$item['id']}}</th>
                <td>{{$item['title']}}</td>
                <td>{{$item->Author->name." ".$item->Author->surname}}</td>
                <td>{{$item['date']}}</td>
                <td><a href="/book/{{$item['id']}}" class="btn btn-primary">Edytuj</a></td>
                <td><a href="/DeleteBook/{{$item['id']}}" class="btn btn-danger">Usuń</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection ('content')
