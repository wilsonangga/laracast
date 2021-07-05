<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\FuncCall;
use Ramsey\Collection\Map\AssociativeArrayMap;

class Post
{
    public static function all()
    {
        $files = File::files(resource_path("posts/"));

        return array_map(fn ($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            throw new ModelNotFoundException();
        }

        // $post = file_get_contents(__DIR__."/../resources/posts/{$slug}.html");

        return cache()->remember("posts.{$slug}", 1200, fn () => file_get_contents($path));
    }
}
