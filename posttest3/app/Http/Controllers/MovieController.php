<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function add()
    {
        return view("admin.form-movie", [
            "title" => "Add Movie"
        ]);
    }

    public function edit($id)
    {
        $movie = Movie::all()->where("id", $id)->first();

        return view(
            "admin.form-movie",
            [
                "title" => "Edit Movie - Admin",
                "movie" => $movie
            ]
        );
    }

    public function store(Request $request)
    {


        $namaPoster = "";

        if ($request->hasFile("poster")) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->poster->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            $namaPoster = $randomNum . "." . $ekstensi;
            $request->poster->move("assets/poster/", $namaPoster);
        }

        $validateData = $request->validate([
            "judul" => "required|string|max:50",
            "ringkasan" => "required|string|max:255",
            "durasi" => "required|integer",
            "rate" => "required|numeric",
            "casts" => "required|string"
        ]);

        Movie::create([
            "judul" => $validateData["judul"],
            "poster" => $namaPoster,
            "ringkasan" => $validateData["ringkasan"],
            "durasi" => $validateData["durasi"],
            "rate" => $validateData["rate"],
            "casts" => $validateData["casts"],
        ]);

        // pindahkan file ke assets/poster
        return redirect()->route("admin.movies")->with("success", "Data has been successfully added!");
    }

    public function update(Request $request, $id)
    {

        $namaPoster = Movie::all()->where("id", $id)->first()->poster;

        if ($request->hasFile("poster")) {
            $randomNum = mt_rand(1000, 9999);
            $filename = $request->poster->getClientOriginalName();

            $x = explode('.', $filename);
            $ekstensi = strtolower(end($x));
            unlink("assets/poster/$namaPoster");
            $namaPoster = $randomNum . "." . $ekstensi;
            $request->poster->move("assets/poster/", $namaPoster);
        }

        $validateData = $request->validate([
            "judul" => "required|string|max:50",
            "ringkasan" => "required|string|max:255",
            "durasi" => "required|integer",
            "rate" => "required|numeric",
            "casts" => "required|string"
        ]);

        $movie = Movie::findOrFail($id);

        $movie->update([
            "judul" => $validateData["judul"],
            "poster" => $namaPoster,
            "ringkasan" => $validateData["ringkasan"],
            "durasi" => $validateData["durasi"],
            "rate" => $validateData["rate"],
            "casts" => $validateData["casts"],
        ]);


        return redirect()->route("admin.movies")->with("success", "Data has been successfully updated!");
    }

    public function delete(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        unlink("assets/poster/$movie->poster");
        $movie->delete();

        return redirect()->route("admin.movies")->with("success", "Data has been successfully updated!");
    }
}
