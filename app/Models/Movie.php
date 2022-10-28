<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Actor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function actors(){
        return $this->belongsToMany(Actor::class);
    }
}
