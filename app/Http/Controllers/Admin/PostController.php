<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Post;
use App\Services\Post\Service;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;


class PostController extends Controller
{
    private Service $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.create', compact('categories', 'tags'));
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('admin.post.index');
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('admin.post.edit', compact('post', 'categories', 'tags'));
    }

    public function index()
    {
        $posts = Post::paginate(10);

        return view('admin.post.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('admin.post.show', compact('post'));
    }

    public function store(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validated();

        $this->service->store($data);

        return redirect()->route('admin.post.index');
    }

    public function update(UpdateRequest $updateRequest, Post $post)
    {
        $data = $updateRequest->validated();

        $this->service->update($post, $data);

        return redirect()->route('admin.post.index');
    }
}
