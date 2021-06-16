<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
    use HasFactory;

    protected $fillable = [
        'vocabulary',
        'translate',
        'spelling',
        'category_id',
        'lesson_id',
    ];

    public function lessons()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
