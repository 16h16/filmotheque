<?php

namespace App\Models;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'birth_date', 'gender'];

    public function movies(){
        return $this->belongsToMany(Movie::class);
    }
}
