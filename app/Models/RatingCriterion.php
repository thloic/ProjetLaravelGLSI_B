<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RatingCriterion extends Model
{
    protected $table = 'criterias';
    use HasFactory;

    protected $fillable = [
        'name', 'description',
    ];

    // Relation avec les notations
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
