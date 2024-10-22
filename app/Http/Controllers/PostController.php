<?php

namespace App\Http\Controllers;

use App\Repositories\Interfaces\PostInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $post;
    public function __construct(PostInterface $postInterface){
        $this->post = $postInterface;
    }
    public function index($page){
        $posts=$this->post->getPostsOnPage($page,12);
        $newPosts = $this->post->getNewPost(10);
        $slider=$this->post->getNewPost(4);
        return view('post', compact('posts','newPosts', 'slider'));
    }
    public function document($page, $pageSize){
        $posts=$this->post->getPostsOnPage($page,12);
        return view('document', compact('posts'));
    }
    public function detailDocument($id){
        $post=$this->post->getPost($id);
        return view('detail_document', compact('post'));
    }
}
