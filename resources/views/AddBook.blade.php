@extends('Template')

@section('content')
    <form method="POST" action="{{route('AddBook')}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="Title" class="form-label">Tytuł</label>
            <input type="text" class="form-control" id="Title" name="Title" placeholder="Wpisz Tytuł">
        </div>
        <div class="mb-3">
            <label for="Author" class="form-label">Autor</label>
            <input type="text" class="form-control" id="Author" name="Author" placeholder="Wpisz Autora">
        </div>
        <div class="mb-3">
            <label for="Date" class="form-label">Rok wydania</label>
            <input type="text" class="form-control" id="Date" name="Date" placeholder="Wpisz Rok wydania">
        </div>
        <input type="submit" value="Zapisz zmiany" class="btn btn-primary">
    </form>
@endsection('content')
