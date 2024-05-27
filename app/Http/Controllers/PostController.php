<?php

namespace App\Http\Controllers;

use App\Repositories\PostRepositoryInterface;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // public function __construct(public PostRepositoryInterface $postRepository)
    // {
    // }

    // public function index(){
    //     return $this->postRepository->getAllPost();
    // }

    // public function store(){
    //     $data = ['title'=>'post title','description'=>'post description'];
    //     $post = $this->postRepository->create($data);
    //     dd($post->toArray());
    // }

    public function __construct(public PostService $postService)
    {
    }

    public function index(){
        return $this->postService->getAllPost();
    }

    public function store(){
        $data = ['title'=>'post title','description'=>'post description'];
        $post = $this->postService->postCreate($data);
        dd($post->toArray());
    }
}
