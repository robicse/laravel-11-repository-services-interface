<?php

namespace App\Repositories;

use App\Models\Post;

class PostRepository implements PostRepositoryInterface
{
    public function __construct(private Post $model)
    {
    }

    public function create($data): Post
    {
        $post = $this->model->create($data);
        return $post;
    }

    public function getAllPost()
    {
        return $this->model->all();
    }
}
