<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'website','logo',
    ];

    // Relation avec les notations
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    // Relation avec les commentaires
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
