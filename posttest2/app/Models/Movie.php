<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Movie extends Model
{
    use HasFactory;

    protected $table = "movies";
    protected $fillable = ["judul", "poster", "ringkasan", "durasi", "rate", "casts"];

    public function ticket(): HasMany {
        return $this->hasMany(Ticket::class, "id_movie", "id");
    }
}
