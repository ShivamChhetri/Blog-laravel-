<?php

namespace App\Http\Controllers;

use App\post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except(['index','show']);
    }


    public function index()
    {
        $posts= post::orderBy('id','desc')->get();
        return view('posts.index')->with('posts',   $posts);
    }

   
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'body' => 'required'
        ]);
        
        // $post=new post;
        // $post->title= request('title');
        // $post->body= request('body');

        // $post->save();
        post::create([
            'title'=> request('title'),
            'body' => request('body'),
            'user_id'=> auth()->id()
        ]);

        return redirect('/posts');

    }


    public function show($id)
    {
       $post= post::find($id);
       return view('posts.post')->with('post',$post);
    }

    
    public function edit($id)
    {
        $post=post::find($id);
        return view('posts.edit')->with('post',$post);
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required|min:5',
            'body' => 'required'
        ]);
        
        $post= post::find($id);
        $post->title= request('title');
        $post->body= request('body');

        $post->save();
        // post::create([
        //     'title'=> request('title'),
        //     'body' => request('body')
        // ]);

        return redirect('/posts');

    }

    
    public function destroy($id)
    {
        $post= post::find($id);
        $post->delete();
        return redirect('/posts');
    }
}
