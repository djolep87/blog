<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // Table nam
    protected $table = 'posts';

    //Primaru Key
    public $primaryKey = 'id';

    //Timestamps
    public $timestamps = true;


    public function user(){
        return $this->belongsTo('App\User');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function addComment($body)
    {
        $this->comments()->create(compact('body'));
    }

}
