<?php

namespace App\Http\Controllers;

class PostsController extends Controller {
    
    public function show( $slug ) {

        $posts = \DB::table('posts')->where('slug', $slug)->first();

        return view(
            'pages.posts', 
            [ 
                "posts" => $posts
            ] 
        );

    }
}