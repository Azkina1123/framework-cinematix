<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Models\Cinema;
use App\Models\Ticket;
use Illuminate\Support\Facades\Route;
use App\Models\Movie;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can signUp web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// landing page
Route::get('/', function () {
    return view('home', ["title" => "Home"]);
})->name("home");

// halaman login
Route::get("/login", function () {
    return view("auth.login", ["title" => "Login"]);
})->name("login");

// panggil fungsi loginAction di AuthController
Route::post("/login/action", [
    AuthController::class, "loginAction"
])->name("login.action");

// halaman sign up
Route::get("/sign-up", function () {
    return view("auth.sign-up", ["title" => "Sign Up"]);
})->name("sign-up");

// panggil fungsi signUpAction di AuthController
Route::post("/sign-up/action", [
    AuthController::class, "signUpAction"
])->name("sign-up.action");


Route::middleware("auth")->group(function () {

    Route::get("/logout", [AuthController::class, "logout"])->name("logout");


    Route::get("/dashboard", function () {
        return view("admin.dashboard", ["title" => "Dashboard - Admin"]);
    })->name("admin.dashboard");

    Route::get("/movies", function () {
        return view(
            "admin.movies",
            [
                "title" => "Movies - Admin",
                "movies" => Movie::all(),
                "edit" => false
            ]
        );
    })->name("admin.movies");

    // pilih movie yang ingin diedit/delete
    Route::get("/movies/edit/select-movie", function () {
        return view(
            "admin.movies",
            [
                "title" => "Edit Movie - Admin",
                "movies" => Movie::all(),
                "edit" => true
            ]
        );
    })->name("admin.movies.edit.select-movie");

    // route CRUD movie
    Route::controller(MovieController::class)->group(function () {

        // tambahkan movie baru
        Route::get("/movies/add", "add")->name("admin.movies.add");
        Route::post("/movies/add/action", "store")->name("admin.movies.add.action");
        Route::get("/movies/edit/{id}", "edit")->name("admin.movies.edit");
        Route::post("/movies/edit/{id}/action", "update")->name("admin.movies.edit.action");
        Route::get("/movies/delete/{id}/action", "delete")->name("admin.movies.delete.action");
        // Route::post("/movies/edit/{id}/action", "update")->name("admin.movies.edit.action");

    });



    Route::get("/cinemas", function () {
        return view(
            "admin.cinemas",
            [
                "title" => "cinemas - Admin",
                "cinemas" => Cinema::all()
            ]
        );
    })->name("admin.cinemas");

    Route::get("/tickets", function () {
        return view(
            "admin.tickets",
            [
                "title" => "tickets - Admin",
                "tickets" => Ticket::all()
            ]
        );
    })->name("admin.tickets");
});
