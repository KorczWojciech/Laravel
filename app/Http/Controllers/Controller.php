<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Book;
use App\Models\Author;
use App\Models\Rent;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function ShowBooksView()
    {
        $Books = Book::all();

        return view('BooksView', ['Books' => $Books]);

    }

    public function ShowStartView()
    {
        return view('StartView');
    }

    public function ShowBook($id)
    {
        $Book = Book::query()->where('id', '=', $id)->first();

        return view('BookView', ['Book' => $Book]);
    }

    public function EditBook(Request $Request)
    {
        $Title = $Request->input('Title');
        $Author = $Request->input('Author');
        $Date = $Request->input('Date');
        $Id = $Request->input('BookId');

        $Book = Book::query()->where('id', '=', $Id)->first();
        if ($Title != null)
            $Book->title = $Title;
        if ($Author != null)
            $Book->author = $Author;
        if ($Date != null)
            $Book->date = $Date;
        $Book->save();

        return Redirect::route('ShowBooksView');
    }

    public function ShowAddBook()
    {
        return view('AddBook');
    }

    public function AddBook(Request $Request)
    {
        $Title = $Request->input('Title');
        $Author = $Request->input('Author');
        $Date = $Request->input('Date');
        $Book = new Book();
        $Book->title = $Title;
        $Book->author = $Author;
        $Book->date = $Date;
        $Book->save();

        return Redirect::route('ShowBooksView');
    }

    public function DeleteBook($Id)
    {
        $Book = Book::query()->where('id', '=', $Id)->first();
        $Book->delete();
        return Redirect::route('ShowBooksView');
    }
    public function ShowAuthorsView()
    {
        $Authors = Author::all();
        return view('AuthorsView', ['Authors' => $Authors]);
    }
    public function ShowAuthor($id)
    {
        $Author = Author::query()->where('id', '=', $id)->first();

        return view('AuthorView', ['Author' => $Author]);
    }
    public function EditAuthor(Request $Request)
    {
        $Name = $Request->input('Name');
        $Surname = $Request->input('Surname');
        $Birth = $Request->input('Birth');
        $Nationality = $Request->input('Nationality');
        $Id = $Request->input('AuthorId');

        $Author = Author::query()->where('id', '=', $Id)->first();
        if ($Name != null)
            $Author->name = $Name;
        if ($Surname != null)
            $Author->surname = $Surname;
        if ($Birth != null)
            $Author->birth = $Birth;
        if ($Nationality != null)
            $Author->nationality = $Nationality;
        $Author->save();

        return Redirect::route('ShowAuthorsView');
    }
    public function DeleteAuthor($Id)
    {
        $Author = Author::query()->where('id', '=', $Id)->first();
        $Author->delete();
        return Redirect::route('ShowAuthorsView');
    }

    public function ShowAddAuthor()
    {
        return view('AddAuthor');
    }
    public function AddAuthor(Request $Request)
    {
        $Name = $Request->input('Name');
        $Surname = $Request->input('Surname');
        $Birth = $Request->input('Birth');
        $Nationality = $Request->input('Nationality');
        $Author = new Author();
        $Author->name = $Name;
        $Author->surname = $Surname;
        $Author->birth = $Birth;
        $Author->nationality = $Nationality;

        $Author->save();

        return Redirect::route('ShowAuthorsView');
    }
    public function ShowRentsView()
    {
        $Rents = Rent::all();

        return view('RentsView', ['Rents' => $Rents]);

    }
    public function ShowRent($id)
    {
        $Rent = Rent::query()->where('id', '=', $id)->first();

        return view('RentView', ['Rent' => $Rent]);
    }
    public function EditRent(Request $Request)
    {
        $Book_id = $Request->input('Book_id');
        $Client_id = $Request->input('Client_id');
        $Start_date = $Request->input('Start_date');
        $End_date = $Request->input('End_date');
        $Id = $Request->input('RentId');

        $Rent = Rent::query()->where('id', '=', $Id)->first();
        if ($Book_id != null)
            $Rent->book_id = $Book_id;
        if ($Client_id != null)
            $Rent->client_id = $Client_id;
        if ($Start_date != null)
            $Rent->start_date = $Start_date;
        if ($End_date != null)
            $Rent->end_date = $End_date;
        $Rent->save();

        return Redirect::route('ShowRentsView');
    }
    public function DeleteRent($Id)
    {
        $Rent = Rent::query()->where('id', '=', $Id)->first();
        $Rent->delete();
        return Redirect::route('ShowRentsView');
    }
    public function ShowAddRent()
    {
        return view('AddRent');
    }
    public function AddRent(Request $Request)
    {
        $Book_id = $Request->input('Book_id');
        $Client_id = $Request->input('Client_id');
        $Start_date = $Request->input('Start_date');
        $End_date = $Request->input('End_date');
        $Rent = new Rent();
        $Rent->book_id = $Book_id;
        $Rent->client_id = $Client_id;
        $Rent->start_date = $Start_date;
        $Rent->end_date = $End_date;

        $Rent->save();

        return Redirect::route('ShowRentsView');
    }
    public function ShowClientsView()
    {
        $Clients = Client::all();
        return view('ClientsView', ['Clients' => $Clients]);

    }
    public function ShowAddClient()
    {
        return view('AddClient');
    }

    public function AddClient(Request $Request)
    {
        $Name = $Request->input('Name');
        $Surname = $Request->input('Surname');
        $Pesel = $Request->input('Pesel');
        $Email = $Request->input('Email');
        $Client = new Client();
        $Client->name = $Name;
        $Client->surname = $Surname;
        $Client->pesel = $Pesel;
        $Client->email = $Email;
        $Client->save();

        return Redirect::route('ShowClientsView');
    }

    public function ShowClient($id)
    {
        $Client = Client::query()->where('id', '=', $id)->first();

        return view('ClientView', ['Client' => $Client]);
    }

    public function EditClient(Request $Request)
    {
        $Name = $Request->input('Name');
        $Surname = $Request->input('Surname');
        $Pesel = $Request->input('Pesel');
        $Email = $Request->input('Email');
        $Id = $Request->input('ClientId');

        $Client = Client::query()->where('id', '=', $Id)->first();
        if ($Name != null)
            $Client->name = $Name;
        if ($Surname != null)
            $Client->surname = $Surname;
        if ($Pesel != null)
            $Client->pesel = $Pesel;
        if ($Email != null)
            $Client->email = $Email;
        $Client->save();

        return Redirect::route('ShowClientsView');
    }
    public function DeleteClient($Id)
    {
        $Client = Client::query()->where('id', '=', $Id)->first();
        $Client->delete();
        return Redirect::route('ShowClientsView');
    }

    public function Logout()
    {
        auth::logout();
        return Redirect::route('ShowStartView');
    }
    public function NotDashboard()
    {
        return Redirect::route('ShowStartView');
    }
}
