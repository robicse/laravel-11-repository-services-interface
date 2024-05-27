<?php
namespace App\Repositories;

use App\Models\Post;

interface PostRepositoryInterface{
    public function create(array $data): Post;

    public function getAllPost();
}

