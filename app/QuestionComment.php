<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuestionComment extends Model
{
    protected $fillable = ['body'];

    public function post()
    {
        return $this->belongsTo(question::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
