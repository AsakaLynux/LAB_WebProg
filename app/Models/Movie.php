<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function watchlist() {
        return $this->belongsToMany(Watchlist::class);
    }

    public function user() {
        return $this->belongsToMany(User::class);
    }

}
