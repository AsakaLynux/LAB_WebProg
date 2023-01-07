<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsToMany(User::class);
    }

    public function movie() {
        return $this->belongsToMany(Movie::class);
    }
}
