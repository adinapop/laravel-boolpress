<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all(); // return an associative array
        $newPost = new Post();
        $newPost->name = $data['name'];
        $newPost->surname = $data['surname'];
        $newPost->username = $data['username'];
        $newPost->title = $data['title'];
        $newPost->caption = $data['caption'];
        $newPost->summary = $data['summary'];
        $newPost->position = $data['position'];
        $newPost->image = $data['image'];
        $newPost->save();

        return redirect()->route('posts.show', $newPost->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        // richiama automaticamente la pagina del singolo post attraverso show e gli passo come arogmento l'id del singolo post
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // devo pasare il record che voglio editare (di default è l'id)
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // non id, ma il record che si vuole editare (anche qui, di default l'id)
    public function update(Request $request, Post $post)
    {
        $data = $request->all(); // request for all, that return an associative array
        $this->fillAndSave($post, $data);

        return redirect()->route('posts.show', $post); // sempre nella view show 
    }

    private function fillAndSave(Post $post, $data) {
        $post->name = $data['name'];
        $post->surname = $data['surname'];
        $post->username = $data['username'];
        $post->title = $data['title'];
        $post->caption = $data['caption'];
        $post->summary = $data['summary'];
        $post->position = $data['position'];
        $post->image = $data['image'];
        $post->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
