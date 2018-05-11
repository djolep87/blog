<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question extends Model
{
     // Table nam
     protected $table = 'questions';

     //Primaru Key
     public $primaryKey = 'id';
 
     //Timestamps
     public $timestamps = true;




    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany(QuestionComment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }
}
