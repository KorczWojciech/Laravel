@extends('Template')

@section ('content')
    <table class="table table-striped mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Tytuł</th>
            <th scope="col">Wypożyczjący</th>
            <th scope="col">Data wypożyczenia</th>
            <th scope="col">Data zwrotu</th>
            <th scope="col">Edytuj</th>
            <th scope="col">Usuń</th>
        </tr>
        </thead>
        <tbody>
        @foreach($Rents as $item)
            <tr>
                <th scope="row">{{$item['id']}}</th>
                <td>{{$item->Book->title}}</td>
                <td>{{$item->CLient->name." ". $item->CLient->surname}}</td>
                <td>{{$item['start_date']}}</td>
                <td>{{$item['end_date']}}</td>
                <td><a href="/rent/{{$item['id']}}" class="btn btn-primary">Edytuj</a></td>
                <td><a href="/DeleteRent/{{$item['id']}}" class="btn btn-danger">Usuń</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection ('content')
