<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\comment;

class CommentController extends Controller
{
    public function __construct(){
        return $this->middleware('auth');
    }

    public function addcomment()
    {
        comment::create([
            'body'=> request('body'),
            'post_id' =>request('post_id'),
            'user_id'=> auth()->id()
        ]);
        return back();
    }


}
