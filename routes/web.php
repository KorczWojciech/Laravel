<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Inertia\Inertia;

Route::get('/', [Controller::class, 'ShowStartView'])->name('ShowStartView');

Route::get('/books',[Controller::class,'ShowBooksView'])->name('ShowBooksView');

Route::get('/addBook',[Controller::class,'ShowAddBook'])->name('ShowAddBook')->middleware('auth');

Route::post('addedBook',[Controller::class,'AddBook'])->name('AddBook')->middleware('auth');

Route::get('/book/{id}',[Controller::class,'ShowBook'])->name('ShowBook')->where('id', '[0-9]+')->middleware('auth');


Route::post('editedBook',[Controller::class,'EditBook'])->name('EditBook')->middleware('auth');

Route::get('/DeleteBook/{id}',[Controller::class,'DeleteBook'])->name('DeleteBook')->where('id', '[0-9]+')->middleware('auth');





Route::get('/authors',[Controller::class,'ShowAuthorsView'])->name('ShowAuthorsView');

Route::get('/addAuthor',[Controller::class,'ShowAddAuthor'])->name('ShowAddAuthor')->middleware('auth');

Route::post('addedAuthor',[Controller::class,'AddAuthor'])->name('AddAuthor')->middleware('auth');

Route::get('/author/{id}',[Controller::class,'ShowAuthor'])->name('ShowAuthor')->where('id', '[0-9]+')->middleware('auth');

Route::post('editedAuthor',[Controller::class,'EditAuthor'])->name('EditAuthor')->middleware('auth');

Route::get('/DeleteAuthor/{id}',[Controller::class,'DeleteAuthor'])->name('DeleteAuthor')->where('id', '[0-9]+')->middleware('auth');



Route::get('/rents',[Controller::class,'ShowRentsView'])->name('ShowRentsView')->middleware('auth');

Route::get('/addRent',[Controller::class,'ShowAddRent'])->name('ShowAddRent')->middleware('auth');

Route::post('addedRent',[Controller::class,'AddRent'])->name('AddRent')->middleware('auth');

Route::get('/rent/{id}',[Controller::class,'ShowRent'])->name('ShowRent')->where('id', '[0-9]+')->middleware('auth');

Route::post('editedRent',[Controller::class,'EditRent'])->name('EditRent')->middleware('auth');

Route::get('/DeleteRent/{id}',[Controller::class,'DeleteRent'])->name('DeleteRent')->where('id', '[0-9]+')->middleware('auth');



Route::get('/clients',[Controller::class,'ShowClientsView'])->name('ShowClientsView')->middleware('auth');

Route::get('/addClient',[Controller::class,'ShowAddClient'])->name('ShowAddClient')->middleware('auth');

Route::post('addedClient',[Controller::class,'AddClient'])->name('AddClient')->middleware('auth');

Route::get('/client/{id}',[Controller::class,'ShowRent'])->name('ShowClient')->where('id', '[0-9]+')->middleware('auth');

Route::post('editedClient',[Controller::class,'EditClient'])->name('EditClient')->middleware('auth');

Route::get('/DeleteClient/{id}',[Controller::class,'DeleteClient'])->name('DeleteClient')->where('id', '[0-9]+')->middleware('auth');

Route::get('/logout',[Controller::class,'Logout'])->name('Logout')->middleware('auth');

Route::get('/dashboard',[Controller::class,'NotDashboard'])->name('NotDashboard');




Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return Inertia::render('Dashboard');
//})->name('dashboard');
