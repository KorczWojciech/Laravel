@extends('Template')

@section('content')
    <form method="POST" action="{{route('EditRent')}}">
        @csrf
        <div class="mb-3 mt-3">
            <label for="Book_id" class="form-label">Id książki</label>
            <input type="text" class="form-control" id="Book_id" name="Book_id" placeholder="{{$Rent['book_id']}}">
        </div>
        <div class="mb-3">
            <label for="Client_id" class="form-label">Id klienta</label>
            <input type="text" class="form-control" id="Client_id" name="Client_id" placeholder="{{$Rent['client_id']}}">
        </div>
        <div class="mb-3">
            <label for="Start_date" class="form-label">Data wypożyczenia</label>
            <input type="date" class="form-control" id="Start_date" name="Start_date" placeholder="{{$Rent['start_date']}}">
        </div>
        <div class="mb-3">
            <label for="End_date" class="form-label">Data zwrotu</label>
            <input type="date" class="form-control" id="End_date" name="End_date" placeholder="{{$Rent['end_date']}}">
        </div>
        <input type="submit" value="Zapisz zmiany" class="btn btn-primary">
        <input type="hidden" value="{{$Rent['id']}}" name="RentId">
    </form>
@endsection('content')
