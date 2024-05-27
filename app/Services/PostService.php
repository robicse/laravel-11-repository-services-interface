<?php

namespace App\Services;

use App\Repositories\PostRepositoryInterface;

class PostService
{
    public function __construct(public PostRepositoryInterface $postRepository)
    {
    }

    public function postCreate($data){
        return $this->postRepository->create($data);
    }

    public function getAllPost(){
        return $this->postRepository->getAllPost();
    }
}
