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

        $response = [
            'msg' => 'Successfully got all posts.',
            'posts' => $posts
        ];
        return response()->json($response, 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $url = $request->input('url');
        $image = $request->input('image');

        $post = new Post();
        $post->title = $title;
        $post->category_id = $category_id;
        $post->description = $description;
        $post->url = $url;
        $post->image = $image;

        if(!$post->save()){
            $response = [
                'msg' => 'Unable to create new post.',
                'post' => $post
            ];
            return response()->json($response, 400);
        }

        $response = [
            'msg' => 'Saved post successfully',
            'post' => $post
        ];
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        $response = [
            'msg' => 'Successfully got post.',
            'post' => $post
        ];

        return response()->json($response, 200);
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
        $post = Post::findOrFail($id);


        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $description = $request->input('description');
        $url = $request->input('url');
        $image = $request->input('image');

        $post->category_id = $category_id;
        $post->title = $title;
        $post->description = $description;
        $post->url = $url;
        $post->image = $image;

        if(!$post->update()){
            $response = [
                'msg' => 'Updating post was unsuccessful.'
            ];
            return response()->json($response, 400);
        }
        $response = [
            'msg' => 'Successfully updated post.',
            'post' => $post
        ];
        return response()->json($response, 201);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        if(!$post->delete()){
            $response = [
                'msg' => 'Delete was not successful',
                'posts' => $posts
            ];
            return response()->json($response, 400);
        };
    }
}
