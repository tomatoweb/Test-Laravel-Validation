<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        // ... TASK: write validation here so that "title" field
        //           would be required and unique in the "posts" DB table
        $validated = $request->validate([
            'title' => 'required|unique:posts'
        ]);


        // Saving the post
        Post::create(['title' => $request->title]);

        return 'Success';
    }
}
