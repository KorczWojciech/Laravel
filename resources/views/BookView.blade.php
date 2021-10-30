@extends('Template')

@section('content')
    <form method="POST" action="{{route('EditBook')}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="Title" class="form-label">Tytuł</label>
            <input type="text" class="form-control" id="Title" name="Title" placeholder="{{$Book['title']}}">
        </div>
        <div class="mb-3">
            <label for="Author" class="form-label">Autor</label>
            <input type="text" class="form-control" id="Author" name="Author" placeholder="{{$Book['author']}}">
        </div>
        <div class="mb-3">
            <label for="Date" class="form-label">Rok wydania</label>
            <input type="text" class="form-control" id="Date" name="Date" placeholder="{{$Book['date']}}">
        </div>
        <input type="submit" value="Zapisz zmiany" class="btn btn-primary">
        <input type="hidden" value="{{$Book['id']}}" name="BookId">
    </form>
@endsection('content')
