<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Post\BaseController;
use App\Http\Requests\Post\StoreRequest;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $storeRequest)
    {
        $data = $storeRequest->validate();

        $this->service->store($data);

        return redirect()->route('posts.index');
    }
}
