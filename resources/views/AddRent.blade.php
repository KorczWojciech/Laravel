@extends('Template')

@section('content')
    <form method="POST" action="{{route('AddRent')}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="Book_id" class="form-label">Id książki</label>
            <input type="text" class="form-control" id="Book_id" name="Book_id" placeholder="Wpisz id książki">
        </div>
        <div class="mb-3">
            <label for="Client_id" class="form-label">Id klienta</label>
            <input type="text" class="form-control" id="Client_id" name="Client_id" placeholder="Wpisz id klienta">
        </div>
        <div class="mb-3">
            <label for="Start_date" class="form-label">Data wypożyczenia</label>
            <input type="date" class="form-control" id="Start_date" name="Start_date" placeholder="Wpisz datę wypożyczenia">
        </div>
        <div class="mb-3">
            <label for="End_date" class="form-label">Data zwrotu</label>
            <input type="date" class="form-control" id="End_date" name="End_date" placeholder="Wpisz datę zwrotu">
        </div>
        <input type="submit" value="Zapisz zmiany" class="btn btn-primary">
    </form>
@endsection('content')

