<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Session;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->paginate(5);

        return view('posts.index')->withPosts($posts);
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
        $this->validate($request, array(
                'title' => 'required|max:255',
                
                
        ));

        $post = new Post;

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;
        $post->order = $request->order;
        $post->views = $request->views;
        $post->status = $request->status;
        $post->slug  = str_slug($request->title);
        $post->meta = $request->meta;
        

        $post->save();

        Session::flash('success', 'sucessfully save!');
        return redirect()->route('posts.index', $post->id);
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
        return view('posts.show')->withPost($post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $post = Post::find($id);
     
        return view('posts.edit')->withPost($post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $this->validate($request, array(
                'title' => 'required|max:255',             
        ));

         $post = Post::find($id);

        $post->title = $request->input('title');
        $post->category_id = $request->input('category_id');
        $post->content = $request->input('content');
        $post->order = $request->input('order');
        $post->views = $request->input('views');
        $post->status = $request->input('status');
        $post->slug  = str_slug($request->input('title'));
        $post->meta = $request->input('meta');

        $post->save();

        Session::flash('success', 'This post was successfully updated');

        return redirect()->route('posts.show', $post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $post = Post::find($id);

        $post->delete();

        Session::flash('success', 'The post was sucessfully deleted.');
        return redirect()->route('posts.index');
    }
}
