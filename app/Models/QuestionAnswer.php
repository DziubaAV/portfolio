<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuestionAnswer extends Model
{
    protected $table = 'question_answers';

    protected $guarded = ['id', 'created_at', 'updated_at'];
}
