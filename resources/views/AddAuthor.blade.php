@extends('Template')

@section('content')
    <form method="POST" action="{{route('AddAuthor')}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="Name" class="form-label">Imię</label>
            <input type="text" class="form-control" id="Name" name="Name" placeholder="Wpisz imię">
        </div>
        <div class="mb-3">
            <label for="Surname" class="form-label">Nazwisko</label>
            <input type="text" class="form-control" id="Surname" name="Surname" placeholder="Wpisz nazwisko">
        </div>
        <div class="mb-3">
            <label for="Birth" class="form-label">Data urodzenia</label>
            <input type="text" class="form-control" id="Birth" name="Birth" placeholder="Wpisz datę urodzenia">
        </div>
        <div class="mb-3">
            <label for="Nationality" class="form-label">Narodowość</label>
            <input type="text" class="form-control" id="Nationality" name="Nationality" placeholder="Wpisz narodowość">
        </div>
        <input type="submit" value="Zapisz zmiany" class="btn btn-primary">
    </form>
@endsection('content')
