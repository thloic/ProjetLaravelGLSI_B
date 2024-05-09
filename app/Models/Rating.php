<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'university_id',
        'criterion_id',
        'score',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec l'université
    public function university()
    {
        return $this->belongsTo(University::class);
    }

    // Relation avec le critère de notation
    public function criterion()
    {
        return $this->belongsTo(RatingCriterion::class);
    }
}
