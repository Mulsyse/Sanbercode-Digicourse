<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;

    protected $fillable = ['tittle', 'summary', 'relese_year', 'poster', 'genre_id'];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }
}