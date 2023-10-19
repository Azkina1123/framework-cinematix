<?php

use App\Models\Cinema;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home.index', ["title" => "Home"]);
})->name("home");

Route::get("/login", function() {
    return view("pages.login.index", ["title" => "Login"]);
})->name("login");

Route::get("/dashboard", function() {
    return view("pages.dashboard.index", ["title" => "Dashboard - Admin"]);
})->name("dashboard");

Route::get("/movies", function() {
    return view(
        "pages.movies.index",
        [
            "title" => "Movies - Admin",
            "movies" => Movie::all()
        ]
    );
})->name("movies");

Route::get("/cinemas", function() {
    return view(
        "pages.cinemas.index",
        [
            "title" => "cinemas - Admin",
            "cinemas" => Cinema::all()
        ]
    );
})->name("cinemas");

Route::get("/tickets", function() {
    return view(
        "pages.tickets.index",
        [
            "title" => "tickets - Admin",
            "tickets" => Ticket::all()
        ]
    );
})->name("tickets");
