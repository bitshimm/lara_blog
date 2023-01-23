<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\FilterRequest;
use App\Models\Post;


class IndexController extends BaseController
{
    public function __invoke(FilterRequest $filterRequest)
    {
        $posts = Post::paginate(10);

        return view('main.post.index', compact('posts'));
    }
}
