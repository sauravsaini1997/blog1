<?php

namespace App\Http\Controllers;

use DB;
use App\Post;

class PostsController extends Controller {
    
    public function show( $slug ) {

        return view(
            'pages.posts', 
            [ 
                "posts" => Post::where('slug', $slug)->firstOrFail()
            ] 
        );

    }
}