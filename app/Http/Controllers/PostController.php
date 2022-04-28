<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller {

  public function index() {
    $queryParams = request()->query();
    $posts = Post::latest()->filter($queryParams)->paginate(6)->withQueryString();
    // So the filter above is not a special method, but the lower case name of the function in the Eloquent Model called scopeFilter. The 'scope' let's Laravel know that this is a scoped query function, and the Filter is the particular name of that scoped function.

    return view("posts.index", [
      'posts' => $posts,

    ]);
  }

  public function show(Post $post) {
    return view('posts.show', [
      'post' => $post
    ]);
  }
}
