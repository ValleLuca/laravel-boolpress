<?php

namespace App\Http\Controllers\Api;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($category = null){

        if($category){
            $posts = Post::where("category_id", $category)->get();
        }
        else{
        $posts = Post::with('category', 'tags')->get();
        }

        return response()->json($posts);
    }
    
    public function show($slug){

        $post = Post::where('slug', $slug)->with(["category", "tags"])->first();

        return response()->json($post);
    }
}
