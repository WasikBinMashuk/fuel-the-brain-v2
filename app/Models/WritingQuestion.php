<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingQuestion extends Model
{
    use HasFactory;
    protected $table = 'writing_questions';
    protected $fillable = ['topic_name'];
}
