<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WritingAnswer extends Model
{
    
    use HasFactory;
    protected $table = 'writing_answers';
    protected $fillable = ['user_id','answers','writing_question_id'];

    public function user(){
        return $this->hasOne(User::class,'id','user_id');
    }
}
