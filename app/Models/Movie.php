<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function users() {
        return $this->belongsToMany(
            User::class,
            'watchlists',
            'movies_id',
            'user_id',
        );
    }

    public function actors() {
        return $this->belongsToMany(
            Actor::class,
            'actor_movies',
            'movie_id',
            'actor_id',
        );
    }

}
