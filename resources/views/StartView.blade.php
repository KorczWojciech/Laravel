@extends ('Template')

@section('content')
    <?php
    use Illuminate\Support\Facades\Auth;
    ?>
    @if(Auth::check()==true)
    <div class="zalogowany">
        <p>
            Jesteś zalogowany jako {{Auth::user()->name}}!
        </p>
    </div>
    @endif
<div class="row mt-3">
  <div class="col-sm-6 ">
    <div class="card">
      <div class="card-body background_ksiazki">
        <h5 class="card-title">Książki</h5>
        <p class="card-text">Wybierz opcję:</p>
        <a href="{{asset('/books')}}" class="btn btn-primary mt-1">Zobacz spis książek</a>
        <a href="{{asset('/addBook')}}" class="btn btn-primary mt-1">Dodaj nową książkę</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body background_autorzy">
        <h5 class="card-title">Autorzy</h5>
        <p class="card-text">Wybierz opcję:</p>
          <a href="{{asset('/authors')}}" class="btn btn-primary mt-1">Zobacz spis autorów</a>
          <a href="{{asset('/addAuthor')}}" class="btn btn-primary mt-1">Dodaj nowego autora</a>
      </div>
    </div>
  </div>
</div>
    @if(Auth::check()==true)
        @if(Auth::user()->type=='admin')
<div class="row mt-3">
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body background_klienci">
                <h5 class="card-title">Klienci</h5>
                <p class="card-text">Wybierz opcję:</p>
                <a href="{{asset('/clients')}}" class="btn btn-primary mt-1">Zobacz spis klientów</a>
                <a href="{{asset('/addClient')}}" class="btn btn-primary mt-1">Dodaj nowego klienta</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body background_wypozyczenia">
                <h5 class="card-title">Wypożyczenia</h5>
                <p class="card-text">Wybierz opcję:</p>
                <a href="{{asset('/rents')}}" class="btn btn-primary mt-1">Zobacz spis wypożyczeń</a>
                <a href="{{asset('/addRent')}}" class="btn btn-primary mt-1">Dodaj nowe wypożyczenie</a>
            </div>
        </div>
    </div>
</div>
    @endif
    @endif
@endsection('content')
