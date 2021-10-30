@extends('Template')

@section('content')
    <form method="POST" action="{{route('EditAuthor')}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="Name" class="form-label">Imię</label>
            <input type="text" class="form-control" id="Name" name="Name" placeholder="{{$Author['name']}}">
        </div>
        <div class="mb-3">
            <label for="Surname" class="form-label">Nazwisko</label>
            <input type="text" class="form-control" id="Surname" name="Surname" placeholder="{{$Author['surname']}}">
        </div>
        <div class="mb-3">
            <label for="Birth" class="form-label">Data urodzenia</label>
            <input type="date" class="form-control" id="Birth" name="Birth" placeholder="{{$Author['birth']}}">
        </div>
        <div class="mb-3">
            <label for="Nationality" class="form-label">Narodowość</label>
            <input type="text" class="form-control" id="Nationality" name="Nationality" placeholder="{{$Author['nationality']}}">
        </div>
        <input type="submit" value="Zapisz zmiany" class="btn btn-primary">
        <input type="hidden" value="{{$Author['id']}}" name="AuthorId">
    </form>
@endsection('content')
