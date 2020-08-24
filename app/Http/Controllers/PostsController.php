<?php

namespace App\Http\Controllers;

class PostsController extends Controller {
    
    public function show( $slug ) {

        $posts = \DB::table('posts')->where('slug', $slug)->first();

        dd($posts);

        return view(
            'pages.posts', 
            [ 
                "posts" => $post 
            ] 
        );

    }
}