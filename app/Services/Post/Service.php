<?php

namespace App\Services\Post;

use App\Models\Post;

/**
 * @method store(array $data)
 * @method update(array $data)
 */
class Service
{
    public function store($data)
    {
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);
    }
    public function update($post, $data)
    {
        $tags = $data['tags'];

        unset($data['tags']);

        $post->tags()->sync($tags);
    }
}
