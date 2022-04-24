<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;

class Post {

    public static function all() {
        $path = resource_path("posts");
        $files = File::files($path);

        $allPosts = array_map(
            fn ($file) =>
            $file->getContents(),
            $files
        );

        return $allPosts;
    }

    public static function find($slug) {
        $path = resource_path("posts/{$slug}.html");

        if (!file_exists($path)) {
            throw new ModelNotFoundException("Post not found", 404);
        }

        $post = cache()->remember(
            "posts.{$slug}",
            now()->addMinutes(20),
            fn () => file_get_contents($path) // other wise, function () use ($path){}
        );

        return $post;
    }
}
