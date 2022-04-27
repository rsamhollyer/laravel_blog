<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

  public function index() {
    $posts = Post::latest()->filter(request(['search']))->get();

    // So the filter above is not a special method, but the lower case name of the function in the Eloquent Model called scopeFilter. The 'scope' let's Laravel know that this is a scoped query function, and the Filter is the particular name of that scoped function.

    $categories = Category::all();

    return view("posts", [
      'posts' => $posts,
      'categories' => $categories
    ]);
  }

  public function show(Post $post) {
    return view('post', [
      'post' => $post
    ]);
  }
}
