<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cinema extends Model
{
    use HasFactory;

    protected $table = "cinemas";
    protected $fillable = ["nama", "alamat", "telepon"];

    public function ticket(): HasMany {
        return $this->hasMany(Ticket::class, "id_cinema", "id");
    }
}
