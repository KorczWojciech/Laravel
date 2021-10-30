@extends('Template')

@section('content')
    <form method="POST" action="{{route('EditClient')}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="Name" class="form-label">Imię</label>
            <input type="text" class="form-control" id="Name" name="Name" placeholder="{{$Client['name']}}">
        </div>
        <div class="mb-3">
            <label for="Surname" class="form-label">Nazwisko</label>
            <input type="text" class="form-control" id="Surname" name="Surname" placeholder="{{$Client['surname']}}">
        </div>
        <div class="mb-3">
            <label for="Pesel" class="form-label">PESEL</label>
            <input type="text" class="form-control" id="Pesel" name="Pesel" placeholder="{{$Client['pesel']}}">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">e-mail</label>
            <input type="text" class="form-control" id="Email" name="Email" placeholder="{{$Client['email']}}">
        </div>
        <input type="submit" value="Zapisz zmiany" class="btn btn-primary">
        <input type="hidden" value="{{$Client['id']}}" name="ClientId">
    </form>
@endsection('content')
