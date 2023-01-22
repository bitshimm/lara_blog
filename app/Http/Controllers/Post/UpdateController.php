<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends BaseController
{
    public function __invoke(UpdateRequest $updateRequest, Post $post)
    {
        $data = $updateRequest->validate();

        $this->service->update($post, $data);

        return view('post.show', compact('post'));
    }
}
