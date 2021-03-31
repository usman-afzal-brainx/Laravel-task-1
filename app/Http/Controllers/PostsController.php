<?php

namespace App\Http\Controllers;

class PostsController extends Controller
{
    public function show($post)
    {

        $posts = [
            'my-first-post' => "This is my first post",
            'my-second-post' => 'This is the second post of the article',
        ];

        if (!array_key_exists($post, $posts)) {
            abort(404, 'Sorry that post was not found');
        }

        return view('test', [
            'name' => $posts[$post],
        ]);
    }

}
