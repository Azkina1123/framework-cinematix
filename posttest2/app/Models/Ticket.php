<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;
    protected $table = "tickets";
    protected $fillable = ["harga", "tgl_waktu_tayang", "id_movie", "id_cinema"];

    public function movie(): BelongsTo {
        return $this->belongsTo(Movie::class, "id_movie");
    }
    public function cinema(): BelongsTo {
        return $this->belongsTo(Cinema::class, "id_cinema");
    }
}
