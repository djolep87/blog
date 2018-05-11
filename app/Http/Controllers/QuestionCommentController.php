<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\question;
use App\QuestionComment;

class QuestionCommentController extends Controller
{
    public function store(question $post)
    {
      
        $this->validate(request(), ['body' => 'required|min:2']);


        $post->addComment(request('body'));

        return back();
    }
}
