<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function create()
    {
        return view('posts.create');
    }


    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);

        $post = new Post;
        $post->title = $request->title;
        $post->slug = \Str::slug($request->title);
        $post->body = $request->body;
        $post->save();
        // create new post
       


        return redirect()->to('/')->with('succes', 'post berhasil di buat');

    }


    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }


    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }


    public function update(Post $post, Request $request)
    {

        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $post->update($request->all());
        return redirect()->to('/')->with('succes', 'post berhasil di update');

    }


    public function delete(Post $post)
    {

        $post->delete();
        session()->flash("succes", "post berhasil di hapus");
        return redirect('/');
    }


}
 