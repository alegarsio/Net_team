<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['question', 'answer', 'course_id'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}